
document.addEventListener('DOMContentLoaded', () => {
    // Dropdown hover handling
    const dropdowns = document.querySelectorAll('.has-dropdown');
    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('mouseenter', () => {
            const menu = dropdown.querySelector('.dropdown-menu');
            if (menu) {
                menu.style.opacity = '1';
                menu.style.visibility = 'visible';
                menu.style.transform = 'translateX(-50%) translateY(0)';
            }
        });
        dropdown.addEventListener('mouseleave', () => {
            const menu = dropdown.querySelector('.dropdown-menu');
            if (menu) {
                menu.style.opacity = '0';
                menu.style.visibility = 'hidden';
                menu.style.transform = 'translateX(-50%) translateY(10px)';
            }
        });
    });

    // FAQ Toggle
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
    });

    // Filter functionality (for both Lookbook and Gallery)
    const filterBtns = document.querySelectorAll('.filter-btn');
    const lookbookItems = document.querySelectorAll('.lookbook-item');
    const galleryItems = document.querySelectorAll('.gallery-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class
            filterBtns.forEach(b => {
                b.classList.remove('active');
                b.style.background = 'var(--white)';
                b.style.color = 'var(--text-color)';
                b.style.borderColor = 'var(--border-color)';
            });
            // Add active class
            btn.classList.add('active');
            btn.style.background = 'var(--navy)';
            btn.style.color = 'var(--white)';
            btn.style.borderColor = 'var(--navy)';

            const filter = btn.getAttribute('data-filter');

            // Filter Lookbook items (using classList)
            lookbookItems.forEach(item => {
                if (filter === 'all' || item.classList.contains(filter)) {
                    item.style.display = 'block';
                    setTimeout(() => item.style.opacity = '1', 10);
                } else {
                    item.style.opacity = '0';
                    setTimeout(() => item.style.display = 'none', 300);
                }
            });

            // Filter Gallery items (using data-category)
            galleryItems.forEach(item => {
                const categories = item.getAttribute('data-category');
                if (filter === 'all' || (categories && categories.includes(filter))) {
                    item.style.display = 'block';
                    setTimeout(() => item.style.opacity = '1', 10);
                } else {
                    item.style.opacity = '0';
                    setTimeout(() => item.style.display = 'none', 300);
                }
            });
        });
    });

    // Scroll to Top dynamically injected
    const scrollToTopBtn = document.createElement('button');
    scrollToTopBtn.id = 'scrollToTopBtn';
    scrollToTopBtn.className = 'scroll-to-top';
    scrollToTopBtn.setAttribute('aria-label', 'Scroll to top');
    scrollToTopBtn.innerHTML = '<i class="fa-solid fa-arrow-up"></i>';
    document.body.appendChild(scrollToTopBtn);

    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            scrollToTopBtn.classList.add('show');
        } else {
            scrollToTopBtn.classList.remove('show');
        }
    });

    scrollToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
