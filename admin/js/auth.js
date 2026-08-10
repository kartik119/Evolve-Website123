// Admin Login Logic
document.addEventListener('DOMContentLoaded', () => {
    const loginForm = document.getElementById('loginForm');
    const loginError = document.getElementById('loginError');

    // Check if already logged in
    if (localStorage.getItem('adminToken')) {
        window.location.href = 'dashboard.html';
    }

    loginForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const btn = document.getElementById('loginBtn');
        
        btn.disabled = true;
        btn.innerHTML = '<span>Signing In...</span> <i class="fa-solid fa-spinner fa-spin"></i>';
        loginError.style.display = 'none';

        try {
            const res = await fetch('http://localhost:3000/api/login', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ email, password })
            });
            
            const data = await res.json();
            
            if (res.ok) {
                localStorage.setItem('adminToken', data.token);
                window.location.href = 'dashboard.html';
            } else {
                loginError.textContent = data.error || 'Login failed';
                loginError.style.display = 'block';
            }
        } catch (err) {
            loginError.textContent = 'Network error. Is the server running?';
            loginError.style.display = 'block';
        } finally {
            btn.disabled = false;
            btn.innerHTML = '<span>Sign In</span> <i class="fa-solid fa-arrow-right"></i>';
        }
    });
});
