
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
            const isActive = item.classList.contains('active');
            
            // Close all others
            document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('active'));

            if (!isActive) {
                item.classList.add('active');
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

    // Hero Slider Logic
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const prevArrow = document.querySelector('.prev-arrow');
    const nextArrow = document.querySelector('.next-arrow');
    let currentSlide = 0;
    let slideInterval;

    if (slides.length > 0) {
        function showSlide(index) {
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            slides[index].classList.add('active');
            dots[index].classList.add('active');
            currentSlide = index;
        }

        function nextSlide() {
            let index = currentSlide + 1;
            if (index >= slides.length) index = 0;
            showSlide(index);
        }

        function prevSlide() {
            let index = currentSlide - 1;
            if (index < 0) index = slides.length - 1;
            showSlide(index);
        }

        function startSlider() {
            slideInterval = setInterval(nextSlide, 5000);
        }

        function resetSlider() {
            clearInterval(slideInterval);
            startSlider();
        }

        if (nextArrow) {
            nextArrow.addEventListener('click', () => {
                nextSlide();
                resetSlider();
            });
        }
        
        if (prevArrow) {
            prevArrow.addEventListener('click', () => {
                prevSlide();
                resetSlider();
            });
        }

        dots.forEach(dot => {
            dot.addEventListener('click', function() {
                const index = parseInt(this.getAttribute('data-index'));
                showSlide(index);
                resetSlider();
            });
        });

        startSlider();
    }

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initSearchModal);
} else {
    initSearchModal();
}

function initSearchModal() {
    if (document.getElementById('searchModal')) return;

    const searchModalHTML = `
        <div id="searchModal" class="search-modal-overlay">
            <div class="search-modal-container">
                <div class="search-modal-header">
                    <i class="fa-solid fa-magnifying-glass search-modal-icon"></i>
                    <input type="text" id="searchInput" class="search-modal-input" placeholder="Search apparel, uniforms, services, blogs..." autocomplete="off">
                    <button type="button" id="searchCloseBtn" class="search-modal-close" aria-label="Close search"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="search-modal-body" id="searchResultsBody">
                    <div class="search-popular-tags">
                        <div class="search-popular-title">Popular Searches</div>
                        <div class="search-tags-flex">
                            <span class="search-tag-chip" data-search="White-Label">White-Label</span>
                            <span class="search-tag-chip" data-search="Uniforms">Uniforms</span>
                            <span class="search-tag-chip" data-search="Kidswear">Kidswear</span>
                            <span class="search-tag-chip" data-search="Fabric Sampling">Fabric Sampling</span>
                            <span class="search-tag-chip" data-search="Manufacturing">Manufacturing</span>
                            <span class="search-tag-chip" data-search="Contact">Contact Us</span>
                        </div>
                    </div>
                    <div id="searchResultsList"></div>
                </div>
            </div>
        </div>
    `;

    document.body.insertAdjacentHTML('beforeend', searchModalHTML);

    const modal = document.getElementById('searchModal');
    const input = document.getElementById('searchInput');
    const closeBtn = document.getElementById('searchCloseBtn');
    const resultsList = document.getElementById('searchResultsList');

    const searchableItems = [
        { title: "Home", desc: "Welcome to Evolve Clothing Co. Premium custom apparel & textile solutions.", url: "index.html", category: "Page", icon: "fa-house" },
        { title: "White-Label Apparel Manufacturing", desc: "Complete OEM/ODM custom clothing manufacturing for fashion brands.", url: "services.html", category: "Services", icon: "fa-shirt" },
        { title: "Kidswear Manufacturing", desc: "Safe, durable, high-quality clothing & uniform manufacturing for children.", url: "kids.html", category: "Services", icon: "fa-child" },
        { title: "Uniform Manufacturing", desc: "Corporate, school, industrial, and healthcare custom uniform solutions.", url: "uniforms.html", category: "Services", icon: "fa-user-tie" },
        { title: "Research & Manufacturing Process", desc: "Explore our textile R&D, fabric selection, pattern making, and quality control.", url: "manufacturing.html", category: "Process", icon: "fa-microscope" },
        { title: "Product Gallery & Lookbook", desc: "Browse past custom apparel samples, uniform collections, and fabric finishes.", url: "gallery.html", category: "Gallery", icon: "fa-images" },
        { title: "About Evolve Clothing Co.", desc: "Learn about our heritage, precision manufacturing standards, and sustainable practices.", url: "about.html", category: "Company", icon: "fa-building" },
        { title: "Blogs & Textile Insights", desc: "Read latest articles on garment manufacturing trends, fabric selection, and industry news.", url: "blogs.html", category: "Blog", icon: "fa-newspaper" },
        { title: "Contact Us", desc: "Get in touch with our expert sales and manufacturing team.", url: "contact.html", category: "Contact", icon: "fa-envelope" },
        { title: "Request a Custom Quote", desc: "Submit your custom clothing specifications for instant pricing & production timeline.", url: "quote.html", category: "Quote", icon: "fa-calculator" },
        { title: "School & Academic Uniforms", desc: "Custom shirts, polo shirts, blazers, skirts, and trousers for schools.", url: "uniforms.html#school", category: "Uniforms", icon: "fa-graduation-cap" },
        { title: "Corporate & Office Wear", desc: "Executive shirts, formal trousers, blazers, and branded staff apparel.", url: "uniforms.html#corporate", category: "Uniforms", icon: "fa-briefcase" },
        { title: "Industrial & Workwear", desc: "High-durability safety jackets, coveralls, and industrial workwear.", url: "uniforms.html#industrial", category: "Uniforms", icon: "fa-industry" },
        { title: "Fabric Sampling & Testing", desc: "Laboratory-grade color fastness, GSM verification, and fabric blend testing.", url: "manufacturing.html#fabric", category: "Process", icon: "fa-vial" },
        { title: "Privacy Policy", desc: "Read Evolve Clothing Co. data protection and privacy policy terms.", url: "privacy.html", category: "Legal", icon: "fa-shield-halved" },
        { title: "Terms & Conditions", desc: "Review production terms, order fulfillment, and client guidelines.", url: "terms.html", category: "Legal", icon: "fa-file-contract" }
    ];

    function openModal() {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
        setTimeout(() => input.focus(), 100);
        renderResults(input.value.trim());
    }

    function closeModal() {
        modal.classList.remove('active');
        document.body.style.overflow = '';
        input.value = '';
    }

    function renderResults(query) {
        resultsList.innerHTML = '';
        if (!query) {
            return;
        }

        const filtered = searchableItems.filter(item => 
            item.title.toLowerCase().includes(query.toLowerCase()) || 
            item.desc.toLowerCase().includes(query.toLowerCase()) ||
            item.category.toLowerCase().includes(query.toLowerCase())
        );

        if (filtered.length === 0) {
            resultsList.innerHTML = `
                <div class="search-no-results">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <div>No results found for "<strong>${escapeHtml(query)}</strong>"</div>
                    <div style="font-size:0.8rem; margin-top:5px;">Try searching for <em>"uniforms"</em>, <em>"shirts"</em>, <em>"manufacturing"</em>, or <em>"quote"</em>.</div>
                </div>
            `;
            return;
        }

        filtered.forEach(item => {
            const a = document.createElement('a');
            a.href = item.url;
            a.className = 'search-result-item';
            a.innerHTML = `
                <div class="search-result-icon"><i class="fa-solid ${item.icon}"></i></div>
                <div class="search-result-content">
                    <div class="search-result-title">${highlight(item.title, query)}</div>
                    <div class="search-result-desc">${item.desc}</div>
                </div>
                <div class="search-result-badge">${item.category}</div>
            `;
            resultsList.appendChild(a);
        });
    }

    function escapeHtml(text) {
        return text.replace(/[&<>"']/g, function(m) { return ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#039;'})[m]; });
    }

    function highlight(text, query) {
        const escapedQuery = query.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
        const regex = new RegExp(`(${escapedQuery})`, 'gi');
        return escapeHtml(text).replace(regex, '<mark style="background: rgba(212,160,23,0.3); color:#fff; padding:0 2px; border-radius:2px;">$1</mark>');
    }

    document.addEventListener('click', (e) => {
        const targetBtn = e.target.closest('.icon-link:has(.fa-magnifying-glass), .fa-magnifying-glass, .search_submit, [data-action="search"]');
        if (targetBtn) {
            e.preventDefault();
            openModal();
        }
    });

    closeBtn.addEventListener('click', closeModal);

    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            closeModal();
        }
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeModal();
        }
    });

    input.addEventListener('input', (e) => {
        renderResults(e.target.value.trim());
    });

    document.querySelectorAll('.search-tag-chip').forEach(chip => {
        chip.addEventListener('click', () => {
            const text = chip.getAttribute('data-search');
            input.value = text;
            renderResults(text);
            input.focus();
        });
    });
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initFloatingWhatsApp);
} else {
    initFloatingWhatsApp();
}

function initFloatingWhatsApp() {
    if (document.querySelector('.dynamic-wa-float')) return;

    const waHTML = `
        <a href="https://wa.me/919833323469" class="dynamic-wa dynamic-wa-float" target="_blank" rel="noopener" aria-label="Chat on WhatsApp" title="Chat with us on WhatsApp">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
    `;
    document.body.insertAdjacentHTML('beforeend', waHTML);
}

// Mobile Navigation Hamburger Handler
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initMobileNav);
} else {
    initMobileNav();
}

function initMobileNav() {
    const navToggle = document.querySelector('.mobile-nav-toggle');
    const mainNav = document.querySelector('.main-nav');

    if (navToggle && mainNav) {
        navToggle.setAttribute('aria-expanded', 'false');

        const toggleMenu = (open) => {
            const isActive = open !== undefined ? open : !mainNav.classList.contains('active');
            mainNav.classList.toggle('active', isActive);
            document.body.classList.toggle('menu-open', isActive);
            navToggle.setAttribute('aria-expanded', isActive ? 'true' : 'false');
            
            const icon = navToggle.querySelector('i');
            if (icon) {
                icon.className = isActive ? 'fa-solid fa-xmark' : 'fa-solid fa-bars';
            }
        };

        navToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleMenu();
        });

        // Submenu accordion toggle for mobile
        const dropdownItems = mainNav.querySelectorAll('li.has-dropdown > a');
        dropdownItems.forEach(dropdownLink => {
            dropdownLink.addEventListener('click', (e) => {
                if (window.innerWidth <= 991) {
                    const parentLi = dropdownLink.parentElement;
                    // If clicking the parent link directly on mobile, toggle accordion
                    if (parentLi) {
                        e.preventDefault();
                        parentLi.classList.toggle('open');
                    }
                }
            });
        });

        // Close menu when clicking normal sublink or navigation link
        mainNav.querySelectorAll('a:not(.has-dropdown > a)').forEach(link => {
            link.addEventListener('click', () => {
                toggleMenu(false);
            });
        });

        // Close menu on ESC key press
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && mainNav.classList.contains('active')) {
                toggleMenu(false);
            }
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!mainNav.contains(e.target) && !navToggle.contains(e.target) && mainNav.classList.contains('active')) {
                toggleMenu(false);
            }
        });

        // Reset state on window resize above 991px
        window.addEventListener('resize', () => {
            if (window.innerWidth > 991 && mainNav.classList.contains('active')) {
                toggleMenu(false);
            }
        });
    }
}


