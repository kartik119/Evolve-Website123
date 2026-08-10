<?php
/* Template Name: Home */
get_header();
?>

<main>
    <!-- 1. Hero Section -->
    <section class="hero">
        <div class="container hero-inner">
            <div class="hero-content">
                <div class="hero-subtitle">CUSTOM CLOTHING MANUFACTURING SINCE 2007</div>
                <h1>Premium Clothing<br>Manufacturing for<br><span class="text-gold">Brands, Schools & Businesses</span></h1>
                <p>Evolve Clothing specializes in custom shirts, uniforms, kidswear, white-label production, fabric sourcing, sampling, and bulk apparel manufacturing with consistent quality and trusted craftsmanship.</p>
                
                <div class="hero-btns">
                    <a href="<?php echo esc_url( home_url( '/quote' ) ); ?>" class="btn btn-navy">REQUEST A QUOTE <i class="fa-solid fa-arrow-right"></i></a>
                    <a href="#services" class="btn btn-outline">EXPLORE SERVICES <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                
                <div class="hero-trust-grid">
                    <div class="hero-trust-item">
                        <div class="hero-trust-icon"><i class="fa-solid fa-medal"></i></div>
                        <span>18+<br>Years Experience</span>
                    </div>
                    <div class="hero-trust-item">
                        <div class="hero-trust-icon"><i class="fa-solid fa-industry"></i></div>
                        <span>Custom<br>Bulk Manufacturing</span>
                    </div>
                    <div class="hero-trust-item">
                        <div class="hero-trust-icon"><i class="fa-solid fa-tag"></i></div>
                        <span>White-Label<br>Support</span>
                    </div>
                    <div class="hero-trust-item">
                        <div class="hero-trust-icon"><i class="fa-solid fa-swatchbook"></i></div>
                        <span>Fabric & Sampling<br>Assistance</span>
                    </div>
                </div>
            </div>
            <div class="hero-masonry">
                <div class="hero-img-box hero-img-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/sampling_1779777213825.png" alt="Tailor working">
                </div>
                <div class="hero-img-box hero-img-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/fabric_sourcing_1779777197767.png" alt="Fabric Rolls">
                </div>
                <div class="hero-img-box hero-img-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/bulk_production_1779777228921.png" alt="Production Line">
                </div>
                <div class="hero-img-box hero-img-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/kids_uniforms_1779778616113.png" alt="Kids Uniforms">
                </div>
                <div class="hero-badge">
                    <div class="since">SINCE</div>
                    <div class="year">2007</div>
                    <div class="text">QUALITY YOU<br>CAN TRUST</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Trust Bar -->
    <section class="trust-bar">
        <div class="container trust-bar-inner">
            <div class="trust-item">
                <div class="trust-icon-wrap"><i class="fa-solid fa-award"></i></div>
                <h4>Since 2007</h4>
                <p>Trusted garment<br>manufacturing experience</p>
            </div>
            <div class="trust-item">
                <div class="trust-icon-wrap"><i class="fa-solid fa-boxes-stacked"></i></div>
                <h4>Bulk Orders</h4>
                <p>Production support for<br>brands & institutions</p>
            </div>
            <div class="trust-item">
                <div class="trust-icon-wrap"><i class="fa-solid fa-stamp"></i></div>
                <h4>Custom Branding</h4>
                <p>Logo embroidery &<br>private-label support</p>
            </div>
            <div class="trust-item">
                <div class="trust-icon-wrap"><i class="fa-solid fa-scroll"></i></div>
                <h4>Fabric Sourcing</h4>
                <p>Premium quality fabrics<br>for every need</p>
            </div>
            <div class="trust-item">
                <div class="trust-icon-wrap"><i class="fa-solid fa-check-double"></i></div>
                <h4>Quality Control</h4>
                <p>Structured quality checks<br>before final delivery</p>
            </div>
        </div>
    </section>

    <!-- 3. About Preview -->
    <section id="about" class="about-preview">
        <div class="container about-inner">
            <div class="about-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about_team_factory.jpg" alt="Evolve Clothing Manufacturing Team">
            </div>
            <div class="about-content">
                <div class="about-subtitle">ABOUT EVOLVE CLOTHING CO.</div>
                <h2>Crafting Shirts, Uniforms &<br>Custom Apparel Since 2007</h2>
                <p>Evolve Clothing has built its reputation through reliable garment manufacturing, quality fabrics, custom design support, and bulk production solutions for brands, schools, corporates, and institutions.</p>
                
                <div class="about-check-grid">
                    <div class="about-check-item"><i class="fa-solid fa-circle-check"></i> Custom shirt manufacturing</div>
                    <div class="about-check-item"><i class="fa-solid fa-circle-check"></i> Fabric selection and sampling</div>
                    <div class="about-check-item"><i class="fa-solid fa-circle-check"></i> Kidswear and uniform production</div>
                    <div class="about-check-item"><i class="fa-solid fa-circle-check"></i> Bulk order quality control</div>
                </div>
                
                <a href="about.html" class="btn btn-navy">KNOW MORE ABOUT US <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="about-card">
                <i class="fa-solid fa-shirt"></i>
                <h3>Precision in Every Stitch,<br>Perfection in Every Piece.</h3>
                <div class="signature">Evolve Team</div>
            </div>
        </div>
    </section>

    <!-- 4. Core Services -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-subtitle">OUR MANUFACTURING SERVICES</div>
            <h2>End-to-End Clothing Manufacturing Solutions</h2>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon"><i class="fa-solid fa-tag"></i></div>
                    <h3>White-Label<br>Manufacturing</h3>
                    <p>Launch your own clothing line with confidential and customized production support.</p>
                    <i class="fa-solid fa-arrow-right service-arrow"></i>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fa-solid fa-user-tie"></i></div>
                    <h3>Corporate Shirt<br>Manufacturing</h3>
                    <p>Premium shirts for companies, teams, events and professional brand identity.</p>
                    <i class="fa-solid fa-arrow-right service-arrow"></i>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fa-solid fa-layer-group"></i></div>
                    <h3>Fabric<br>Sourcing</h3>
                    <p>Get the right fabrics based on comfort, durability, season, budget and design needs.</p>
                    <i class="fa-solid fa-arrow-right service-arrow"></i>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fa-solid fa-pen-ruler"></i></div>
                    <h3>Design<br>Support</h3>
                    <p>Support for styles, colors, cuffs, trims, patterns and brand-specific requirements.</p>
                    <i class="fa-solid fa-arrow-right service-arrow"></i>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fa-solid fa-scissors"></i></div>
                    <h3>Sampling &<br>Prototyping</h3>
                    <p>Preview fit, finish, fabric and stitching before moving into bulk production.</p>
                    <i class="fa-solid fa-arrow-right service-arrow"></i>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fa-solid fa-box-open"></i></div>
                    <h3>Bulk Production &<br>Quality Control</h3>
                    <p>Reliable production planning with quality checks at every stage.</p>
                    <i class="fa-solid fa-arrow-right service-arrow"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Feature Split -->
    <!-- 5. Feature Sections -->
    <section id="kids" class="section-padding" style="background-color: var(--bg-beige);">
        <div class="container" style="display: flex; gap: 60px; align-items: center;">
            <div class="feature-half-content" style="flex: 1;">
                <div class="section-subtitle">KIDSWEAR PRODUCTION</div>
                <h2>Comfortable & Durable<br>Kids Clothing Manufacturing</h2>
                <p>We manufacture comfortable, stylish, and durable kidswear for schools, retail brands, private-label collections, and everyday wear. Every piece is crafted with attention to fabric softness, fit, stitching quality, safety, and long-lasting comfort.</p>
                <ul class="feature-check-list">
                    <li>Kids shirts, t-shirts, trousers, casual wear and uniforms</li>
                    <li>Soft and skin-friendly fabric options</li>
                    <li>Custom colors, sizes, patterns and branding</li>
                    <li>Ideal for schools, retail brands and kidswear businesses</li>
                    <li>Sampling, size grading and bulk production support</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/kids' ) ); ?>" class="btn btn-gold">EXPLORE KIDSWEAR MANUFACTURING <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="feature-half-images kids-imgs" style="flex: 1;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/kidswear_family.jpg" alt="Comfortable & Durable Kidswear Manufacturing" style="width: 100%; height: 480px; object-fit: cover; border-radius: 12px; box-shadow: 0 15px 35px rgba(0,0,0,0.08);" loading="lazy">
            </div>
        </div>
    </section>
        
    <section id="uniforms" class="section-padding bg-white">
        <div class="container" style="display: flex; gap: 60px; align-items: center; flex-direction: row-reverse;">
            <div class="feature-half-content" style="flex: 1;">
                <div class="section-subtitle">UNIFORM MANUFACTURING</div>
                <h2>Custom Uniform Manufacturing<br>for Schools, Corporates & Institutions</h2>
                <p>We create customized uniforms for schools, companies, hospitality teams, healthcare staff, events, and organizations focused on comfort, brand identity, durability, perfect fitting, and consistent quality.</p>
                
                <div class="uniform-categories">
                    <div class="uc-item">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>School<br>Uniforms</span>
                    </div>
                    <div class="uc-item">
                        <i class="fa-solid fa-building"></i>
                        <span>Corporate<br>Uniforms</span>
                    </div>
                    <div class="uc-item">
                        <i class="fa-solid fa-bell-concierge"></i>
                        <span>Hospitality<br>Uniforms</span>
                    </div>
                    <div class="uc-item">
                        <i class="fa-solid fa-user-doctor"></i>
                        <span>Healthcare<br>Uniforms</span>
                    </div>
                </div>

                <ul class="feature-check-list" style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
                    <li>Logo embroidery and custom branding</li>
                    <li>Fabric and color customization</li>
                    <li>Scalable production planning</li>
                    <li>Sampling before final production</li>
                    <li>Bulk order support</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/uniforms' ) ); ?>" class="btn btn-navy">REQUEST UNIFORM QUOTE <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="feature-half-images" style="flex: 1;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/uniforms_group_unified.png" alt="Custom Uniform Manufacturing for Corporates & Institutions" class="uniform-img" loading="lazy" style="width: 100%; height: 480px; object-fit: cover; border-radius: 12px; box-shadow: 0 15px 35px rgba(0,0,0,0.08);">
            </div>
        </div>
    </section>

    <!-- 6. Process -->
    <section id="process" class="process" style="background-color: var(--bg-beige);">
        <div class="container">
            <h2>A Simple & Transparent Manufacturing Process</h2>
            <div class="process-steps">
                <div class="process-step">
                    <div class="process-icon">
                        <i class="fa-regular fa-comments"></i>
                        <div class="process-number">01</div>
                    </div>
                    <h4>Requirement<br>Discussion</h4>
                    <p>We understand your product type, quantity, fabric, design & delivery needs.</p>
                </div>
                <div class="process-step">
                    <div class="process-icon">
                        <i class="fa-solid fa-swatchbook"></i>
                        <div class="process-number">02</div>
                    </div>
                    <h4>Fabric<br>Selection</h4>
                    <p>We help you choose suitable fabrics based on comfort, budget and usage.</p>
                </div>
                <div class="process-step">
                    <div class="process-icon">
                        <i class="fa-solid fa-compass-drafting"></i>
                        <div class="process-number">03</div>
                    </div>
                    <h4>Design &<br>Sampling</h4>
                    <p>We prepare samples to check fit, finish, stitching and overall details.</p>
                </div>
                <div class="process-step">
                    <div class="process-icon">
                        <i class="fa-solid fa-thumbs-up"></i>
                        <div class="process-number">04</div>
                    </div>
                    <h4>Approval</h4>
                    <p>Once the sample is approved, we finalize production specifications.</p>
                </div>
                <div class="process-step">
                    <div class="process-icon">
                        <i class="fa-solid fa-industry"></i>
                        <div class="process-number">05</div>
                    </div>
                    <h4>Bulk<br>Production</h4>
                    <p>The order moves into planned manufacturing with proper size and quantity control.</p>
                </div>
                <div class="process-step">
                    <div class="process-icon">
                        <i class="fa-solid fa-truck-fast"></i>
                        <div class="process-number">06</div>
                    </div>
                    <h4>Quality Check &<br>Delivery</h4>
                    <p>Every batch goes through quality checks before packing and delivery.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Stats & Industries Split -->
    <section class="stats-split">
        <div class="stats-why">
            <div class="section-subtitle">WHY CHOOSE EVOLVE</div>
            <h2>Why Brands & Institutions<br>Choose Evolve Clothing</h2>
            <ul class="feature-check-list">
                <li>18+ years of clothing manufacturing experience</li>
                <li>Custom white-label and private-label support</li>
                <li>Corporate shirts, uniforms and kidswear production</li>
                <li>Fabric sourcing and sampling assistance</li>
                <li>Bulk production planning</li>
                <li>Quality control at every stage</li>
                <li>Flexible support for brands, schools and businesses</li>
            </ul>
        </div>
        
        <div class="stats-industries">
            <div class="section-subtitle">INDUSTRIES WE SERVE</div>
            <div class="industry-grid">
                <div class="ind-item"><i class="fa-solid fa-school"></i><span>Schools &<br>Colleges</span></div>
                <div class="ind-item"><i class="fa-solid fa-building"></i><span>Corporate<br>Companies</span></div>
                <div class="ind-item"><i class="fa-solid fa-shirt"></i><span>Retail Clothing<br>Brands</span></div>
                <div class="ind-item"><i class="fa-solid fa-child-reaching"></i><span>Kidswear<br>Brands</span></div>
                <div class="ind-item"><i class="fa-solid fa-hotel"></i><span>Hotels &<br>Hospitality</span></div>
                <div class="ind-item"><i class="fa-solid fa-house-medical"></i><span>Healthcare &<br>Clinics</span></div>
                <div class="ind-item"><i class="fa-solid fa-calendar-check"></i><span>Events &<br>Promotional Wear</span></div>
                <div class="ind-item"><i class="fa-solid fa-cart-shopping"></i><span>E-commerce<br>Fashion Brands</span></div>
                <div class="ind-item"><i class="fa-solid fa-person-running"></i><span>Sports &<br>Activewear</span></div>
            </div>
        </div>
        
        <div class="stats-numbers">
            <div class="stat-box">
                <div class="stat-num">18+</div>
                <div class="stat-label">Years Experience</div>
            </div>
            <div class="stat-box">
                <div class="stat-num">1000+</div>
                <div class="stat-label">Happy Clients</div>
            </div>
            <div class="stat-box">
                <div class="stat-num">5000+</div>
                <div class="stat-label">Products Manufactured</div>
            </div>
            <div class="stat-box" style="margin-bottom:0;">
                <div class="stat-num">98%</div>
                <div class="stat-label">Client Satisfaction</div>
            </div>
        </div>
    </section>

    <!-- 8. Gallery -->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="section-subtitle">OUR WORK</div>
            <h2>Our Product & Manufacturing Gallery</h2>
            
            <div class="gallery-filters">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="shirts">Shirts</button>
                <button class="filter-btn" data-filter="uniforms">Uniforms</button>
                <button class="filter-btn" data-filter="kids">Kidswear</button>
                <button class="filter-btn" data-filter="fabric">Fabrics</button>
                <button class="filter-btn" data-filter="mfg">Manufacturing</button>
                <button class="filter-btn" data-filter="corp">Corporate Wear</button>
            </div>
            
            <div class="gallery-grid">
                <!-- Shirts (6 Uploaded Shirt Collection Images) -->
                <div class="gallery-item" data-category="shirts">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gal_shirt_blue.jpg" loading="lazy" alt="Sky Blue Tailored Oxford Shirt">
                </div>
                <div class="gallery-item" data-category="shirts">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gal_shirt_blue_details.jpg" loading="lazy" alt="Executive Blue Shirt & Stitch Details">
                </div>
                <div class="gallery-item" data-category="shirts">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gal_shirt_cream.jpg" loading="lazy" alt="Classic Cream Fine Linen Shirt">
                </div>
                <div class="gallery-item" data-category="shirts">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gal_shirt_lavender.jpg" loading="lazy" alt="Pastel Lavender Business Shirt">
                </div>
                <div class="gallery-item" data-category="shirts">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gal_shirt_mint.jpg" loading="lazy" alt="Contemporary Mint Green Shirt">
                </div>
                <div class="gallery-item" data-category="shirts">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gal_shirt_peach.jpg" loading="lazy" alt="Elegant Peach Custom Shirt">
                </div>

                <!-- Uniforms -->
                <div class="gallery-item" data-category="uniforms">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uniform_showroom_hero.jpg" loading="lazy" alt="Custom Uniform Showroom Display">
                </div>
                <div class="gallery-item" data-category="uniforms">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_cat_8.jpg" loading="lazy" alt="Sports & Athletic Team Uniforms">
                </div>
                <div class="gallery-item" data-category="uniforms">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_cat_6.jpg" loading="lazy" alt="Security & Tactical Uniforms">
                </div>
                <div class="gallery-item" data-category="uniforms">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_cat_4.jpg" loading="lazy" alt="Healthcare Scrubs & Medical Apparel">
                </div>

                <!-- Kidswear -->
                <div class="gallery-item" data-category="kids">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/kids_col_tees.jpg" loading="lazy" alt="Boys Polos & Crewneck Tees">
                </div>
                <div class="gallery-item" data-category="kids">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/kids_col_bottoms.jpg" loading="lazy" alt="Kids Shorts & Trousers">
                </div>
                <div class="gallery-item" data-category="kids">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/kids_col_occasion.jpg" loading="lazy" alt="Girls Occasion & Partywear Dresses">
                </div>
                <div class="gallery-item" data-category="kids">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/kids_col_infant.jpg" loading="lazy" alt="Infant Organic Cotton Rompers">
                </div>

                <!-- Fabrics -->
                <div class="gallery-item" data-category="fabric">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/kids_organic_fabrics.jpg" loading="lazy" alt="100% Natural Organic Cotton Fabrics">
                </div>
                <div class="gallery-item" data-category="fabric">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mfg_hero_sketch_display.jpg" loading="lazy" alt="Technical Apparel Sketches & Swatches">
                </div>

                <!-- Manufacturing -->
                <div class="gallery-item" data-category="mfg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_why_3.jpg" loading="lazy" alt="Industrial Manufacturing & Sewing Floor">
                </div>
                <div class="gallery-item" data-category="mfg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_why_2.jpg" loading="lazy" alt="Quality Control & Size Measurement">
                </div>
                <div class="gallery-item" data-category="mfg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_why_1.jpg" loading="lazy" alt="Custom Packaging & Woven Labels">
                </div>

                <!-- Corporate Wear -->
                <div class="gallery-item" data-category="corp">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_corporate_team.jpg" loading="lazy" alt="Corporate Professionals in Executive Suits">
                </div>
                <div class="gallery-item" data-category="corp">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_cat_2.jpg" loading="lazy" alt="Corporate Suit & Shirt Collection">
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 40px;">
                <a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>" class="btn btn-gold">VIEW FULL GALLERY <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- 9. Testimonials & FAQ -->
    <section id="whatsapp" class="testi-faq">
        <div class="testi-side">
            <div class="tf-subtitle">WHAT OUR CLIENTS SAY</div>
            <div class="quote-icon"><i class="fa-solid fa-quote-left"></i></div>
            <div class="testi-text">"Evolve Clothing helped us with fabric selection, sampling and bulk production with consistent quality and timely delivery. Their team is professional, responsive and truly reliable."</div>
            <div style="display:flex; align-items:center; justify-content:space-between;">
                <div class="testi-author">
                    <div style="width:50px;height:50px;border-radius:50%;background:#0F172A;color:white;display:flex;align-items:center;justify-content:center;font-size:1.5rem;"><i class="fa-solid fa-user"></i></div>
                    <div>
                        <h4>Rahul Mehra</h4>
                        <span>Operations Manager, Navoro Brands</span>
                    </div>
                </div>
                <div class="testi-nav">
                    <button><i class="fa-solid fa-chevron-left"></i></button>
                    <button><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
        
        <div class="faq-side">
            <div class="tf-subtitle">FREQUENTLY ASKED QUESTIONS</div>
            <div class="faq-list">
                <div class="faq-item">
                    <div class="faq-question">Do you accept bulk orders? <i class="fa-solid fa-plus faq-icon"></i></div>
                    <div class="faq-answer">Yes, we specialize in bulk manufacturing with high capacity and efficient turnaround times.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Do you manufacture school uniforms? <i class="fa-solid fa-plus faq-icon"></i></div>
                    <div class="faq-answer">Absolutely. We provide end-to-end uniform manufacturing for schools, complete with customized sizing.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Do you manufacture kidswear? <i class="fa-solid fa-plus faq-icon"></i></div>
                    <div class="faq-answer">Yes, we have a dedicated production line for comfortable, safe, and high-quality kids clothing.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Can we add our logo or brand label? <i class="fa-solid fa-plus faq-icon"></i></div>
                    <div class="faq-answer">Yes, our white-label manufacturing service includes custom branding, labels, and tags.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Do you provide samples before bulk production? <i class="fa-solid fa-plus faq-icon"></i></div>
                    <div class="faq-answer">Yes, sampling and prototyping are crucial steps in our process.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">What is your minimum order quantity? <i class="fa-solid fa-plus faq-icon"></i></div>
                    <div class="faq-answer">Please contact us for MOQ details, as it depends on the specific product and fabric requirements.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. Final CTA -->
    <section id="quote" class="final-cta">
        <div class="container">
            <h2>READY TO START YOUR CUSTOM CLOTHING ORDER?</h2>
            <p>Share your requirement and our team will help you with<br>fabric selection, sampling, pricing and production planning.</p>
            <div class="cta-btns">
                <a href="<?php echo esc_url( home_url( '/quote' ) ); ?>" class="btn btn-gold">REQUEST A QUOTE <i class="fa-solid fa-arrow-right"></i></a>
                <a href="https://wa.me/919833323469" target="_blank" rel="noopener" class="btn btn-outline dynamic-wa" style="color:var(--white); border-color:var(--white);">WHATSAPP US <i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>