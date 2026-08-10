<?php
/* Template Name: Gallery */
get_header();
?>

<!-- Hero Section -->
    <section class="section-padding" style="background: var(--bg-light); overflow: hidden;">
        <div class="container gal-hero" style="display: flex; gap: 60px; align-items: center;">
            <div style="flex: 1;">
                <p style="color: var(--gold); font-size: 0.85rem; font-weight: 600; letter-spacing: 1.5px; margin-bottom: 15px; text-transform: uppercase;">Our Gallery</p>
                <h1 style="font-size: 3.5rem; margin-bottom: 25px; line-height: 1.2; color: var(--navy);">Explore Our Product &<br>Manufacturing Gallery</h1>
                <p style="color: var(--text-light); margin-bottom: 35px; font-size: 1.1rem; line-height: 1.6; max-width: 500px;">A glimpse into our world of premium shirts, uniforms, kidswear, fine fabrics and precision manufacturing. Every stitch reflects our commitment to quality, craftsmanship and trust.</p>
                
                <div style="display: flex; gap: 20px;">
                    <a href="#" class="btn btn-primary">VIEW LOOKBOOK <i class="fa-solid fa-arrow-right" style="margin-left:8px;"></i></a>
                    <a href="<?php echo esc_url( home_url( '/quote' ) ); ?>" class="btn btn-outline">REQUEST A QUOTE <i class="fa-solid fa-arrow-right" style="margin-left:8px;"></i></a>
                </div>
            </div>
            <div style="flex: 1; width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery_hero_single.jpg" alt="Explore Our Product & Manufacturing Gallery" style="width: 100%; height: 450px; object-fit: cover; border-radius: 16px; box-shadow: 0 20px 45px rgba(0,0,0,0.12); display: block;">
            </div>
        </div>
    </section>

    <!-- Trust Indicators -->
    <section style="border-bottom: 1px solid var(--border-color); background: white; padding: 30px 0;">
        <div class="container" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;">
            <div style="display: flex; align-items: center; gap: 10px;">
                <i class="fa-solid fa-tools text-gold" style="font-size: 1.5rem;"></i>
                <div><strong style="display:block; font-size: 1.2rem;">18+</strong><span style="font-size: 0.75rem; color: var(--text-light);">Years Experience</span></div>
            </div>
            <div style="display: flex; align-items: center; gap: 10px;">
                <i class="fa-solid fa-cubes text-gold" style="font-size: 1.5rem;"></i>
                <div><strong style="display:block; font-size: 1.2rem;">1000+</strong><span style="font-size: 0.75rem; color: var(--text-light);">Happy Clients</span></div>
            </div>
            <div style="display: flex; align-items: center; gap: 10px;">
                <i class="fa-solid fa-shirt text-gold" style="font-size: 1.5rem;"></i>
                <div><strong style="display:block; font-size: 1.2rem;">5000+</strong><span style="font-size: 0.75rem; color: var(--text-light);">Products Manufactured</span></div>
            </div>
            <div style="display: flex; align-items: center; gap: 10px;">
                <i class="fa-solid fa-shield-check text-gold" style="font-size: 1.5rem;"></i>
                <div><strong style="display:block; font-size: 1.2rem;">98%</strong><span style="font-size: 0.75rem; color: var(--text-light);">Client Satisfaction</span></div>
            </div>
        </div>
    </section>

    <!-- Main Gallery Section -->
    <section class="section-padding" style="background: var(--white);">
        <div class="container">
            <!-- Filters -->
            <div class="gal-filters">
                <button class="active" data-filter="all">All</button>
                <button data-filter="shirts">Shirts</button>
                <button data-filter="uniforms">Uniforms</button>
                <button data-filter="kidswear">Kidswear</button>
                <button data-filter="fabrics">Fabrics</button>
                <button data-filter="manufacturing">Manufacturing</button>
                <button data-filter="corporate">Corporate Wear</button>
                            </div>

            <!-- Gallery Grid -->
            <div class="gal-main-grid" id="main-gallery">
                <!-- Shirts (6 Uploaded Shirt Collection Images) -->
                <div class="gal-item filter-item shirts">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gal_shirt_blue.jpg" alt="Sky Blue Tailored Oxford Shirt">
                    <div class="gal-item-overlay">
                        <i class="fa-regular fa-folder-open" style="color: var(--gold);"></i> Sky Blue Tailored Oxford Shirt
                    </div>
                </div>
                <div class="gal-item filter-item shirts">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gal_shirt_blue_details.jpg" alt="Executive Blue Shirt & Stitch Details">
                    <div class="gal-item-overlay">
                        <i class="fa-regular fa-folder-open" style="color: var(--gold);"></i> Executive Blue Shirt & Stitch Details
                    </div>
                </div>
                <div class="gal-item filter-item shirts">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gal_shirt_cream.jpg" alt="Classic Cream Fine Linen Shirt">
                    <div class="gal-item-overlay">
                        <i class="fa-regular fa-folder-open" style="color: var(--gold);"></i> Classic Cream Fine Linen Shirt
                    </div>
                </div>
                <div class="gal-item filter-item shirts">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gal_shirt_lavender.jpg" alt="Pastel Lavender Business Shirt">
                    <div class="gal-item-overlay">
                        <i class="fa-regular fa-folder-open" style="color: var(--gold);"></i> Pastel Lavender Business Shirt
                    </div>
                </div>
                <div class="gal-item filter-item shirts">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gal_shirt_mint.jpg" alt="Contemporary Mint Green Shirt">
                    <div class="gal-item-overlay">
                        <i class="fa-regular fa-folder-open" style="color: var(--gold);"></i> Contemporary Mint Green Shirt
                    </div>
                </div>
                <div class="gal-item filter-item shirts">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gal_shirt_peach.jpg" alt="Elegant Peach Custom Shirt">
                    <div class="gal-item-overlay">
                        <i class="fa-regular fa-folder-open" style="color: var(--gold);"></i> Elegant Peach Custom Shirt
                    </div>
                </div>

                <!-- Uniforms -->
                <div class="gal-item filter-item uniforms">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uniform_showroom_hero.jpg" alt="Custom Uniform Showroom">
                    <div class="gal-item-overlay">
                        <i class="fa-regular fa-folder-open" style="color: var(--gold);"></i> Uniform Showroom Collection
                    </div>
                </div>
                <div class="gal-item filter-item uniforms">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_cat_8.jpg" alt="Sports & Athletic Team Uniforms">
                    <div class="gal-item-overlay">
                        <i class="fa-regular fa-folder-open" style="color: var(--gold);"></i> Athletic Team Kits & Tracksuits
                    </div>
                </div>
                <div class="gal-item filter-item uniforms">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_cat_6.jpg" alt="Security & Tactical Uniforms">
                    <div class="gal-item-overlay">
                        <i class="fa-regular fa-folder-open" style="color: var(--gold);"></i> Security Officer & Tactical Wear
                    </div>
                </div>
                <div class="gal-item filter-item uniforms">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_cat_4.jpg" alt="Healthcare Medical Scrubs">
                    <div class="gal-item-overlay">
                        <i class="fa-regular fa-folder-open" style="color: var(--gold);"></i> Medical Scrubs & Doctor Coats
                    </div>
                </div>

                <!-- Kidswear -->
                <div class="gal-item filter-item kidswear">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/kids_col_tees.jpg" alt="Kids Tees, Polos & Henleys">
                    <div class="gal-item-overlay">
                        <i class="fa-regular fa-folder-open" style="color: var(--gold);"></i> Kids Tees & Casualwear
                    </div>
                </div>
                <div class="gal-item filter-item kidswear">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/kids_col_bottoms.jpg" alt="Kids Shorts & Trousers">
                    <div class="gal-item-overlay">
                        <i class="fa-regular fa-folder-open" style="color: var(--gold);"></i> Kids Shorts & Bottoms
                    </div>
                </div>
                <div class="gal-item filter-item kidswear">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/kids_col_occasion.jpg" alt="Kids Occasion & Partywear">
                    <div class="gal-item-overlay">
                        <i class="fa-regular fa-folder-open" style="color: var(--gold);"></i> Kids Occasion & Partywear
                    </div>
                </div>
                <div class="gal-item filter-item kidswear">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/kids_col_infant.jpg" alt="Infant Rompers & Onesies">
                    <div class="gal-item-overlay">
                        <i class="fa-regular fa-folder-open" style="color: var(--gold);"></i> Infant Rompers & Onesies
                    </div>
                </div>

                <!-- Fabrics -->
                <div class="gal-item filter-item fabrics">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/kids_organic_fabrics.jpg" alt="100% Organic Cotton Fabrics">
                    <div class="gal-item-overlay">
                        <i class="fa-regular fa-folder-open" style="color: var(--gold);"></i> 100% Organic Cotton Fabrics
                    </div>
                </div>
                <div class="gal-item filter-item fabrics">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mfg_hero_sketch_display.jpg" alt="Technical Sketch & Swatches">
                    <div class="gal-item-overlay">
                        <i class="fa-regular fa-folder-open" style="color: var(--gold);"></i> Technical Sketch & Swatches
                    </div>
                </div>

                <!-- Manufacturing -->
                <div class="gal-item filter-item manufacturing">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_why_3.jpg" alt="Industrial Sewing Machine Floor">
                    <div class="gal-item-overlay">
                        <i class="fa-regular fa-folder-open" style="color: var(--gold);"></i> Industrial Sewing Floor
                    </div>
                </div>
                <div class="gal-item filter-item manufacturing">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_why_2.jpg" alt="Quality Control Inspection">
                    <div class="gal-item-overlay">
                        <i class="fa-regular fa-folder-open" style="color: var(--gold);"></i> Quality Control & Measurement
                    </div>
                </div>
                <div class="gal-item filter-item manufacturing">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_why_1.jpg" alt="Custom Branding & Packaging">
                    <div class="gal-item-overlay">
                        <i class="fa-regular fa-folder-open" style="color: var(--gold);"></i> Custom Branding & Packaging
                    </div>
                </div>

                <!-- Corporate Wear -->
                <div class="gal-item filter-item corporate">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_corporate_team.jpg" alt="Corporate Team in Executive Suits">
                    <div class="gal-item-overlay">
                        <i class="fa-regular fa-folder-open" style="color: var(--gold);"></i> Corporate Team Suits
                    </div>
                </div>
                <div class="gal-item filter-item corporate">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_cat_2.jpg" alt="Corporate Executive Uniform Collection">
                    <div class="gal-item-overlay">
                        <i class="fa-regular fa-folder-open" style="color: var(--gold);"></i> Executive Corporate Suits
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Curated Collections -->
    <section class="section-padding" style="background: var(--bg-light);">
        <div class="container gal-curated" style="display: flex; gap: 30px; align-items: center;">
            <div style="flex: 1; padding-right: 20px;">
                <h3 style="font-size: 2rem; color: var(--navy); margin-bottom: 20px;">Curated Collections &<br>Production Highlights</h3>
                <p style="color: var(--text-light); font-size: 0.95rem; margin-bottom: 30px; line-height: 1.6;">Premium designs. Precision manufacturing. Collections that define quality and style.</p>
                <a href="#" class="btn btn-primary">VIEW LOOKBOOK <i class="fa-solid fa-arrow-right" style="margin-left:8px;"></i></a>
            </div>
            <div style="flex: 1.5; display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gal_shirt_blue_details.jpg" alt="Premium Shirt Collection" style="width: 100%; height: 180px; object-fit: cover; border-radius: 6px; margin-bottom: 15px;">
                    <h5 style="font-size: 0.9rem; color: var(--navy); margin-bottom: 5px;">Premium Shirt Collection</h5>
                    <p style="font-size: 0.75rem; color: var(--text-light);">Fine fabrics & timeless styles</p>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gal_shirt_mint.jpg" alt="Tailored Shirt Collection" style="width: 100%; height: 180px; object-fit: cover; border-radius: 6px; margin-bottom: 15px;">
                    <h5 style="font-size: 0.9rem; color: var(--navy); margin-bottom: 5px;">Tailored Shirt Collection</h5>
                    <p style="font-size: 0.75rem; color: var(--text-light);">Smart, durable & comfortable</p>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/kids_division_boutique.jpg" alt="Kidswear Collection" style="width: 100%; height: 180px; object-fit: cover; border-radius: 6px; margin-bottom: 15px;">
                    <h5 style="font-size: 0.9rem; color: var(--navy); margin-bottom: 5px;">Kidswear Collection</h5>
                    <p style="font-size: 0.75rem; color: var(--text-light);">Soft, safe & stylish for little ones</p>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/single_needle_stitch_user.jpg" alt="Manufacturing Excellence" style="width: 100%; height: 180px; object-fit: cover; border-radius: 6px; margin-bottom: 15px;">
                    <h5 style="font-size: 0.9rem; color: var(--navy); margin-bottom: 5px;">Manufacturing Excellence</h5>
                    <p style="font-size: 0.75rem; color: var(--text-light);">Precision at every step</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Grid -->
    <section class="section-padding" style="background: var(--white);">
        <div class="container text-center">
            <h2 class="section-title">Gallery by Category</h2>
            <div class="gal-cat-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; margin-top: 40px;">
                <a href="#" class="gal-cat-card">
                    <i class="fa-solid fa-shirt"></i>
                    <h4>Shirts</h4>
                    <p>Formal, casual & corporate shirt collections.</p>
                    <i class="fa-solid fa-arrow-right arrow"></i>
                </a>
                <a href="<?php echo esc_url( home_url( '/uniforms' ) ); ?>" class="gal-cat-card">
                    <i class="fa-solid fa-user-tie"></i>
                    <h4>Uniforms</h4>
                    <p>Corporate, industrial & hospitality uniforms.</p>
                    <i class="fa-solid fa-arrow-right arrow"></i>
                </a>
                <a href="<?php echo esc_url( home_url( '/kids' ) ); ?>" class="gal-cat-card">
                    <i class="fa-solid fa-child"></i>
                    <h4>Kidswear</h4>
                    <p>Trendy, comfortable & safe kids clothing.</p>
                    <i class="fa-solid fa-arrow-right arrow"></i>
                </a>
                <a href="#" class="gal-cat-card">
                    <i class="fa-solid fa-layer-group"></i>
                    <h4>Fabrics</h4>
                    <p>Premium fabrics sourced for lasting quality.</p>
                    <i class="fa-solid fa-arrow-right arrow"></i>
                </a>
                <a href="<?php echo esc_url( home_url( '/manufacturing' ) ); ?>" class="gal-cat-card">
                    <i class="fa-solid fa-industry"></i>
                    <h4>Manufacturing</h4>
                    <p>End-to-end production with precision & care.</p>
                    <i class="fa-solid fa-arrow-right arrow"></i>
                </a>
                <a href="#" class="gal-cat-card">
                    <i class="fa-solid fa-briefcase"></i>
                    <h4>Corporate Wear</h4>
                    <p>Professional wear for teams that represent brands.</p>
                    <i class="fa-solid fa-arrow-right arrow"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Behind the Craft -->
    <section class="section-padding" style="background: var(--bg-light);">
        <div class="container text-center">
            <h2 class="section-title">Behind the Craft</h2>
            <div class="craft-timeline">
                <div class="craft-step">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gal_craft_1.jpg" alt="Consultation">
                    <h5>1. Consultation</h5>
                    <p>Understanding your needs</p>
                </div>
                <div class="craft-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="craft-step">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gal_craft_2.jpg" alt="Sampling">
                    <h5>2. Sampling</h5>
                    <p>Developing the perfect fit</p>
                </div>
                <div class="craft-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="craft-step">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gal_craft_3.jpg" alt="Stitching">
                    <h5>3. Stitching</h5>
                    <p>Precision stitching begins</p>
                </div>
                <div class="craft-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="craft-step">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gal_craft_4.jpg" alt="Quality Check">
                    <h5>4. Quality Check</h5>
                    <p>Every piece is inspected</p>
                </div>
                <div class="craft-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="craft-step">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gal_craft_5.jpg" alt="Packaging">
                    <h5>5. Packaging</h5>
                    <p>Neatly packed with care</p>
                </div>
                <div class="craft-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="craft-step">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gal_craft_6.jpg" alt="Delivery">
                    <h5>6. Delivery</h5>
                    <p>Delivered on time, every time</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials / Brands -->
    <section class="section-padding" style="background: var(--white);">
        <div class="container gal-tb-split">
            <div class="gal-testimonial">
                <div>
                    <h3 style="font-size: 1.2rem; color: var(--navy); margin-bottom: 25px;">What Our Clients Say</h3>
                    <i class="fa-solid fa-quote-left" style="color: var(--gold); font-size: 1.5rem; margin-bottom: 15px;"></i>
                    <p style="font-size: 0.95rem; color: var(--navy); line-height: 1.6; font-style: italic; margin-bottom: 25px;">"Evolve Clothing Co. has been our trusted partner for uniforms and corporate wear. Their quality, attention to detail and delivery commitment are truly exceptional."</p>
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <img src="https://ui-avatars.com/api/?name=Rahul+Mehta&background=0f1c3f&color=fff" alt="Rahul" style="width: 45px; height: 45px; border-radius: 50%;">
                        <div>
                            <h5 style="margin: 0; font-size: 0.9rem; color: var(--navy);">Rahul Mehta</h5>
                            <span style="font-size: 0.75rem; color: var(--text-light);">Operations Manager, Nexus Brands</span>
                        </div>
                    </div>
                </div>
                <div style="display: flex; gap: 10px; align-self: flex-end;">
                    <button style="width: 30px; height: 30px; background: white; border: 1px solid var(--border-color); border-radius: 50%; cursor: pointer;"><i class="fa-solid fa-chevron-left text-light"></i></button>
                    <button style="width: 30px; height: 30px; background: white; border: 1px solid var(--border-color); border-radius: 50%; cursor: pointer;"><i class="fa-solid fa-chevron-right text-light"></i></button>
                </div>
            </div>
            <div class="gal-brands">
                <h3 style="font-size: 1.2rem; color: var(--navy); margin-bottom: 25px;">Trusted by Leading Brands & Institutions</h3>
                <div class="gal-brand-grid">
                    <div class="gal-brand-box">
                        <i class="fa-solid fa-building"></i>
                        <h6>NEXUS</h6>
                        <p>BRANDS</p>
                    </div>
                    <div class="gal-brand-box">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <h6>ROYAL</h6>
                        
                    </div>
                    <div class="gal-brand-box">
                        <i class="fa-solid fa-heart-pulse"></i>
                        <h6>HEALTH PLUS</h6>
                        <p>HOSPITALITY</p>
                    </div>
                    <div class="gal-brand-box">
                        <i class="fa-solid fa-microchip"></i>
                        <h6>PRIME TECH</h6>
                        <p>SOLUTIONS</p>
                    </div>
                    <div class="gal-brand-box">
                        <i class="fa-solid fa-city"></i>
                        <h6>URBAN EDGE</h6>
                        <p>CORPORATE</p>
                    </div>
                    <div class="gal-brand-box">
                        <i class="fa-solid fa-leaf"></i>
                        <h6>GREENFIELD</h6>
                        <p>UNIVERSITY</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <div class="uni-cta-bar">
        <div class="uni-cta-main" style="background-image: linear-gradient(rgba(15, 28, 63, 0.9), rgba(15, 28, 63, 0.9)), url('<?php echo get_template_directory_uri(); ?>/images/gal_craft_2.jpg'); background-size: cover; background-position: center;">
            <i class="fa-solid fa-vest-patches text-gold" style="font-size: 3rem;"></i>
            <div>
                <h3 style="margin: 0 0 10px 0; font-size: 1.4rem;">Need a Collection Like This?</h3>
                <p style="margin: 0; font-size: 0.75rem; color: rgba(255,255,255,0.7); max-width: 300px; line-height: 1.5;">Let's create something exceptional together. Connect with our team for custom solutions tailored to your brand.</p>
            </div>
        </div>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="uni-cta-box" style="background: #0b142d;">
            <i class="fa-solid fa-comments"></i>
            <h4 style="margin: 0 0 5px 0; font-size: 0.8rem; letter-spacing: 1px;">CONNECT WITH US</h4>
            <p style="margin: 0; font-size: 0.65rem; color: rgba(255,255,255,0.6);">Talk to our experts for your custom requirements <br> <i class="fa-solid fa-arrow-right" style="margin-top: 5px;"></i></p>
        </a>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="uni-cta-box" style="background: #128C7E;">
            <i class="fa-brands fa-whatsapp" style="color: white;"></i>
            <h4 style="margin: 0 0 5px 0; font-size: 0.8rem; letter-spacing: 1px;">WHATSAPP US</h4>
            <p style="margin: 0; font-size: 0.65rem; color: rgba(255,255,255,0.8);">Chat with us instantly on WhatsApp <br> <i class="fa-solid fa-arrow-right" style="margin-top: 5px;"></i></p>
        </a>
        <a href="<?php echo esc_url( home_url( '/quote' ) ); ?>" class="uni-cta-box" style="background: var(--gold);">
            <i class="fa-regular fa-file-lines" style="color: white;"></i>
            <h4 style="margin: 0 0 5px 0; font-size: 0.8rem; letter-spacing: 1px;">REQUEST A QUOTE</h4>
            <p style="margin: 0; font-size: 0.65rem; color: rgba(255,255,255,0.9);">Get a quick quote for your requirements today <br> <i class="fa-solid fa-arrow-right" style="margin-top: 5px;"></i></p>
        </a>
    </div>

    <!-- Footer -->

<?php
get_footer();
?>