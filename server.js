require('dotenv').config();
const express = require('express');
const cors = require('cors');
const sqlite3 = require('sqlite3').verbose();
const bcrypt = require('bcrypt');
const jwt = require('jsonwebtoken');
const multer = require('multer');
const path = require('path');
const fs = require('fs');

const app = express();
const PORT = process.env.PORT || 3000;

// Middleware
app.use(cors());
app.use(express.json({ limit: '50mb' }));
app.use(express.urlencoded({ limit: '50mb', extended: true }));
app.use('/uploads', express.static(path.join(__dirname, 'uploads')));
app.use(express.static(__dirname));

// SQLite Database Connection
const db = new sqlite3.Database('./database.sqlite', (err) => {
    if (err) {
        console.error('Error opening database', err.message);
    } else {
        console.log('Connected to SQLite database successfully!');
        initializeDatabase();
    }
});

function initializeDatabase() {
    db.serialize(() => {
        // Admins Table
        db.run(`CREATE TABLE IF NOT EXISTS admins (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            email TEXT UNIQUE NOT NULL,
            password_hash TEXT NOT NULL,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )`);
        
        // Create Leads Table
        db.run(`CREATE TABLE IF NOT EXISTS leads (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            first_name TEXT,
            last_name TEXT,
            email TEXT,
            phone TEXT,
            company TEXT,
            product_category TEXT,
            quantity TEXT,
            fabric_preference TEXT,
            branding TEXT,
            delivery_location TEXT,
            timeline TEXT,
            message TEXT,
            source_page TEXT,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )`);

        // Settings Table
        db.run(`CREATE TABLE IF NOT EXISTS settings (
            key TEXT PRIMARY KEY,
            value TEXT
        )`);

        const defaultSettings = [
            ['company_phone', '+1 (555) 123-4567'],
            ['company_email', 'hello@evolveclothing.com'],
            ['company_address', '123 Manufacturing Way, NY 10001']
        ];
        
        const stmt = db.prepare(`INSERT OR IGNORE INTO settings (key, value) VALUES (?, ?)`);
        for (const [k, v] of defaultSettings) {
            stmt.run(k, v);
        }
        stmt.finalize();
        
        // Blogs Table
        db.run(`CREATE TABLE IF NOT EXISTS blogs (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            title TEXT NOT NULL,
            slug TEXT UNIQUE NOT NULL,
            content TEXT NOT NULL,
            excerpt TEXT,
            featured_image TEXT,
            status TEXT DEFAULT 'Published',
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )`);
    });
}

// Multer Setup
const storage = multer.diskStorage({
    destination: (req, file, cb) => {
        const uploadDir = 'uploads/';
        if (!fs.existsSync(uploadDir)) fs.mkdirSync(uploadDir);
        cb(null, uploadDir);
    },
    filename: (req, file, cb) => {
        cb(null, Date.now() + path.extname(file.originalname));
    }
});
const upload = multer({ storage });

// JWT Middleware
const authenticateToken = (req, res, next) => {
    const authHeader = req.headers['authorization'];
    const token = authHeader && authHeader.split(' ')[1];
    
    if (!token) return res.status(401).json({ error: 'Access Denied' });

    jwt.verify(token, process.env.JWT_SECRET || 'super_secret_jwt_key', (err, user) => {
        if (err) return res.status(403).json({ error: 'Invalid Token' });
        req.user = user;
        next();
    });
};

/* ==========================================
   API ENDPOINTS
   ========================================== */

// =======================
// LEADS API
// =======================

// POST: Submit a new lead (Public)
app.post('/api/leads', (req, res) => {
    const {
        first_name, last_name, email, phone, company,
        product_category, quantity, fabric_preference,
        branding, delivery_location, timeline, message, source_page
    } = req.body;

    const query = `INSERT INTO leads (
        first_name, last_name, email, phone, company, product_category,
        quantity, fabric_preference, branding, delivery_location, timeline, message, source_page
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)`;

    db.run(query, [
        first_name, last_name, email, phone, company, product_category,
        quantity, fabric_preference, branding, delivery_location, timeline, message, source_page
    ], function(err) {
        if (err) return res.status(500).json({ error: 'Database error' });
        res.json({ success: true, message: 'Lead saved successfully', lead_id: this.lastID });
    });
});

// GET: Fetch all leads (Admin Only)
app.get('/api/leads', authenticateToken, (req, res) => {
    db.all(`SELECT * FROM leads ORDER BY created_at DESC`, [], (err, rows) => {
        if (err) return res.status(500).json({ error: 'Database error' });
        res.json(rows);
    });
});

app.post('/api/login', (req, res) => {
    const { email, password } = req.body;
    
    db.get('SELECT * FROM admins WHERE email = ?', [email], async (err, admin) => {
        if (err) return res.status(500).json({ error: err.message });
        if (!admin) return res.status(400).json({ error: 'Admin not found' });

        // Temporarily bypass bcrypt if they use the raw default password for easy testing
        // You should hash the password in production
        let validPassword = false;
        if (password === 'evolveadmin' && admin.password_hash === '$2b$10$YourHashedPasswordHere') {
            validPassword = true;
        } else {
            validPassword = await bcrypt.compare(password, admin.password_hash);
        }
        
        if (!validPassword) return res.status(400).json({ error: 'Invalid password' });

        const token = jwt.sign({ id: admin.id, email: admin.email }, process.env.JWT_SECRET || 'super_secret_jwt_key', { expiresIn: '24h' });
        res.json({ token });
    });
});

app.get('/api/leads', authenticateToken, (req, res) => {
    db.all('SELECT * FROM leads ORDER BY created_at DESC', [], (err, rows) => {
        if (err) return res.status(500).json({ error: err.message });
        res.json(rows);
    });
});

app.post('/api/leads', (req, res) => {
    const { name, email, phone, company, message, lead_type } = req.body;
    db.run(
        'INSERT INTO leads (name, email, phone, company, message, lead_type) VALUES (?, ?, ?, ?, ?, ?)',
        [name, email, phone, company, message, lead_type || 'Contact Form'],
        function(err) {
            if (err) return res.status(500).json({ error: err.message });
            res.json({ success: true, lead_id: this.lastID });
        }
    );
});

app.get('/api/settings', (req, res) => {
    db.all('SELECT * FROM settings', [], (err, rows) => {
        if (err) return res.status(500).json({ error: err.message });
        const settings = {};
        rows.forEach(row => { settings[row.key] = row.value; });
        res.json(settings);
    });
});

app.put('/api/settings', authenticateToken, (req, res) => {
    const updates = req.body;
    
    db.serialize(() => {
        db.run('BEGIN TRANSACTION');
        const stmt = db.prepare('INSERT OR REPLACE INTO settings (key, value) VALUES (?, ?)');
        for (const [key, value] of Object.entries(updates)) {
            stmt.run(key, value);
        }
        stmt.finalize();
        db.run('COMMIT', (err) => {
            if (err) return res.status(500).json({ error: err.message });
            res.json({ success: true, message: 'Settings updated successfully' });
        });
    });
});

// 5. Page Manager (GrapesJS Editor)
app.get('/api/pages', authenticateToken, (req, res) => {
    // List of editable pages
    const pages = [
        { title: 'Home Page', filename: 'index.html' },
        { title: 'About Us', filename: 'about.html' },
        { title: 'Services', filename: 'services.html' },
        { title: 'Manufacturing', filename: 'manufacturing.html' },
        { title: 'Uniforms', filename: 'uniforms.html' },
        { title: 'Contact', filename: 'contact.html' },
        { title: 'Quote', filename: 'quote.html' }
    ];
    res.json(pages);
});

app.get('/api/pages/:page', authenticateToken, (req, res) => {
    const pageName = req.params.page;
    if (!pageName.endsWith('.html')) return res.status(400).json({ error: 'Invalid page' });
    
    // Let's use path.join(__dirname, pageName) since server.js is in /Evolve Clothing/
    const targetPath = path.join(__dirname, pageName);
    
    fs.readFile(targetPath, 'utf8', (err, data) => {
        if (err) return res.status(500).json({ error: 'File not found' });
        res.send(data);
    });
});

app.post('/api/pages/:page', authenticateToken, (req, res) => {
    const pageName = req.params.page;
    if (!pageName.endsWith('.html')) return res.status(400).json({ error: 'Invalid page' });
    
    const targetPath = path.join(__dirname, pageName);
    const { html, css } = req.body;
    
    if (!html) return res.status(400).json({ error: 'No HTML provided' });
    
    fs.readFile(targetPath, 'utf8', (err, data) => {
        if (err) return res.status(500).json({ error: 'File not found' });
        
        // 1. Replace the contents of the body safely using a replacer function 
        // to prevent '$' characters in the html from being treated as regex groups (which causes exponential bloat)
        let newFile = data.replace(/(<body[^>]*>)([\s\S]*?)(<\/body>)/i, (match, p1, p2, p3) => {
            return `${p1}\n${html}\n${p3}`;
        });
        
        // 2. Inject the custom CSS generated by GrapesJS into the <head>
        // We look for our specific <style id="gjs-css"> block. If it exists, replace it.
        // We also use a replacer function here for safety.
        const styleBlock = `\n<style id="gjs-css">\n${css || ''}\n</style>\n`;
        if (newFile.includes('<style id="gjs-css">')) {
            newFile = newFile.replace(/<style id="gjs-css">[\s\S]*?<\/style>/i, () => styleBlock.trim());
        } else {
            newFile = newFile.replace('</head>', () => `${styleBlock}</head>`);
        }
        
        fs.writeFile(targetPath, newFile, 'utf8', (err) => {
            if (err) return res.status(500).json({ error: 'Error writing file' });
            res.json({ success: true, message: 'Page saved successfully!' });
        });
    });
});

// 4. Media Upload (Protected POST)
app.post('/api/upload', authenticateToken, upload.single('image'), (req, res) => {
    if (!req.file) return res.status(400).json({ error: 'No file uploaded' });
    
    const imageUrl = `/uploads/${req.file.filename}`;
    res.json({ success: true, url: imageUrl });
});

app.listen(PORT, () => {
    console.log(`Backend Server running on port ${PORT}`);
});
