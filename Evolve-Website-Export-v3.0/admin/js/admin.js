const API_URL = 'http://localhost:3000/api';
const token = localStorage.getItem('adminToken');

if (!token) {
    window.location.href = 'index.html';
}

const headers = {
    'Content-Type': 'application/json',
    'Authorization': `Bearer ${token}`
};

// Tab Switching
function switchTab(tabId) {
    document.querySelectorAll('.tab-content').forEach(el => el.classList.remove('active'));
    document.querySelectorAll('.nav-item').forEach(el => el.classList.remove('active'));
    
    document.getElementById(tabId).classList.add('active');
    event.currentTarget.classList.add('active');
    
    if(tabId === 'leads') {
        document.getElementById('pageTitle').textContent = 'Leads & Inquiries';
        fetchLeads();
    } else if (tabId === 'pages') {
        document.getElementById('pageTitle').textContent = 'Page Manager';
        fetchPages();
    } else if (tabId === 'blogs') {
        document.getElementById('pageTitle').textContent = 'Blog Posts';
    } else if (tabId === 'settings') {
        document.getElementById('pageTitle').textContent = 'Site Settings';
        fetchSettings();
    }
}

// Fetch Pages
async function fetchPages() {
    try {
        const res = await fetch(`${API_URL}/pages`, { headers });
        const pages = await res.json();
        
        const tbody = document.getElementById('pagesTableBody');
        tbody.innerHTML = '';
        
        pages.forEach(page => {
            tbody.innerHTML += `
                <tr>
                    <td><strong>${page.title}</strong></td>
                    <td>${page.filename}</td>
                    <td>
                        <a href="builder.html?page=${page.filename}" class="btn-primary" style="display:inline-block; padding:8px 15px; text-decoration:none;">
                            <i class="fa-solid fa-pen"></i> Edit Page
                        </a>
                    </td>
                </tr>
            `;
        });
    } catch (err) {
        console.error('Error fetching pages:', err);
    }
}

// Show Custom Modal for Leads
window.showLeadDetails = function(leadJson) {
    const data = JSON.parse(decodeURIComponent(leadJson));
    const fullName = `${data.first_name || ''} ${data.last_name || ''}`.trim() || 'Guest';
    
    document.getElementById('modalTitle').innerText = 'Lead Inquiry from ' + fullName;
    document.getElementById('modalContent').innerHTML = `
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 20px;">
            <div><strong>Email:</strong> ${data.email || 'N/A'}</div>
            <div><strong>Phone:</strong> ${data.phone || 'N/A'}</div>
            <div><strong>Company:</strong> ${data.company || 'N/A'}</div>
            <div><strong>Product:</strong> ${data.product_category || 'N/A'}</div>
            <div><strong>Quantity:</strong> ${data.quantity || 'N/A'}</div>
            <div><strong>Fabric:</strong> ${data.fabric_preference || 'N/A'}</div>
            <div><strong>Branding:</strong> ${data.branding || 'N/A'}</div>
            <div><strong>Location:</strong> ${data.delivery_location || 'N/A'}</div>
            <div><strong>Timeline:</strong> ${data.timeline || 'N/A'}</div>
            <div><strong>Source:</strong> ${data.source_page || 'N/A'}</div>
        </div>
        <div style="background: #f9fafb; padding: 15px; border-radius: 6px; border: 1px solid #eee;">
            <strong style="display:block; margin-bottom: 10px;">Message:</strong>
            <p style="margin: 0; white-space: pre-wrap;">${data.message || 'No message provided.'}</p>
        </div>
    `;
    document.getElementById('leadModal').style.display = 'block';
};

// Fetch Leads
async function fetchLeads() {
    try {
        const res = await fetch(`${API_URL}/leads`, { headers });
        if(res.status === 401 || res.status === 403) {
            localStorage.removeItem('adminToken');
            window.location.href = 'index.html';
            return;
        }
        const leads = await res.json();
        
        const tbody = document.getElementById('leadsTableBody');
        tbody.innerHTML = '';
        
        if (leads.length === 0) {
            tbody.innerHTML = '<tr><td colspan="6">No leads found.</td></tr>';
            return;
        }
        
        leads.forEach(lead => {
            const date = new Date(lead.created_at).toLocaleDateString();
            const fullName = `${lead.first_name || ''} ${lead.last_name || ''}`.trim() || 'Guest';
            
            // Encode the lead object to safely pass it in the onclick handler
            const safeLead = encodeURIComponent(JSON.stringify(lead));

            tbody.innerHTML += `
                <tr>
                    <td>${date}</td>
                    <td><strong>${fullName}</strong></td>
                    <td>${lead.email || '-'}<br><small>${lead.phone || '-'}</small></td>
                    <td>${lead.company || '-'}</td>
                    <td><span class="status-badge status-new">${lead.product_category || lead.source_page || 'Contact'}</span></td>
                    <td><button style="padding:5px 10px; cursor:pointer;" onclick="showLeadDetails('${safeLead}')">View Details</button></td>
                </tr>
            `;
        });
    } catch (err) {
        console.error('Error fetching leads:', err);
    }
}

// Old fetchSettings removed

// Save Settings
document.getElementById('settingsForm').addEventListener('submit', async (e) => {
    e.preventDefault();
    const updates = {
        company_phone: document.getElementById('set_phone').value,
        company_email: document.getElementById('set_email').value,
        company_address: document.getElementById('set_address').value
    };
    
    try {
        const res = await fetch(`${API_URL}/settings`, {
            method: 'PUT',
            headers,
            body: JSON.stringify(updates)
        });
        if (res.ok) alert('Settings saved successfully!');
        else alert('Error saving settings.');
    } catch (err) {
        alert('Network error.');
    }
});

// Image Uploader
async function uploadImage(inputId, settingKey, previewId) {
    const fileInput = document.getElementById(inputId);
    const file = fileInput.files[0];
    if (!file) {
        alert('Please select an image first.');
        return;
    }

    const formData = new FormData();
    formData.append('image', file);

    let uploadBtn = null;
    try {
        if (window.event && window.event.target) {
            uploadBtn = window.event.target;
            uploadBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Uploading...';
            uploadBtn.disabled = true;
        }
    } catch(e) {}

    try {
        // 1. Upload image to server
        const uploadRes = await fetch(`${API_URL}/upload`, {
            method: 'POST',
            headers: { 'Authorization': `Bearer ${token}` },
            body: formData
        });
        const uploadData = await uploadRes.json();
        
        if (uploadData.success) {
            // 2. Save new image URL to settings
            const imageUrl = uploadData.url;
            const updates = {};
            updates[settingKey] = imageUrl;

            const saveRes = await fetch(`${API_URL}/settings`, {
                method: 'PUT',
                headers,
                body: JSON.stringify(updates)
            });

            if (saveRes.ok) {
                const preview = document.getElementById(previewId);
                preview.src = 'http://localhost:3000' + imageUrl;
                preview.style.display = 'block';
                alert('Image updated successfully!');
            }
        } else {
            alert('Error uploading image.');
        }
    } catch (err) {
        console.error(err);
        alert('Network error uploading image.');
    } finally {
        if (uploadBtn) {
            uploadBtn.innerHTML = 'Upload';
            uploadBtn.disabled = false;
        }
        fileInput.value = '';
    }
}

// Fetch Settings (Updated to also load images)
async function fetchSettings() {
    try {
        const res = await fetch(`${API_URL}/settings`);
        const settings = await res.json();
        
        document.getElementById('set_phone').value = settings.company_phone || '';
        document.getElementById('set_email').value = settings.company_email || '';
        document.getElementById('set_address').value = settings.company_address || '';

        // Load preview images if they exist
        if (settings.home_hero_img_1) {
            document.getElementById('preview_hero_1').src = 'http://localhost:3000' + settings.home_hero_img_1;
            document.getElementById('preview_hero_1').style.display = 'block';
        }
        if (settings.home_hero_img_2) {
            document.getElementById('preview_hero_2').src = 'http://localhost:3000' + settings.home_hero_img_2;
            document.getElementById('preview_hero_2').style.display = 'block';
        }
        if (settings.about_main_img) {
            document.getElementById('preview_about').src = 'http://localhost:3000' + settings.about_main_img;
            document.getElementById('preview_about').style.display = 'block';
        }

    } catch (err) {
        console.error('Error fetching settings:', err);
    }
}

// Logout
document.getElementById('logoutBtn').addEventListener('click', () => {
    localStorage.removeItem('adminToken');
    window.location.href = 'index.html';
});

// Initial Load
fetchLeads();
