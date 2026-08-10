<?php
/* Template Name: Uniforms */
get_header();
?>

<!-- Hero Section -->
    <section class="section-padding" style="background: var(--bg-light); overflow: hidden;">
        <div class="container" style="display: flex; gap: 60px; align-items: center;">
            <div style="flex: 1;">
                <p style="color: var(--gold); font-size: 0.85rem; font-weight: 600; letter-spacing: 1.5px; margin-bottom: 15px; text-transform: uppercase;">Uniform Manufacturing</p>
                <h1 style="font-size: 3rem; margin-bottom: 25px; line-height: 1.2; color: var(--navy);">Custom Uniform Manufacturing for Corporates & Institutions</h1>
                <p style="color: var(--text-light); margin-bottom: 35px; font-size: 1.1rem; line-height: 1.6;">At Evolve Clothing Co., we manufacture premium custom uniforms for corporate teams, hospitality, healthcare, events, and institutions with a focus on comfort, durability & perfect fit. Expert tailoring for a consistent brand identity.</p>
                
                <div style="display: flex; gap: 20px; margin-bottom: 50px;">
                    <a href="<?php echo esc_url( home_url( '/quote' ) ); ?>" class="btn btn-primary">REQUEST A QUOTE <i class="fa-solid fa-arrow-right" style="margin-left:8px;"></i></a>
                    <a href="<?php echo esc_url( home_url( '/uniforms' ) ); ?>" class="btn btn-outline">EXPLORE UNIFORM CATEGORIES <i class="fa-solid fa-arrow-right" style="margin-left:8px;"></i></a>
                </div>

                <div class="trust-indicators" style="display: flex; gap: 30px; border-top: 1px solid var(--border-color); padding-top: 30px;">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <i class="fa-solid fa-award text-gold" style="font-size: 1.5rem;"></i>
                        <div><strong style="display:block; font-size: 1.2rem;">18+</strong><span style="font-size: 0.75rem; color: var(--text-light);">Years Experience</span></div>
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <i class="fa-solid fa-users text-gold" style="font-size: 1.5rem;"></i>
                        <div><strong style="display:block; font-size: 1.2rem;">1000+</strong><span style="font-size: 0.75rem; color: var(--text-light);">Happy Clients</span></div>
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <i class="fa-solid fa-shirt text-gold" style="font-size: 1.5rem;"></i>
                        <div><strong style="display:block; font-size: 1.2rem;">5000+</strong><span style="font-size: 0.75rem; color: var(--text-light);">Products Manufactured</span></div>
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <i class="fa-solid fa-check-circle text-gold" style="font-size: 1.5rem;"></i>
                        <div><strong style="display:block; font-size: 1.2rem;">98%</strong><span style="font-size: 0.75rem; color: var(--text-light);">Client Satisfaction</span></div>
                    </div>
                </div>
            </div>
            <div style="flex: 1; position: relative;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/uniform_showroom_hero.jpg" alt="Custom Uniform Manufacturing Showroom" style="width: 100%; height: 480px; object-fit: cover; border-radius: 12px; box-shadow: 0 20px 40px rgba(0,0,0,0.12); display: block;">
                <div class="uni-hero-badge" style="position: absolute; top: 25px; left: 25px; background: rgba(7, 20, 51, 0.92); backdrop-filter: blur(8px); color: white; padding: 18px 22px; border-radius: 10px; text-align: center; border: 1px solid rgba(255,255,255,0.15); box-shadow: 0 10px 25px rgba(0,0,0,0.25); z-index: 2;">
                    <i class="fa-solid fa-crown text-gold" style="font-size: 1.4rem; margin-bottom: 4px; display: block;"></i>
                    <div style="font-size: 0.65rem; font-weight: 600; letter-spacing: 1px; color: #FFFFFF;">TRUSTED BY</div>
                    <div style="font-size: 1.7rem; font-weight: 700; line-height: 1.1; margin: 2px 0;">1000+</div>
                    <div style="font-size: 0.75rem; letter-spacing: 1px; margin-bottom: 5px; color: var(--gold);">BRANDS</div>
                    <div style="color: var(--gold); font-size: 0.7rem;"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Built For Identity -->
    <section class="section-padding" style="background: var(--white);">
        <div class="container" style="display: flex; gap: 50px; align-items: center;">
            <div style="flex: 1;">
                <p style="color: var(--gold); font-size: 0.85rem; font-weight: 600; letter-spacing: 1.5px; margin-bottom: 15px; text-transform: uppercase;">Built for identity. Made for performance.</p>
                <h2 style="font-size: 2.5rem; margin-bottom: 25px; color: var(--navy); line-height: 1.2;">Uniforms That Represent<br>Your Brand With Pride</h2>
                <p style="color: var(--text-light); margin-bottom: 30px; font-size: 1rem; line-height: 1.6;">Our uniforms combine consistent quality, timeless style, precision tailoring and brand-focused detailing to elevate uniforms that look professional, feel comfortable and perform every day.</p>
                <img src="<?php echo get_template_directory_uri(); ?>/images/uniform_display_brand.jpg" alt="Uniforms That Represent Your Brand With Pride" style="width: 100%; height: 320px; object-fit: cover; border-radius: 12px; box-shadow: 0 12px 30px rgba(0,0,0,0.12); display: block;">
            </div>
            <div style="flex: 1;">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
                    <div style="text-align: center; padding: 20px;">
                        <div style="width: 60px; height: 60px; margin: 0 auto 20px; border-radius: 50%; border: 1px solid var(--border-color); display: flex; align-items: center; justify-content: center; color: var(--gold); font-size: 1.5rem;"><i class="fa-solid fa-shirt"></i></div>
                        <h4 style="margin-bottom: 15px; font-size: 1.1rem; color: var(--navy);">Comfort-Focused Fabrics</h4>
                        <p style="font-size: 0.9rem; color: var(--text-light);">Breathable & easy wearable for all-day wear.</p>
                    </div>
                    <div style="text-align: center; padding: 20px;">
                        <div style="width: 60px; height: 60px; margin: 0 auto 20px; border-radius: 50%; border: 1px solid var(--border-color); display: flex; align-items: center; justify-content: center; color: var(--gold); font-size: 1.5rem;"><i class="fa-solid fa-shield-halved"></i></div>
                        <h4 style="margin-bottom: 15px; font-size: 1.1rem; color: var(--navy);">Durable Construction</h4>
                        <p style="font-size: 0.9rem; color: var(--text-light);">Built to last with superior weave & tear.</p>
                    </div>
                    <div style="text-align: center; padding: 20px;">
                        <div style="width: 60px; height: 60px; margin: 0 auto 20px; border-radius: 50%; border: 1px solid var(--border-color); display: flex; align-items: center; justify-content: center; color: var(--gold); font-size: 1.5rem;"><i class="fa-solid fa-tag"></i></div>
                        <h4 style="margin-bottom: 15px; font-size: 1.1rem; color: var(--navy);">Custom Finishing</h4>
                        <p style="font-size: 0.9rem; color: var(--text-light);">Colors, stitching & labels to brand profile.</p>
                    </div>
                    <div style="text-align: center; padding: 20px;">
                        <div style="width: 60px; height: 60px; margin: 0 auto 20px; border-radius: 50%; border: 1px solid var(--border-color); display: flex; align-items: center; justify-content: center; color: var(--gold); font-size: 1.5rem;"><i class="fa-solid fa-industry"></i></div>
                        <h4 style="margin-bottom: 15px; font-size: 1.1rem; color: var(--navy);">Reliable Bulk Production</h4>
                        <p style="font-size: 0.9rem; color: var(--text-light);">Consistent quality across large volumes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Grid -->
    <section class="section-padding" style="background: var(--bg-light);">
        <div class="container">
            <div class="text-center" style="margin-bottom: 50px;">
                <h2 class="section-title">OUR UNIFORM CATEGORIES</h2>
            </div>
            
            <div class="uni-cat-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
                    <i class="fa-solid fa-arrow-right uni-cat-card-arrow"></i>
                </a>
                <a href="<?php echo esc_url( home_url( '/uniforms' ) ); ?>" class="uni-cat-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_cat_2.jpg" alt="Corporate">
                    <div>
                        <h4 style="margin: 0 0 8px 0; font-size: 1rem; color: var(--navy);">Corporate Uniforms</h4>
                        <p style="margin: 0; font-size: 0.8rem; color: var(--text-light);">Professional uniforms that enhance your brand identity.</p>
                    </div>
                    <i class="fa-solid fa-arrow-right uni-cat-card-arrow"></i>
                </a>
                <a href="<?php echo esc_url( home_url( '/uniforms' ) ); ?>" class="uni-cat-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_cat_3.jpg" alt="Hospitality">
                    <div>
                        <h4 style="margin: 0 0 8px 0; font-size: 1rem; color: var(--navy);">Hospitality Uniforms</h4>
                        <p style="margin: 0; font-size: 0.8rem; color: var(--text-light);">Elegant and fresh to keep your team looking hospitality-best.</p>
                    </div>
                    <i class="fa-solid fa-arrow-right uni-cat-card-arrow"></i>
                </a>
                <a href="<?php echo esc_url( home_url( '/uniforms' ) ); ?>" class="uni-cat-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_cat_4.jpg" alt="Healthcare">
                    <div>
                        <h4 style="margin: 0 0 8px 0; font-size: 1rem; color: var(--navy);">Healthcare Uniforms</h4>
                        <p style="margin: 0; font-size: 0.8rem; color: var(--text-light);">Comfortable, hygienic uniforms for healthcare professionals.</p>
                    </div>
                    <i class="fa-solid fa-arrow-right uni-cat-card-arrow"></i>
                </a>
                
                <!-- Row 2 -->
                <a href="<?php echo esc_url( home_url( '/uniforms' ) ); ?>" class="uni-cat-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_cat_5.jpg" alt="Promotional">
                    <div>
                        <h4 style="margin: 0 0 8px 0; font-size: 1rem; color: var(--navy);">Event & Promotional</h4>
                        <p style="margin: 0; font-size: 0.8rem; color: var(--text-light);">Branded apparel for events, exhibitions & campaigns.</p>
                    </div>
                    <i class="fa-solid fa-arrow-right uni-cat-card-arrow"></i>
                </a>
                <a href="<?php echo esc_url( home_url( '/uniforms' ) ); ?>" class="uni-cat-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_cat_6.jpg" alt="Security">
                    <div>
                        <h4 style="margin: 0 0 8px 0; font-size: 1rem; color: var(--navy);">Security / Facility</h4>
                        <p style="margin: 0; font-size: 0.8rem; color: var(--text-light);">Functional uniforms for safety, security & facility operations teams.</p>
                    </div>
                    <i class="fa-solid fa-arrow-right uni-cat-card-arrow"></i>
                </a>
                <a href="<?php echo esc_url( home_url( '/uniforms' ) ); ?>" class="uni-cat-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_cat_7.jpg" alt="Industrial">
                    <div>
                        <h4 style="margin: 0 0 8px 0; font-size: 1rem; color: var(--navy);">Industrial Workwear</h4>
                        <p style="margin: 0; font-size: 0.8rem; color: var(--text-light);">Safety-focused workwear for industrial & factory environments.</p>
                    </div>
                    <i class="fa-solid fa-arrow-right uni-cat-card-arrow"></i>
                </a>
                <a href="<?php echo esc_url( home_url( '/uniforms' ) ); ?>" class="uni-cat-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_cat_8.jpg" alt="Sports">
                    <div>
                        <h4 style="margin: 0 0 8px 0; font-size: 1rem; color: var(--navy);">Sports / Team</h4>
                        <p style="margin: 0; font-size: 0.8rem; color: var(--text-light);">Custom kits for your team's identity & spirit.</p>
                    </div>
                    <i class="fa-solid fa-arrow-right uni-cat-card-arrow"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="section-padding" style="background: var(--white);">
        <div class="container">
            <div class="text-center" style="margin-bottom: 50px;">
                <p style="color: var(--gold); font-size: 0.85rem; font-weight: 600; letter-spacing: 1.5px; margin-bottom: 15px; text-transform: uppercase;">Designed for comfort, durability & brand identity</p>
            </div>
            
            <div class="uni-feat-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 40px;">
                <div class="text-center">
                    <div style="color: var(--gold); font-size: 1.8rem; margin-bottom: 15px;"><i class="fa-solid fa-layer-group"></i></div>
                    <h4 style="font-size: 0.95rem; color: var(--navy); margin-bottom: 10px;">Fabric<br>Customization</h4>
                    <p style="font-size: 0.8rem; color: var(--text-light);">Choose from 100+ of fabrics & blends.</p>
                </div>
                <div class="text-center">
                    <div style="color: var(--gold); font-size: 1.8rem; margin-bottom: 15px;"><i class="fa-solid fa-ruler-combined"></i></div>
                    <h4 style="font-size: 0.95rem; color: var(--navy); margin-bottom: 10px;">Size<br>Ranging</h4>
                    <p style="font-size: 0.8rem; color: var(--text-light);">Accurate grading for all age groups.</p>
                </div>
                <div class="text-center">
                    <div style="color: var(--gold); font-size: 1.8rem; margin-bottom: 15px;"><i class="fa-solid fa-vest-patches"></i></div>
                    <h4 style="font-size: 0.95rem; color: var(--navy); margin-bottom: 10px;">Logo Embroidery<br>& Branding</h4>
                    <p style="font-size: 0.8rem; color: var(--text-light);">High quality branding that lasts.</p>
                </div>
                <div class="text-center">
                    <div style="color: var(--gold); font-size: 1.8rem; margin-bottom: 15px;"><i class="fa-solid fa-palette"></i></div>
                    <h4 style="font-size: 0.95rem; color: var(--navy); margin-bottom: 10px;">Color<br>Matching</h4>
                    <p style="font-size: 0.8rem; color: var(--text-light);">Exact color matching for brand identity.</p>
                </div>
                <!-- Row 2 -->
                <div class="text-center">
                    <div style="color: var(--gold); font-size: 1.8rem; margin-bottom: 15px;"><i class="fa-solid fa-headset"></i></div>
                    <h4 style="font-size: 0.95rem; color: var(--navy); margin-bottom: 10px;">Dedicated<br>Support</h4>
                    <p style="font-size: 0.8rem; color: var(--text-light);">Custom helpline, quick updates & on-time delivery.</p>
                </div>
                <div class="text-center">
                    <div style="color: var(--gold); font-size: 1.8rem; margin-bottom: 15px;"><i class="fa-solid fa-boxes-stacked"></i></div>
                    <h4 style="font-size: 0.95rem; color: var(--navy); margin-bottom: 10px;">Bulk Production<br>Capacity</h4>
                    <p style="font-size: 0.8rem; color: var(--text-light);">Large scale production with strict quality control.</p>
                </div>
                <div class="text-center">
                    <div style="color: var(--gold); font-size: 1.8rem; margin-bottom: 15px;"><i class="fa-solid fa-clipboard-check"></i></div>
                    <h4 style="font-size: 0.95rem; color: var(--navy); margin-bottom: 10px;">Quality<br>Check</h4>
                    <p style="font-size: 0.8rem; color: var(--text-light);">Multi-stage QC for finishing: flawless.</p>
                </div>
                <div class="text-center">
                    <div style="color: var(--gold); font-size: 1.8rem; margin-bottom: 15px;"><i class="fa-regular fa-clock"></i></div>
                    <h4 style="font-size: 0.95rem; color: var(--navy); margin-bottom: 10px;">Timely<br>Delivery</h4>
                    <p style="font-size: 0.8rem; color: var(--text-light);">On-time delivery across in time.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Sectors -->
    <section class="section-padding" style="background: var(--bg-light);">
        <div class="container uni-feat-sectors-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
            <!-- Sector 1 -->
            <div style="background: var(--white); border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; border: 1px solid var(--border-color);">
                <div style="padding: 40px; flex: 1;">
                    <p style="color: var(--gold); font-size: 0.75rem; font-weight: 700; letter-spacing: 1.5px; margin-bottom: 10px; text-transform: uppercase;">Featured Sectors</p>
                    <h3 style="font-size: 1.6rem; color: var(--navy); margin-bottom: 25px;">Corporate & Professional Uniforms</h3>
                    <ul style="list-style: none; padding: 0; margin: 0 0 30px 0; color: var(--text-light); font-size: 0.95rem;">
                        <li style="margin-bottom: 15px; display: flex; gap: 10px;"><i class="fa-solid fa-circle-check text-gold" style="margin-top: 4px;"></i> Sleek, elegant & brand-aligned designs</li>
                        <li style="margin-bottom: 15px; display: flex; gap: 10px;"><i class="fa-solid fa-circle-check text-gold" style="margin-top: 4px;"></i> Premium fabrics for a polished look</li>
                        <li style="margin-bottom: 15px; display: flex; gap: 10px;"><i class="fa-solid fa-circle-check text-gold" style="margin-top: 4px;"></i> Custom tailoring for a perfect fit & style</li>
                        <li style="margin-bottom: 15px; display: flex; gap: 10px;"><i class="fa-solid fa-circle-check text-gold" style="margin-top: 4px;"></i> Built to represent your brand confidently</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/uniforms' ) ); ?>" class="btn btn-primary" style="font-size: 0.85rem;">EXPLORE CORPORATE UNIFORMS <i class="fa-solid fa-arrow-right" style="margin-left:8px;"></i></a>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/uni_corporate_team.jpg" alt="Corporate & Professional Team Uniforms" style="width: 100%; height: 350px; object-fit: cover;">
            </div>
        </div>
    </section>

    <!-- Manufacturing Process -->
    <section class="section-padding" style="background: var(--white);">
        <div class="container text-center">
            <h2 class="section-title">OUR UNIFORM MANUFACTURING PROCESS</h2>
            
            <div class="process-timeline-8" style="display: flex; justify-content: space-between; position: relative; margin-top: 60px;">
                <div class="process-line-8" style="position: absolute; top: 30px; left: 0; right: 0; height: 1px; border-top: 1px dashed var(--border-color); z-index: 0;"></div>
                
                <div class="p-step-8 text-center" style="position: relative; z-index: 1; flex: 1;">
                    <div style="width: 60px; height: 60px; margin: 0 auto 15px; border-radius: 50%; border: 1px solid var(--gold); background: var(--white); display: flex; align-items: center; justify-content: center; color: var(--navy); font-size: 1.2rem;">
                        <i class="fa-solid fa-comments"></i>
                    </div>
                    <div><span style="font-weight: 700; font-size: 0.8rem; display: block; margin-bottom: 5px; color: var(--navy);">01<br>Consultation</span>
                    <p style="font-size: 0.7rem; color: var(--text-light); line-height: 1.4;">Understanding your requirements & goals.</p></div>
                </div>
                <div class="p-step-8 text-center" style="position: relative; z-index: 1; flex: 1;">
                    <div style="width: 60px; height: 60px; margin: 0 auto 15px; border-radius: 50%; border: 1px solid var(--border-color); background: var(--white); display: flex; align-items: center; justify-content: center; color: var(--navy); font-size: 1.2rem;">
                        <i class="fa-solid fa-pen-ruler"></i>
                    </div>
                    <div><span style="font-weight: 700; font-size: 0.8rem; display: block; margin-bottom: 5px; color: var(--navy);">02<br>Concept & Fit</span>
                    <p style="font-size: 0.7rem; color: var(--text-light); line-height: 1.4;">We share ideas, designs & sample for review.</p></div>
                </div>
                <div class="p-step-8 text-center" style="position: relative; z-index: 1; flex: 1;">
                    <div style="width: 60px; height: 60px; margin: 0 auto 15px; border-radius: 50%; border: 1px solid var(--border-color); background: var(--white); display: flex; align-items: center; justify-content: center; color: var(--navy); font-size: 1.2rem;">
                        <i class="fa-solid fa-scroll"></i>
                    </div>
                    <div><span style="font-weight: 700; font-size: 0.8rem; display: block; margin-bottom: 5px; color: var(--navy);">03<br>Fabric<br>Selection</span>
                    <p style="font-size: 0.7rem; color: var(--text-light); line-height: 1.4;">Choose the best fabric based on your needs.</p></div>
                </div>
                <div class="p-step-8 text-center" style="position: relative; z-index: 1; flex: 1;">
                    <div style="width: 60px; height: 60px; margin: 0 auto 15px; border-radius: 50%; border: 1px solid var(--border-color); background: var(--white); display: flex; align-items: center; justify-content: center; color: var(--navy); font-size: 1.2rem;">
                        <i class="fa-solid fa-scissors"></i>
                    </div>
                    <div><span style="font-weight: 700; font-size: 0.8rem; display: block; margin-bottom: 5px; color: var(--navy);">04<br>Design &<br>Sampling</span>
                    <p style="font-size: 0.7rem; color: var(--text-light); line-height: 1.4;">We create samples for your approval.</p></div>
                </div>
                <div class="p-step-8 text-center" style="position: relative; z-index: 1; flex: 1;">
                    <div style="width: 60px; height: 60px; margin: 0 auto 15px; border-radius: 50%; border: 1px solid var(--border-color); background: var(--white); display: flex; align-items: center; justify-content: center; color: var(--navy); font-size: 1.2rem;">
                        <i class="fa-solid fa-handshake"></i>
                    </div>
                    <div><span style="font-weight: 700; font-size: 0.8rem; display: block; margin-bottom: 5px; color: var(--navy);">05<br>Approval<br>& Order</span>
                    <p style="font-size: 0.7rem; color: var(--text-light); line-height: 1.4;">Finalize the design & confirm your order.</p></div>
                </div>
                <div class="p-step-8 text-center" style="position: relative; z-index: 1; flex: 1;">
                    <div style="width: 60px; height: 60px; margin: 0 auto 15px; border-radius: 50%; border: 1px solid var(--border-color); background: var(--white); display: flex; align-items: center; justify-content: center; color: var(--navy); font-size: 1.2rem;">
                        <i class="fa-solid fa-gears"></i>
                    </div>
                    <div><span style="font-weight: 700; font-size: 0.8rem; display: block; margin-bottom: 5px; color: var(--navy);">06<br>Bulk<br>Production</span>
                    <p style="font-size: 0.7rem; color: var(--text-light); line-height: 1.4;">Precision manufacturing with quality checks.</p></div>
                </div>
                <div class="p-step-8 text-center" style="position: relative; z-index: 1; flex: 1;">
                    <div style="width: 60px; height: 60px; margin: 0 auto 15px; border-radius: 50%; border: 1px solid var(--border-color); background: var(--white); display: flex; align-items: center; justify-content: center; color: var(--navy); font-size: 1.2rem;">
                        <i class="fa-solid fa-magnifying-glass-chart"></i>
                    </div>
                    <div><span style="font-weight: 700; font-size: 0.8rem; display: block; margin-bottom: 5px; color: var(--navy);">07<br>Quality<br>Check</span>
                    <p style="font-size: 0.7rem; color: var(--text-light); line-height: 1.4;">Multi-level quality assurance for perfect finishing.</p></div>
                </div>
                <div class="p-step-8 text-center" style="position: relative; z-index: 1; flex: 1;">
                    <div style="width: 60px; height: 60px; margin: 0 auto 15px; border-radius: 50%; border: 1px solid var(--border-color); background: var(--white); display: flex; align-items: center; justify-content: center; color: var(--navy); font-size: 1.2rem;">
                        <i class="fa-solid fa-box-open"></i>
                    </div>
                    <div><span style="font-weight: 700; font-size: 0.8rem; display: block; margin-bottom: 5px; color: var(--navy);">08<br>Packing &<br>Delivery</span>
                    <p style="font-size: 0.7rem; color: var(--text-light); line-height: 1.4;">Safe packing & on-time delivery at your doorstep.</p></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose -->
    <section class="section-padding" style="background: var(--bg-light);">
        <div class="container uni-why-flex" style="display: flex; gap: 50px; align-items: center;">
            <div style="flex: 1.2;">
                <h2 style="font-size: 1.8rem; color: var(--gold); font-weight: 600; text-transform: uppercase; margin-bottom: 40px; font-size: 0.85rem; letter-spacing: 1.5px;">Why Choose Evolve For Uniforms?</h2>
                <div class="uni-why-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
                    <div style="display: flex; gap: 15px; align-items: flex-start;">
                        <i class="fa-solid fa-medal text-gold" style="font-size: 1.5rem; margin-top: 5px;"></i>
                        <div>
                            <h4 style="font-size: 0.95rem; color: var(--navy); margin-bottom: 5px;">Custom Design Support</h4>
                            <p style="font-size: 0.8rem; color: var(--text-light); margin: 0; line-height: 1.5;">Designs tailored to your brand & fit requirements.</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 15px; align-items: flex-start;">
                        <i class="fa-solid fa-people-arrows text-gold" style="font-size: 1.5rem; margin-top: 5px;"></i>
                        <div>
                            <h4 style="font-size: 0.95rem; color: var(--navy); margin-bottom: 5px;">Reliable Size Management</h4>
                            <p style="font-size: 0.8rem; color: var(--text-light); margin: 0; line-height: 1.5;">Accurate grading for wearer body type & age group.</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 15px; align-items: flex-start;">
                        <i class="fa-solid fa-leaf text-gold" style="font-size: 1.5rem; margin-top: 5px;"></i>
                        <div>
                            <h4 style="font-size: 0.95rem; color: var(--navy); margin-bottom: 5px;">Ethical & Quality Manufacturing</h4>
                            <p style="font-size: 0.8rem; color: var(--text-light); margin: 0; line-height: 1.5;">Ethical practices with international standards.</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 15px; align-items: flex-start;">
                        <i class="fa-solid fa-cubes text-gold" style="font-size: 1.5rem; margin-top: 5px;"></i>
                        <div>
                            <h4 style="font-size: 0.95rem; color: var(--navy); margin-bottom: 5px;">Flexible MOQ Options</h4>
                            <p style="font-size: 0.8rem; color: var(--text-light); margin: 0; line-height: 1.5;">Low minimum order quantity to pinpoint your needs.</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 15px; align-items: flex-start;">
                        <i class="fa-solid fa-check-double text-gold" style="font-size: 1.5rem; margin-top: 5px;"></i>
                        <div>
                            <h4 style="font-size: 0.95rem; color: var(--navy); margin-bottom: 5px;">Consistent Finishing</h4>
                            <p style="font-size: 0.8rem; color: var(--text-light); margin: 0; line-height: 1.5;">Neat stitching, strong seams & premium finishing.</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 15px; align-items: flex-start;">
                        <i class="fa-solid fa-tag text-gold" style="font-size: 1.5rem; margin-top: 5px;"></i>
                        <div>
                            <h4 style="font-size: 0.95rem; color: var(--navy); margin-bottom: 5px;">Branding & Packaging Pointers</h4>
                            <p style="font-size: 0.8rem; color: var(--text-light); margin: 0; line-height: 1.5;">Custom labels, tags & boxing packaging available.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div style="flex: 1;">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_why_1.jpg" alt="Custom Packaging & Branding" style="width: 100%; height: 200px; object-fit: cover; border-radius: 6px; box-shadow: 0 4px 12px rgba(0,0,0,0.08);">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_why_2.jpg" alt="Quality Control & Size Ranging" style="width: 100%; height: 200px; object-fit: cover; border-radius: 6px; box-shadow: 0 4px 12px rgba(0,0,0,0.08);">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_why_3.jpg" alt="Ethical Manufacturing & Sewing" style="width: 100%; height: 200px; object-fit: cover; border-radius: 6px; box-shadow: 0 4px 12px rgba(0,0,0,0.08);">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_why_4.jpg" alt="Custom Design & Tailoring Support" style="width: 100%; height: 200px; object-fit: cover; border-radius: 6px; box-shadow: 0 4px 12px rgba(0,0,0,0.08);">
                </div>
            </div>
        </div>
    </section>

    <!-- Lookbook -->
    <section class="section-padding" style="background: var(--white);">
        <div class="container text-center">
            <h2 class="section-title">UNIFORM LOOKBOOK</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(140px, 1fr)); gap: 15px; margin-top: 40px;">
                <div style="overflow: hidden; border-radius: 8px; border: 1px solid var(--border-color); box-shadow: 0 4px 12px rgba(0,0,0,0.06);">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_look_1.jpg" alt="Corporate Suit Collection" style="width: 100%; height: 220px; object-fit: cover; display: block; transition: transform 0.3s ease;">
                </div>
                <div style="overflow: hidden; border-radius: 8px; border: 1px solid var(--border-color); box-shadow: 0 4px 12px rgba(0,0,0,0.06);">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_look_2.jpg" alt="Hospitality & Culinary Apparel" style="width: 100%; height: 220px; object-fit: cover; display: block; transition: transform 0.3s ease;">
                </div>
                <div style="overflow: hidden; border-radius: 8px; border: 1px solid var(--border-color); box-shadow: 0 4px 12px rgba(0,0,0,0.06);">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_look_3.jpg" alt="Healthcare Scrubs & Tunics" style="width: 100%; height: 220px; object-fit: cover; display: block; transition: transform 0.3s ease;">
                </div>
                <div style="overflow: hidden; border-radius: 8px; border: 1px solid var(--border-color); box-shadow: 0 4px 12px rgba(0,0,0,0.06);">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_look_4.jpg" alt="Promotional & Event Apparel" style="width: 100%; height: 220px; object-fit: cover; display: block; transition: transform 0.3s ease;">
                </div>
                <div style="overflow: hidden; border-radius: 8px; border: 1px solid var(--border-color); box-shadow: 0 4px 12px rgba(0,0,0,0.06);">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_look_5.jpg" alt="Security & Tactical Gear" style="width: 100%; height: 220px; object-fit: cover; display: block; transition: transform 0.3s ease;">
                </div>
                <div style="overflow: hidden; border-radius: 8px; border: 1px solid var(--border-color); box-shadow: 0 4px 12px rgba(0,0,0,0.06);">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_look_6.jpg" alt="Industrial Workwear & Safety" style="width: 100%; height: 220px; object-fit: cover; display: block; transition: transform 0.3s ease;">
                </div>
                <div style="overflow: hidden; border-radius: 8px; border: 1px solid var(--border-color); box-shadow: 0 4px 12px rgba(0,0,0,0.06);">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uni_look_7.jpg" alt="Sports & Athletic Team Kits" style="width: 100%; height: 220px; object-fit: cover; display: block; transition: transform 0.3s ease;">
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" style="padding: 60px 0 80px 0; background: var(--bg-light);">
        <div class="container text-center">
            <h2 class="section-title">FREQUENTLY ASKED QUESTIONS</h2>
            <div class="faq-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-top: 40px; text-align: left;">
                <div class="faq-col" style="display: flex; flex-direction: column; gap: 15px;">
                    <div class="faq-item" style="border-bottom: 1px solid var(--border-color); padding: 15px 0; cursor: pointer;">
                        <div class="faq-header" style="display: flex; justify-content: space-between; align-items: center;">
                            <h4 style="margin:0; font-size: 0.95rem; color: var(--navy);">What is your minimum order quantity for uniforms?</h4>
                            <i class="fa-solid fa-plus text-navy"></i>
                        </div>
                        <div class="faq-answer" style="padding-top: 15px; font-size: 0.9rem; color: var(--text-color); line-height: 1.6;">Our MOQ for custom uniforms is typically 200 pieces per style. However, we are flexible for corporate clients who may need smaller batches for new hires.</div>
                    </div>
                    <div class="faq-item" style="border-bottom: 1px solid var(--border-color); padding: 15px 0; cursor: pointer;">
                        <div class="faq-header" style="display: flex; justify-content: space-between; align-items: center;">
                            <h4 style="margin:0; font-size: 0.95rem; color: var(--navy);">Do you provide size sets and samples before production?</h4>
                            <i class="fa-solid fa-plus text-navy"></i>
                        </div>
                        <div class="faq-answer" style="padding-top: 15px; font-size: 0.9rem; color: var(--text-color); line-height: 1.6;">Yes, we provide complete size sets and pre-production samples so your team can verify the fit and finish before bulk manufacturing begins.</div>
                    </div>
                    <div class="faq-item" style="border-bottom: 1px solid var(--border-color); padding: 15px 0; cursor: pointer;">
                        <div class="faq-header" style="display: flex; justify-content: space-between; align-items: center;">
                            <h4 style="margin:0; font-size: 0.95rem; color: var(--navy);">Can you add embroidery, logos, and brand labels?</h4>
                            <i class="fa-solid fa-plus text-navy"></i>
                        </div>
                        <div class="faq-answer" style="padding-top: 15px; font-size: 0.9rem; color: var(--text-color); line-height: 1.6;">Absolutely! We offer premium in-house embroidery, screen printing, heat transfers, and custom woven tags to perfectly represent your brand identity.</div>
                    </div>
                </div>
                <div class="faq-col" style="display: flex; flex-direction: column; gap: 15px;">
                    <div class="faq-item" style="border-bottom: 1px solid var(--border-color); padding: 15px 0; cursor: pointer;">
                        <div class="faq-header" style="display: flex; justify-content: space-between; align-items: center;">
                            <h4 style="margin:0; font-size: 0.95rem; color: var(--navy);">Can you handle corporate and hospitality uniforms orders?</h4>
                            <i class="fa-solid fa-plus text-navy"></i>
                        </div>
                        <div class="faq-answer" style="padding-top: 15px; font-size: 0.9rem; color: var(--text-color); line-height: 1.6;">Yes, we supply major hospital networks, luxury hotels, restaurant chains, and corporate offices across the globe.</div>
                    </div>
                    <div class="faq-item" style="border-bottom: 1px solid var(--border-color); padding: 15px 0; cursor: pointer;">
                        <div class="faq-header" style="display: flex; justify-content: space-between; align-items: center;">
                            <h4 style="margin:0; font-size: 0.95rem; color: var(--navy);">What is the typical delivery timeline?</h4>
                            <i class="fa-solid fa-plus text-navy"></i>
                        </div>
                        <div class="faq-answer" style="padding-top: 15px; font-size: 0.9rem; color: var(--text-color); line-height: 1.6;">Standard delivery is 4-6 weeks after sample approval. However, we can expedite urgent requirements on a case-by-case basis.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Banner -->
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

    <!-- Footer -->

<?php
get_footer();
?>