<?php
/* Template Name: About */
get_header();
?>

<main class="about-page">
    
    <!-- Hero Section -->
    <section class="about-hero hero">
        <div class="container hero-inner">
            <div class="hero-content">
                <div class="hero-subtitle">ABOUT EVOLVE CLOTHING CO.</div>
                <h1>Crafting Quality Apparel<br>with Precision <span class="text-gold">Since 2007</span></h1>
                <p>From custom shirts and uniforms to kidswear and white-label manufacturing, Evolve Clothing Co. is your trusted production partner. We combine craftsmanship, quality fabrics, and ethical manufacturing to deliver apparel that represents your brand with pride.</p>
                
                <div class="hero-btns" style="margin-bottom:30px;">
                    <a href="<?php echo esc_url( home_url( '/quote' ) ); ?>" class="btn btn-navy">REQUEST A QUOTE <i class="fa-solid fa-arrow-right"></i></a>
                    <a href="index.html#services" class="btn btn-outline">EXPLORE SERVICES <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                
                <div class="hero-trust-grid" style="grid-template-columns: 1fr 1fr; gap: 15px;">
                    <div class="hero-trust-item">
                        <div class="hero-trust-icon" style="width:30px; height:30px; font-size:0.8rem;"><i class="fa-solid fa-medal"></i></div>
                        <span style="font-size:0.8rem;">18+<br>Years of Expertise</span>
                    </div>
                    <div class="hero-trust-item">
                        <div class="hero-trust-icon" style="width:30px; height:30px; font-size:0.8rem;"><i class="fa-solid fa-industry"></i></div>
                        <span style="font-size:0.8rem;">Custom<br>Manufacturing</span>
                    </div>
                    <div class="hero-trust-item">
                        <div class="hero-trust-icon" style="width:30px; height:30px; font-size:0.8rem;"><i class="fa-solid fa-truck-fast"></i></div>
                        <span style="font-size:0.8rem;">On-Time<br>Delivery</span>
                    </div>
                    <div class="hero-trust-item">
                        <div class="hero-trust-icon" style="width:30px; height:30px; font-size:0.8rem;"><i class="fa-solid fa-check-double"></i></div>
                        <span style="font-size:0.8rem;">Quality & Consistency<br>Guaranteed</span>
                    </div>
                </div>
            </div>
            <div class="hero-masonry" style="flex: 1.2; width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about_hero_team_polo.jpg" alt="Crafting Quality Apparel with Precision" class="hero-single-img">
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section class="our-story" style="padding: 80px 0; background: var(--white);">
        <div class="container about-inner" style="gap:50px; align-items: flex-start;">
            <div class="about-image" style="flex: 1.1;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about_team_factory.jpg" alt="Evolve Clothing Manufacturing Team" style="width:100%; border-radius: 8px;">
            </div>
            <div class="about-content" style="flex: 1; padding-top: 20px;">
                <div class="hero-subtitle">OUR STORY</div>
                <h2 style="font-size: 2.2rem; line-height: 1.2; font-family: var(--font-serif); margin-bottom: 25px;">A Journey Built on Trust, Quality & Craftsmanship</h2>
                <p style="margin-bottom: 20px;">Founded in 2007, Evolve Clothing Co. began with a simple vision — to deliver premium apparel through precision manufacturing and unwavering commitment to quality.</p>
                <p>Over the years, we've grown into a trusted manufacturing partner for brands, institutions, and businesses across industries. Our strength lies in our people, advanced production capabilities, and a client-first approach that ensures every piece we create meets the highest standards.</p>
            </div>
        </div>
    </section>

    <!-- Stats Bar -->
    <section class="stats-bar" style="padding: 40px 0; background: var(--bg-cream); border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color);">
        <div class="container">
            <div class="stats-bar-inner" style="display: flex; justify-content: space-between; align-items: center; background: var(--white); border-radius: 8px; padding: 30px; box-shadow: 0 5px 20px rgba(0,0,0,0.03);">
                <div class="sb-item" style="display:flex; align-items:center; gap:15px; flex:1; justify-content:center; border-right: 1px solid var(--border-color);">
                    <i class="fa-solid fa-bullseye text-gold" style="font-size: 2rem;"></i>
                    <div>
                        <div class="stat-num" style="font-size:1.8rem; margin:0;">18+</div>
                        <div class="stat-label" style="font-size:0.8rem;">Years Experience</div>
                    </div>
                </div>
                <div class="sb-item" style="display:flex; align-items:center; gap:15px; flex:1; justify-content:center; border-right: 1px solid var(--border-color);">
                    <i class="fa-solid fa-users text-gold" style="font-size: 2rem;"></i>
                    <div>
                        <div class="stat-num" style="font-size:1.8rem; margin:0;">1000+</div>
                        <div class="stat-label" style="font-size:0.8rem;">Happy Clients</div>
                    </div>
                </div>
                <div class="sb-item" style="display:flex; align-items:center; gap:15px; flex:1; justify-content:center; border-right: 1px solid var(--border-color);">
                    <i class="fa-solid fa-boxes-stacked text-gold" style="font-size: 2rem;"></i>
                    <div>
                        <div class="stat-num" style="font-size:1.8rem; margin:0;">5000+</div>
                        <div class="stat-label" style="font-size:0.8rem;">Products Manufactured</div>
                    </div>
                </div>
                <div class="sb-item" style="display:flex; align-items:center; gap:15px; flex:1; justify-content:center;">
                    <i class="fa-solid fa-shield-check text-gold" style="font-size: 2rem;"></i>
                    <div>
                        <div class="stat-num" style="font-size:1.8rem; margin:0;">98%</div>
                        <div class="stat-label" style="font-size:0.8rem;">Client Satisfaction</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="mission-vision" style="padding: 80px 0; background: var(--bg-cream);">
        <div class="container">
            <div class="mv-grid" style="display: flex; flex-direction: column; gap: 40px;">
                
                <!-- Row 1: Image Left, Content Right (Mission) -->
                <div class="mv-row" style="display: flex; gap: 40px; align-items: stretch;">
                    <div style="flex: 1;">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/mission_img_1779783892575.png" alt="Our Mission" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px; min-height: 300px;">
                    </div>
                    <div class="mv-card" style="flex: 1; background: var(--white); padding: 50px; border-radius: 8px; display: flex; align-items: flex-start; gap: 25px; box-shadow: 0 5px 20px rgba(0,0,0,0.03);">
                        <i class="fa-solid fa-bullseye text-gold" style="font-size: 3rem;"></i>
                        <div style="display: flex; flex-direction: column; justify-content: center; height: 100%;">
                            <h3 style="font-size: 1.3rem; margin-bottom: 15px; text-transform: uppercase;">Our Mission</h3>
                            <p style="font-size: 1rem; margin:0; line-height: 1.7; color: var(--navy);">To empower brands and organizations with high-quality, sustainable, and custom-made apparel solutions that inspire confidence and create lasting value.</p>
                        </div>
                    </div>
                </div>

                <!-- Row 2: Content Left (Vision), Image Right -->
                <div class="mv-row" style="display: flex; gap: 40px; align-items: stretch; flex-direction: row-reverse;">
                    <div style="flex: 1;">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/vision_img_1779783907043.png" alt="Our Vision" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px; min-height: 300px;">
                    </div>
                    <div class="mv-card" style="flex: 1; background: var(--white); padding: 50px; border-radius: 8px; display: flex; align-items: flex-start; gap: 25px; box-shadow: 0 5px 20px rgba(0,0,0,0.03);">
                        <i class="fa-solid fa-eye text-gold" style="font-size: 3rem;"></i>
                        <div style="display: flex; flex-direction: column; justify-content: center; height: 100%;">
                            <h3 style="font-size: 1.3rem; margin-bottom: 15px; text-transform: uppercase;">Our Vision</h3>
                            <p style="font-size: 1rem; margin:0; line-height: 1.7; color: var(--navy);">To be a globally trusted apparel manufacturing partner recognized for excellence, innovation, ethical practices, and long-term relationships.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Why Choose & Journey Split -->
    <section class="why-journey-split" style="padding: 80px 0; background: var(--bg-beige);">
        <div class="container" style="display: flex; gap: 40px; align-items: stretch;">
            <!-- Why Choose -->
            <div class="why-half" style="flex: 1; background: #F8F9FA; padding: 40px; border-radius: 8px; box-shadow: inset 0 0 0 1px var(--border-color);">
                <div class="hero-subtitle" style="text-align: center; margin-bottom: 30px;">WHY CHOOSE EVOLVE CLOTHING CO.?</div>
                <div class="why-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                    <div class="why-item" style="background: var(--white); padding: 25px 15px; text-align: center; border-radius: 6px; box-shadow: 0 2px 10px rgba(0,0,0,0.02);">
                        <i class="fa-solid fa-medal text-navy" style="font-size: 1.8rem; margin-bottom: 15px;"></i>
                        <h4 style="font-size: 0.8rem; margin:0; color:var(--navy);">Premium Quality<br>Fabrics</h4>
                    </div>
                    <div class="why-item" style="background: var(--white); padding: 25px 15px; text-align: center; border-radius: 6px; box-shadow: 0 2px 10px rgba(0,0,0,0.02);">
                        <i class="fa-solid fa-stamp text-navy" style="font-size: 1.8rem; margin-bottom: 15px;"></i>
                        <h4 style="font-size: 0.8rem; margin:0; color:var(--navy);">Custom Branding<br>& Labeling</h4>
                    </div>
                    <div class="why-item" style="background: var(--white); padding: 25px 15px; text-align: center; border-radius: 6px; box-shadow: 0 2px 10px rgba(0,0,0,0.02);">
                        <i class="fa-solid fa-boxes-stacked text-navy" style="font-size: 1.8rem; margin-bottom: 15px;"></i>
                        <h4 style="font-size: 0.8rem; margin:0; color:var(--navy);">Bulk Production<br>Support</h4>
                    </div>
                    <div class="why-item" style="background: var(--white); padding: 25px 15px; text-align: center; border-radius: 6px; box-shadow: 0 2px 10px rgba(0,0,0,0.02);">
                        <i class="fa-solid fa-scissors text-navy" style="font-size: 1.8rem; margin-bottom: 15px;"></i>
                        <h4 style="font-size: 0.8rem; margin:0; color:var(--navy);">Sampling &<br>Prototyping</h4>
                    </div>
                    <div class="why-item" style="background: var(--white); padding: 25px 15px; text-align: center; border-radius: 6px; box-shadow: 0 2px 10px rgba(0,0,0,0.02);">
                        <i class="fa-solid fa-leaf text-navy" style="font-size: 1.8rem; margin-bottom: 15px;"></i>
                        <h4 style="font-size: 0.8rem; margin:0; color:var(--navy);">Ethical & Sustainable<br>Sourcing</h4>
                    </div>
                    <div class="why-item" style="background: var(--white); padding: 25px 15px; text-align: center; border-radius: 6px; box-shadow: 0 2px 10px rgba(0,0,0,0.02);">
                        <i class="fa-solid fa-check-double text-navy" style="font-size: 1.8rem; margin-bottom: 15px;"></i>
                        <h4 style="font-size: 0.8rem; margin:0; color:var(--navy);">Strict Quality<br>Control</h4>
                    </div>
                </div>
            </div>
            
            <!-- Journey -->
            <div class="journey-half" style="flex: 1.2; background: var(--white); padding: 40px; border-radius: 8px; position: relative;">
                <div class="hero-subtitle" style="text-align: center; margin-bottom: 60px;">OUR MANUFACTURING JOURNEY</div>
                
                <div class="journey-timeline" style="display: flex; justify-content: space-between; position: relative;">
                    <div style="position: absolute; top: 12px; left: 30px; right: 30px; height: 1px; background: var(--navy); z-index: 0;"></div>
                    
                    <div class="j-step" style="position: relative; z-index: 1; text-align: center; width: 14%;">
                        <div class="j-dot" style="width:24px; height:24px; background:var(--navy); color:var(--white); border-radius:50%; font-size:0.6rem; display:flex; align-items:center; justify-content:center; margin: 0 auto 15px;">01</div>
                        <h4 style="font-size:0.8rem; margin-bottom:5px;">Consultation</h4>
                        <p style="font-size:0.65rem; line-height:1.4; margin:0;">Understanding your requirements and product goals.</p>
                    </div>
                    <div class="j-step" style="position: relative; z-index: 1; text-align: center; width: 14%;">
                        <div class="j-dot" style="width:24px; height:24px; background:var(--navy); color:var(--white); border-radius:50%; font-size:0.6rem; display:flex; align-items:center; justify-content:center; margin: 0 auto 15px;">02</div>
                        <h4 style="font-size:0.8rem; margin-bottom:5px;">Design & Sampling</h4>
                        <p style="font-size:0.65rem; line-height:1.4; margin:0;">Crafting samples with precision and client approval.</p>
                    </div>
                    <div class="j-step" style="position: relative; z-index: 1; text-align: center; width: 14%;">
                        <div class="j-dot" style="width:24px; height:24px; background:var(--navy); color:var(--white); border-radius:50%; font-size:0.6rem; display:flex; align-items:center; justify-content:center; margin: 0 auto 15px;">03</div>
                        <h4 style="font-size:0.8rem; margin-bottom:5px;">Fabric Sourcing</h4>
                        <p style="font-size:0.65rem; line-height:1.4; margin:0;">Selecting premium fabrics with quality assurance.</p>
                    </div>
                    <div class="j-step" style="position: relative; z-index: 1; text-align: center; width: 14%;">
                        <div class="j-dot" style="width:24px; height:24px; background:var(--navy); color:var(--white); border-radius:50%; font-size:0.6rem; display:flex; align-items:center; justify-content:center; margin: 0 auto 15px;">04</div>
                        <h4 style="font-size:0.8rem; margin-bottom:5px;">Production</h4>
                        <p style="font-size:0.65rem; line-height:1.4; margin:0;">Efficient manufacturing with skilled craftsmanship.</p>
                    </div>
                    <div class="j-step" style="position: relative; z-index: 1; text-align: center; width: 14%;">
                        <div class="j-dot" style="width:24px; height:24px; background:var(--navy); color:var(--white); border-radius:50%; font-size:0.6rem; display:flex; align-items:center; justify-content:center; margin: 0 auto 15px;">05</div>
                        <h4 style="font-size:0.8rem; margin-bottom:5px;">Quality Check</h4>
                        <p style="font-size:0.65rem; line-height:1.4; margin:0;">Rigorous inspections to ensure flawless finishing.</p>
                    </div>
                    <div class="j-step" style="position: relative; z-index: 1; text-align: center; width: 14%;">
                        <div class="j-dot" style="width:24px; height:24px; background:var(--navy); color:var(--white); border-radius:50%; font-size:0.6rem; display:flex; align-items:center; justify-content:center; margin: 0 auto 15px;">06</div>
                        <h4 style="font-size:0.8rem; margin-bottom:5px;">Packaging & Delivery</h4>
                        <p style="font-size:0.65rem; line-height:1.4; margin:0;">Timely delivery with careful packaging and support.</p>
                    </div>
                </div>
                <div style="margin-top: 40px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/manufacturing_floor_1779783507422.png" alt="Manufacturing Floor" style="width: 100%; height: 280px; object-fit: cover; border-radius: 8px;">
                </div>

            </div>
        </div>
    </section>

    <!-- Team Strength -->
    <section class="team-strength" style="padding: 100px 0; background: var(--white);">
        <div class="container" style="display: flex; gap: 50px; align-items: center;">
            <div class="ts-content" style="flex: 1;">
                <div class="hero-subtitle">WHY PEOPLE, OUR STRENGTH</div>
                <h2 style="font-size: 2.2rem; line-height: 1.2; margin-bottom: 25px;">Experienced. Passionate. Dedicated.</h2>
                <p style="margin-bottom: 30px;">Our team of designers, fabric specialists, pattern makers, and production experts work together to bring your ideas to life. With deep industry knowledge and a commitment to excellence, we ensure every garment we produce reflects precision and professionalism.</p>
                <a href="#team" class="btn btn-navy">MEET OUR TEAM <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="ts-images" style="flex: 1.5; display: flex; gap: 15px;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/team_working_1_1779782624655.png" alt="Team reviewing fabric" style="flex: 1.2; border-radius: 8px; object-fit: cover; height: 350px;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/team_working_2_1779782639033.png" alt="Designer inspecting fabric" style="flex: 0.8; border-radius: 8px; object-fit: cover; height: 350px;">
            </div>
        </div>
    </section>

    <!-- Industries & Testimonial Split -->
    <section class="ind-test-split" style="padding: 80px 0; background: var(--bg-cream);">
        <div class="container" style="display: flex; gap: 40px;">
            <!-- Industries -->
            <div class="ind-half" style="flex: 1.2; background: var(--white); padding: 40px; border-radius: 8px;">
                <div class="hero-subtitle" style="margin-bottom: 30px;">INDUSTRIES WE SERVE</div>
                <div class="industry-grid" style="grid-template-columns: repeat(4, 1fr);">
                    <div class="ind-item"><i class="fa-solid fa-school"></i><span>Schools &<br>Colleges</span></div>
                    <div class="ind-item"><i class="fa-solid fa-building"></i><span>Corporate<br>Companies</span></div>
                    <div class="ind-item"><i class="fa-solid fa-shirt"></i><span>Retail Clothing<br>Brands</span></div>
                    <div class="ind-item"><i class="fa-solid fa-child-reaching"></i><span>Kidswear<br>Brands</span></div>
                    <div class="ind-item"><i class="fa-solid fa-hotel"></i><span>Hospitality</span></div>
                    <div class="ind-item"><i class="fa-solid fa-house-medical"></i><span>Healthcare</span></div>
                    <div class="ind-item"><i class="fa-solid fa-calendar-check"></i><span>Events</span></div>
                    <div class="ind-item"><i class="fa-solid fa-cart-shopping"></i><span>E-commerce<br>Brands</span></div>
                </div>
            </div>
            
            <!-- Testimonial -->
            <div class="test-half" style="flex: 1; background: var(--white); padding: 40px; border-radius: 8px;">
                <div class="hero-subtitle" style="margin-bottom: 20px;">WHAT OUR CLIENTS SAY</div>
                <div class="quote-icon" style="font-size: 2.5rem; color: var(--gold); margin-bottom: 15px;"><i class="fa-solid fa-quote-left"></i></div>
                
                <div class="testimonial-slider" style="position: relative; overflow: hidden;">
                    <div class="testi-slide active-slide" style="display: block;">
                        <p style="font-size: 1.1rem; line-height: 1.6; color: var(--navy); margin-bottom: 30px;">"Evolve Clothing Co. has been an exceptional manufacturing partner. Their quality, communication, and on-time delivery help us keep our brand promise every single time."</p>
                        <div class="testi-author" style="display:flex; align-items:center; gap:15px;">
                            <div style="width:50px;height:50px;border-radius:50%;background:#0F172A;color:white;display:flex;align-items:center;justify-content:center;font-size:1.5rem;"><i class="fa-solid fa-user"></i></div>
                            <div>
                                <h4 style="margin:0 0 5px 0; font-size:0.95rem;">Ayesha Khan</h4>
                                <span style="font-size:0.75rem; color:var(--text-light);">Founder, Urban Threads</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testi-slide" style="display: none;">
                        <p style="font-size: 1.1rem; line-height: 1.6; color: var(--navy); margin-bottom: 30px;">"We've sourced our corporate uniforms from Evolve for over 5 years. The consistency in fabric quality and their attention to our custom branding requirements is unmatched."</p>
                        <div class="testi-author" style="display:flex; align-items:center; gap:15px;">
                            <div style="width:50px;height:50px;border-radius:50%;background:#C99A4A;color:white;display:flex;align-items:center;justify-content:center;font-size:1.5rem;"><i class="fa-solid fa-user-tie"></i></div>
                            <div>
                                <h4 style="margin:0 0 5px 0; font-size:0.95rem;">David Chen</h4>
                                <span style="font-size:0.75rem; color:var(--text-light);">Procurement Director, TechCorp</span>
                            </div>
                        </div>
                    </div>

                    <div class="testi-slide" style="display: none;">
                        <p style="font-size: 1.1rem; line-height: 1.6; color: var(--navy); margin-bottom: 30px;">"Starting a kidswear line was daunting, but Evolve's sampling team walked us through every step. The final bulk production exceeded our expectations in every way."</p>
                        <div class="testi-author" style="display:flex; align-items:center; gap:15px;">
                            <div style="width:50px;height:50px;border-radius:50%;background:#0F172A;color:white;display:flex;align-items:center;justify-content:center;font-size:1.5rem;"><i class="fa-solid fa-user"></i></div>
                            <div>
                                <h4 style="margin:0 0 5px 0; font-size:0.95rem;">Sarah Mitchell</h4>
                                <span style="font-size:0.75rem; color:var(--text-light);">CEO, Little Sprouts Apparel</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div style="display:flex; align-items:center; justify-content:flex-end; margin-top: -40px; position: relative; z-index: 10;">
                    <div class="testi-nav" style="display:flex; gap:10px;">
                        <button id="testi-prev" style="width:32px; height:32px; background:var(--white); border:1px solid var(--border-color); display:flex; align-items:center; justify-content:center; border-radius:4px; cursor:pointer; transition:all 0.3s;"><i class="fa-solid fa-chevron-left"></i></button>
                        <button id="testi-next" style="width:32px; height:32px; background:var(--white); border:1px solid var(--border-color); display:flex; align-items:center; justify-content:center; border-radius:4px; cursor:pointer; transition:all 0.3s;"><i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                </div>

        </div>
    </section>

    <!-- Trusted By -->
    

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