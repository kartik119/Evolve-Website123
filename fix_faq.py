import os
import re
import glob

# Fix HTML inline display:none
html_files = glob.glob('*.html')
for file in html_files:
    with open(file, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # kids.html & uniforms.html have inline styles for faq-answer with display: none
    content = content.replace('style="display: none; ', 'style="')
    
    with open(file, 'w', encoding='utf-8') as f:
        f.write(content)

# Fix script.js
with open('script.js', 'r', encoding='utf-8') as f:
    js_content = f.read()

# Replace the FAQ toggle block
old_faq_js = """    // FAQ Toggle
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        item.addEventListener('click', () => {
            const answer = item.querySelector('.faq-answer');
            const icon = item.querySelector('i');
            
            if (answer) {
                const isVisible = answer.style.display === 'block';
                
                // Close all others
                document.querySelectorAll('.faq-answer').forEach(a => a.style.display = 'none');
                document.querySelectorAll('.faq-item i').forEach(i => {
                    i.classList.remove('fa-minus');
                    i.classList.add('fa-plus');
                });

                if (!isVisible) {
                    answer.style.display = 'block';
                    icon.classList.remove('fa-plus');
                    icon.classList.add('fa-minus');
                }
            }
        });
    });"""

new_faq_js = """    // FAQ Toggle
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        item.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            
            // Close all others
            document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('active'));

            if (!isActive) {
                item.classList.add('active');
            }
        });
    });"""

js_content = js_content.replace(old_faq_js, new_faq_js)

with open('script.js', 'w', encoding='utf-8') as f:
    f.write(js_content)

print("FAQ fixed in HTML and JS.")
