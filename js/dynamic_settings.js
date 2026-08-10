document.addEventListener('DOMContentLoaded', async () => {
    try {
        const res = await fetch('http://localhost:3000/api/settings');
        if (!res.ok) return;
        const settings = await res.json();

        // Update elements if they exist
        const phoneEls = document.querySelectorAll('.dynamic-phone');
        const emailEls = document.querySelectorAll('.dynamic-email');
        const addressEls = document.querySelectorAll('.dynamic-address');
        const waEls = document.querySelectorAll('.dynamic-wa');

        phoneEls.forEach(el => el.innerText = settings.company_phone || '+1 (555) 123-4567');
        emailEls.forEach(el => {
            el.innerText = settings.company_email || 'hello@evolveclothing.com';
            if (el.tagName === 'A') el.href = 'mailto:' + (settings.company_email || 'hello@evolveclothing.com');
        });
        
        // Format address with breaks
        const addr = settings.company_address || '123 Manufacturing Way, NY 10001';
        addressEls.forEach(el => el.innerHTML = addr.replace(/,\s*/g, ',<br>'));

        // WhatsApp Links
        if (settings.company_phone) {
            const cleanPhone = settings.company_phone.replace(/\D/g, '');
            const waMessage = encodeURIComponent("Hello Evolve Clothing Co.! I am interested in your custom manufacturing services. Could you share more details?");
            waEls.forEach(el => {
                el.href = `https://wa.me/${cleanPhone}?text=${waMessage}`;
            });
        }
    } catch (err) {
        console.error('Failed to load settings:', err);
    }
});
