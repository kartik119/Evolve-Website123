<?php
/* Template Name: Services */
get_header();
?>

<main class="services-page">

    <!-- Hero Section -->
    <section class="services-hero" style="padding: 80px 0 60px 0; background: var(--bg-cream);">
        <div class="container" style="display: flex; gap: 50px; align-items: center;">
            <div class="hero-content" style="flex: 1;">
                <h5 style="color: var(--gold); text-transform: uppercase; letter-spacing: 2px; font-size: 0.9rem; margin-bottom: 15px;">Our Services</h5>
                <h1 style="font-size: 3.2rem; color: var(--navy); margin-bottom: 25px; line-height: 1.1;">End-to-End Clothing Manufacturing Solutions</h1>
                <p style="font-size: 1.1rem; color: var(--text-color); margin-bottom: 35px; line-height: 1.6;">Evolve Clothing Co. is your trusted garment manufacturing partner, delivering premium quality apparel for brands, corporates, schools, institutions, and private-label businesses — from concept to creation, with precision and care.</p>
                <div class="hero-buttons" style="display: flex; gap: 20px; margin-bottom: 40px;">
                    <a href="#contact" class="btn btn-primary" style="padding: 15px 30px; font-weight: 600;">REQUEST A QUOTE <i class="fa-solid fa-arrow-right" style="margin-left:8px;"></i></a>
                    <a href="#" class="btn btn-outline" style="padding: 15px 30px; font-weight: 600; border: 2px solid var(--navy); color: var(--navy); border-radius: 4px;">DOWNLOAD CATALOGUE <i class="fa-solid fa-download" style="margin-left:8px;"></i></a>
                </div>
            </div>
            <div class="hero-single-image-services" style="flex: 1.1; width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/services_hero_team.jpg" alt="End-to-End Clothing Manufacturing Solutions" style="width: 100%; height: 480px; object-fit: cover; border-radius: 12px; box-shadow: 0 20px 40px rgba(0,0,0,0.1); display: block;">
            </div>
        </div>

        <div class="container" style="margin-top: 40px; padding-top: 40px; border-top: 1px solid var(--border-color);">
            <div class="trust-indicators" style="display: flex; gap: 30px; justify-content: space-between; flex-wrap: wrap;">
                <div style="display:flex; align-items:center; gap:10px;"><i class="fa-solid fa-medal text-gold" style="font-size: 1.5rem;"></i><div><h4 style="margin:0; font-size: 1.1rem;">18+</h4><span style="font-size:0.75rem;">Years Experience</span></div></div>
                <div style="display:flex; align-items:center; gap:10px;"><i class="fa-solid fa-users text-gold" style="font-size: 1.5rem;"></i><div><h4 style="margin:0; font-size: 1.1rem;">1000+</h4><span style="font-size:0.75rem;">Happy Clients</span></div></div>
                <div style="display:flex; align-items:center; gap:10px;"><i class="fa-solid fa-box-open text-gold" style="font-size: 1.5rem;"></i><div><h4 style="margin:0; font-size: 1.1rem;">5000+</h4><span style="font-size:0.75rem;">Products Manufactured</span></div></div>
                <div style="display:flex; align-items:center; gap:10px;"><i class="fa-solid fa-shield-check text-gold" style="font-size: 1.5rem;"></i><div><h4 style="margin:0; font-size: 1.1rem;">98%</h4><span style="font-size:0.75rem;">Client Satisfaction</span></div></div>
            </div>
        </div>
    </section>

    <!-- Services Grid 8 Cards -->
    <section class="services-grid-section" style="padding: 80px 0; background: var(--white);">
        <div class="container">
            <div class="section-title text-center" style="margin-bottom: 50px;">
                <h5 style="color: var(--navy); display: flex; align-items: center; justify-content: center; gap: 15px; font-size: 0.9rem; letter-spacing: 2px;">
                    <span style="width: 40px; height: 1px; background: var(--border-color);"></span> OUR SERVICES <span style="width: 40px; height: 1px; background: var(--border-color);"></span>
                </h5>
            </div>
            
            <div class="s-grid-8" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 25px;">
                <!-- Card 1 -->
                <div class="s-card" style="border: 1px solid var(--border-color); padding: 30px 20px; border-radius: 8px; text-align: center; transition: all 0.3s; position: relative; overflow: hidden; background: var(--white);">
                    <i class="fa-solid fa-tag text-navy" style="font-size: 2.2rem; margin-bottom: 20px;"></i>
                    <h4 style="font-size: 1.1rem; margin-bottom: 15px;">White-Label<br>Manufacturing</h4>
                    <p style="font-size: 0.85rem; color: var(--text-light); line-height: 1.6; margin-bottom: 20px;">Launch your own brand with premium quality apparel manufactured under your label and packaging.</p>
                    <i class="fa-solid fa-arrow-right text-gold" style="position: absolute; bottom: 20px; right: 20px; font-size: 1.1rem; opacity: 0.6;"></i>
                </div>
                <!-- Card 2 -->
                <div class="s-card" style="border: 1px solid var(--border-color); padding: 30px 20px; border-radius: 8px; text-align: center; transition: all 0.3s; position: relative; overflow: hidden; background: var(--white);">
                    <i class="fa-solid fa-shirt text-navy" style="font-size: 2.2rem; margin-bottom: 20px;"></i>
                    <h4 style="font-size: 1.1rem; margin-bottom: 15px;">Corporate Shirt<br>Manufacturing</h4>
                    <p style="font-size: 0.85rem; color: var(--text-light); line-height: 1.6; margin-bottom: 20px;">Custom shirts for corporates with perfect stitching, fabric options, and professional finishes.</p>
                    <i class="fa-solid fa-arrow-right text-gold" style="position: absolute; bottom: 20px; right: 20px; font-size: 1.1rem; opacity: 0.6;"></i>
                </div>
                <!-- Card 3 -->
                <div class="s-card" style="border: 1px solid var(--border-color); padding: 30px 20px; border-radius: 8px; text-align: center; transition: all 0.3s; position: relative; overflow: hidden; background: var(--white);">
                    <i class="fa-solid fa-child text-navy" style="font-size: 2.2rem; margin-bottom: 20px;"></i>
                    <h4 style="font-size: 1.1rem; margin-bottom: 15px;">Kids Clothing<br>Manufacturing</h4>
                    <p style="font-size: 0.85rem; color: var(--text-light); line-height: 1.6; margin-bottom: 20px;">Soft, durable & comfortable kidswear for schools, brands and retailers with safe fabrics.</p>
                    <i class="fa-solid fa-arrow-right text-gold" style="position: absolute; bottom: 20px; right: 20px; font-size: 1.1rem; opacity: 0.6;"></i>
                </div>
                <!-- Card 4 -->
                <div class="s-card" style="border: 1px solid var(--border-color); padding: 30px 20px; border-radius: 8px; text-align: center; transition: all 0.3s; position: relative; overflow: hidden; background: var(--white);">
                    <i class="fa-solid fa-user-tie text-navy" style="font-size: 2.2rem; margin-bottom: 20px;"></i>
                    <h4 style="font-size: 1.1rem; margin-bottom: 15px;">Uniform<br>Manufacturing</h4>
                    <p style="font-size: 0.85rem; color: var(--text-light); line-height: 1.6; margin-bottom: 20px;">School, corporate, hospitality & healthcare uniforms with custom logos and color options.</p>
                    <i class="fa-solid fa-arrow-right text-gold" style="position: absolute; bottom: 20px; right: 20px; font-size: 1.1rem; opacity: 0.6;"></i>
                </div>
                <!-- Card 5 -->
                <div class="s-card" style="border: 1px solid var(--border-color); padding: 30px 20px; border-radius: 8px; text-align: center; transition: all 0.3s; position: relative; overflow: hidden; background: var(--white);">
                    <i class="fa-solid fa-layer-group text-navy" style="font-size: 2.2rem; margin-bottom: 20px;"></i>
                    <h4 style="font-size: 1.1rem; margin-bottom: 15px;">Fabric<br>Sourcing</h4>
                    <p style="font-size: 0.85rem; color: var(--text-light); line-height: 1.6; margin-bottom: 20px;">Access to premium quality fabrics from trusted mills at competitive prices.</p>
                    <i class="fa-solid fa-arrow-right text-gold" style="position: absolute; bottom: 20px; right: 20px; font-size: 1.1rem; opacity: 0.6;"></i>
                </div>
                <!-- Card 6 -->
                <div class="s-card" style="border: 1px solid var(--border-color); padding: 30px 20px; border-radius: 8px; text-align: center; transition: all 0.3s; position: relative; overflow: hidden; background: var(--white);">
                    <i class="fa-solid fa-pen-ruler text-navy" style="font-size: 2.2rem; margin-bottom: 20px;"></i>
                    <h4 style="font-size: 1.1rem; margin-bottom: 15px;">Design<br>Support</h4>
                    <p style="font-size: 0.85rem; color: var(--text-light); line-height: 1.6; margin-bottom: 20px;">Our experts help bring your ideas to life with trend-driven design and technical assistance.</p>
                    <i class="fa-solid fa-arrow-right text-gold" style="position: absolute; bottom: 20px; right: 20px; font-size: 1.1rem; opacity: 0.6;"></i>
                </div>
                <!-- Card 7 -->
                <div class="s-card" style="border: 1px solid var(--border-color); padding: 30px 20px; border-radius: 8px; text-align: center; transition: all 0.3s; position: relative; overflow: hidden; background: var(--white);">
                    <i class="fa-solid fa-scissors text-navy" style="font-size: 2.2rem; margin-bottom: 20px;"></i>
                    <h4 style="font-size: 1.1rem; margin-bottom: 15px;">Sampling &<br>Prototyping</h4>
                    <p style="font-size: 0.85rem; color: var(--text-light); line-height: 1.6; margin-bottom: 20px;">Perfect fit samples for approval before bulk production to ensure accuracy.</p>
                    <i class="fa-solid fa-arrow-right text-gold" style="position: absolute; bottom: 20px; right: 20px; font-size: 1.1rem; opacity: 0.6;"></i>
                </div>
                <!-- Card 8 -->
                <div class="s-card" style="border: 1px solid var(--border-color); padding: 30px 20px; border-radius: 8px; text-align: center; transition: all 0.3s; position: relative; overflow: hidden; background: var(--white);">
                    <i class="fa-solid fa-check-double text-navy" style="font-size: 2.2rem; margin-bottom: 20px;"></i>
                    <h4 style="font-size: 1.1rem; margin-bottom: 15px;">Bulk Production<br>& Quality Control</h4>
                    <p style="font-size: 0.85rem; color: var(--text-light); line-height: 1.6; margin-bottom: 20px;">Advanced production facilities with strict quality checks at every stage.</p>
                    <i class="fa-solid fa-arrow-right text-gold" style="position: absolute; bottom: 20px; right: 20px; font-size: 1.1rem; opacity: 0.6;"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Services (Staggered) -->
    <section class="featured-services" style="padding: 60px 0; background: var(--white);">
        <div class="container" style="display: flex; flex-direction: column; gap: 80px;">
            
            <!-- Row 1 -->
            <div class="fs-row" style="display: flex; gap: 50px; align-items: center;">
                <div class="fs-img" style="flex: 1;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/white_label_shirts_display.jpg" alt="White-Label Shirt Manufacturing" style="width: 100%; height: 450px; object-fit: cover; border-radius: 12px; box-shadow: 0 15px 35px rgba(0,0,0,0.08);">
                </div>
                <div class="fs-content" style="flex: 1;">
                    <h6 style="color: var(--gold); text-transform: uppercase; letter-spacing: 1px; font-size: 0.8rem; margin-bottom: 10px;">FEATURED SERVICE</h6>
                    <h2 style="font-size: 2.2rem; color: var(--navy); margin-bottom: 20px;">White-Label Manufacturing</h2>
                    <p style="font-size: 1rem; color: var(--text-color); margin-bottom: 25px; line-height: 1.6;">We help you build your brand with premium apparel manufactured to your exact requirements.</p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
                        <li style="margin-bottom: 10px; display: flex; align-items: center; gap: 10px;"><i class="fa-solid fa-circle-check text-gold"></i> Private label manufacturing with custom tags & labels</li>
                        <li style="margin-bottom: 10px; display: flex; align-items: center; gap: 10px;"><i class="fa-solid fa-circle-check text-gold"></i> Branded packaging & polybags</li>
                        <li style="margin-bottom: 10px; display: flex; align-items: center; gap: 10px;"><i class="fa-solid fa-circle-check text-gold"></i> Consistent quality & on-time bulk production</li>
                        <li style="margin-bottom: 10px; display: flex; align-items: center; gap: 10px;"><i class="fa-solid fa-circle-check text-gold"></i> Wide range of fabrics & styles</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-outline" style="padding: 12px 25px; border: 1px solid var(--border-color); color: var(--navy); border-radius: 4px; font-size: 0.9rem; font-weight: 600;">EXPLORE WHITE-LABEL SERVICES <i class="fa-solid fa-arrow-right" style="margin-left:8px;"></i></a>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="fs-row" style="display: flex; gap: 50px; align-items: center; flex-direction: row-reverse;">
                <div class="fs-img" style="flex: 1;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/kids_featured_1779784085703.png" alt="Kids Clothing" style="width: 100%; height: 400px; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="fs-content" style="flex: 1;">
                    <h6 style="color: var(--gold); text-transform: uppercase; letter-spacing: 1px; font-size: 0.8rem; margin-bottom: 10px;">FEATURED SERVICE</h6>
                    <h2 style="font-size: 2.2rem; color: var(--navy); margin-bottom: 20px;">Kids Clothing Manufacturing</h2>
                    <p style="font-size: 1rem; color: var(--text-color); margin-bottom: 25px; line-height: 1.6;">We create comfortable, durable and stylish kidswear that meets global quality and safety standards.</p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
                        <li style="margin-bottom: 10px; display: flex; align-items: center; gap: 10px;"><i class="fa-solid fa-circle-check text-gold"></i> Soft, breathable & skin-friendly fabrics</li>
                        <li style="margin-bottom: 10px; display: flex; align-items: center; gap: 10px;"><i class="fa-solid fa-circle-check text-gold"></i> Age-appropriate designs & vibrant colors</li>
                        <li style="margin-bottom: 10px; display: flex; align-items: center; gap: 10px;"><i class="fa-solid fa-circle-check text-gold"></i> Safe stitching & child-friendly trims</li>
                        <li style="margin-bottom: 10px; display: flex; align-items: center; gap: 10px;"><i class="fa-solid fa-circle-check text-gold"></i> Ideal for schools, retailers & brands</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/kids' ) ); ?>" class="btn btn-outline" style="padding: 12px 25px; border: 1px solid var(--border-color); color: var(--navy); border-radius: 4px; font-size: 0.9rem; font-weight: 600;">EXPLORE KIDSWEAR SERVICES <i class="fa-solid fa-arrow-right" style="margin-left:8px;"></i></a>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="fs-row" style="display: flex; gap: 50px; align-items: center;">
                <div class="fs-img" style="flex: 1;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/uniforms_featured_1779784099366.png" alt="Uniforms" style="width: 100%; height: 400px; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="fs-content" style="flex: 1;">
                    <h6 style="color: var(--gold); text-transform: uppercase; letter-spacing: 1px; font-size: 0.8rem; margin-bottom: 10px;">FEATURED SERVICE</h6>
                    <h2 style="font-size: 2.2rem; color: var(--navy); margin-bottom: 20px;">Uniform Manufacturing</h2>
                    <p style="font-size: 1rem; color: var(--text-color); margin-bottom: 25px; line-height: 1.6;">High-quality uniforms tailored for identity, comfort and durability across every industry.</p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
                        <li style="margin-bottom: 10px; display: flex; align-items: center; gap: 10px;"><i class="fa-solid fa-circle-check text-gold"></i> School, corporate, hospitality & healthcare uniforms</li>
                        <li style="margin-bottom: 10px; display: flex; align-items: center; gap: 10px;"><i class="fa-solid fa-circle-check text-gold"></i> Logo embroidery, screen print & badges</li>
                        <li style="margin-bottom: 10px; display: flex; align-items: center; gap: 10px;"><i class="fa-solid fa-circle-check text-gold"></i> Custom colors, fabrics & style options</li>
                        <li style="margin-bottom: 10px; display: flex; align-items: center; gap: 10px;"><i class="fa-solid fa-circle-check text-gold"></i> Bulk manufacturing with strict quality control</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/uniforms' ) ); ?>" class="btn btn-outline" style="padding: 12px 25px; border: 1px solid var(--border-color); color: var(--navy); border-radius: 4px; font-size: 0.9rem; font-weight: 600;">EXPLORE UNIFORM SERVICES <i class="fa-solid fa-arrow-right" style="margin-left:8px;"></i></a>
                </div>
            </div>

        </div>
    </section>

    <!-- Our Service Process (Timeline) -->
    <section class="service-process" style="padding: 80px 0; background: var(--white); border-top: 1px solid var(--bg-cream);">
        <div class="container">
            <div class="section-title text-center" style="margin-bottom: 60px;">
                <h5 style="color: var(--navy); display: flex; align-items: center; justify-content: center; gap: 15px; font-size: 0.9rem; letter-spacing: 2px;">
                    <span style="width: 40px; height: 1px; background: var(--border-color);"></span> OUR SERVICE PROCESS <span style="width: 40px; height: 1px; background: var(--border-color);"></span>
                </h5>
            </div>

            <div class="process-timeline" style="display: flex; justify-content: space-between; position: relative;">
                <div class="process-line" style="position: absolute; top: 35px; left: 5%; right: 5%; height: 1px; background: var(--navy); z-index: 0;"></div>
                
                <div class="p-step text-center" style="position: relative; z-index: 1; flex: 1;">
                    <div style="width: 70px; height: 70px; margin: 0 auto 15px; border-radius: 50%; background: var(--white); border: 1px solid var(--navy); display: flex; flex-direction: column; align-items: center; justify-content: center; color: var(--navy);">
                        <i class="fa-solid fa-users" style="font-size: 1.2rem; margin-bottom: 3px;"></i>
                    </div>
                    <span style="font-weight: 700; display: block; margin-bottom: 5px;">01<br>Consultation</span>
                    <p style="font-size: 0.8rem; color: var(--text-light);">We understand your<br>requirements in detail.</p>
                </div>

                <div class="p-step text-center" style="position: relative; z-index: 1; flex: 1;">
                    <div style="width: 70px; height: 70px; margin: 0 auto 15px; border-radius: 50%; background: var(--white); border: 1px solid var(--navy); display: flex; flex-direction: column; align-items: center; justify-content: center; color: var(--navy);">
                        <i class="fa-solid fa-layer-group" style="font-size: 1.2rem; margin-bottom: 3px;"></i>
                    </div>
                    <span style="font-weight: 700; display: block; margin-bottom: 5px;">02<br>Fabric Selection</span>
                    <p style="font-size: 0.8rem; color: var(--text-light);">Choose from our curated<br>range of premium fabrics.</p>
                </div>

                <div class="p-step text-center" style="position: relative; z-index: 1; flex: 1;">
                    <div style="width: 70px; height: 70px; margin: 0 auto 15px; border-radius: 50%; background: var(--white); border: 1px solid var(--navy); display: flex; flex-direction: column; align-items: center; justify-content: center; color: var(--navy);">
                        <i class="fa-solid fa-shirt" style="font-size: 1.2rem; margin-bottom: 3px;"></i>
                    </div>
                    <span style="font-weight: 700; display: block; margin-bottom: 5px;">03<br>Design & Sampling</span>
                    <p style="font-size: 0.8rem; color: var(--text-light);">We create samples for<br>your approval.</p>
                </div>

                <div class="p-step text-center" style="position: relative; z-index: 1; flex: 1;">
                    <div style="width: 70px; height: 70px; margin: 0 auto 15px; border-radius: 50%; background: var(--white); border: 1px solid var(--navy); display: flex; flex-direction: column; align-items: center; justify-content: center; color: var(--navy);">
                        <i class="fa-solid fa-certificate" style="font-size: 1.2rem; margin-bottom: 3px;"></i>
                    </div>
                    <span style="font-weight: 700; display: block; margin-bottom: 5px;">04<br>Approval</span>
                    <p style="font-size: 0.8rem; color: var(--text-light);">Once approved, we<br>prepare for production.</p>
                </div>

                <div class="p-step text-center" style="position: relative; z-index: 1; flex: 1;">
                    <div style="width: 70px; height: 70px; margin: 0 auto 15px; border-radius: 50%; background: var(--white); border: 1px solid var(--navy); display: flex; flex-direction: column; align-items: center; justify-content: center; color: var(--navy);">
                        <i class="fa-solid fa-industry" style="font-size: 1.2rem; margin-bottom: 3px;"></i>
                    </div>
                    <span style="font-weight: 700; display: block; margin-bottom: 5px;">05<br>Production</span>
                    <p style="font-size: 0.8rem; color: var(--text-light);">Advanced manufacturing<br>with skilled craftsmanship.</p>
                </div>

                <div class="p-step text-center" style="position: relative; z-index: 1; flex: 1;">
                    <div style="width: 70px; height: 70px; margin: 0 auto 15px; border-radius: 50%; background: var(--white); border: 1px solid var(--navy); display: flex; flex-direction: column; align-items: center; justify-content: center; color: var(--navy);">
                        <i class="fa-solid fa-truck" style="font-size: 1.2rem; margin-bottom: 3px;"></i>
                    </div>
                    <span style="font-weight: 700; display: block; margin-bottom: 5px;">06<br>Quality Check & Delivery</span>
                    <p style="font-size: 0.8rem; color: var(--text-light);">Strict quality control and<br>timely delivery.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Triple Split Data Section -->
    <section class="triple-split" style="padding: 60px 0; background: var(--bg-cream);">
        <div class="container" style="display: grid; grid-template-columns: 1.2fr 1fr 1fr; gap: 30px;">
            
            <!-- Column 1: Why Choose Us -->
            <div class="col-why" style="background: var(--white); padding: 40px; border-radius: 8px;">
                <h6 style="color: var(--gold); text-transform: uppercase; letter-spacing: 1px; font-size: 0.75rem; margin-bottom: 30px;">WHY CHOOSE OUR SERVICES?</h6>
                <div style="display: grid; grid-template-columns: 1fr; gap: 20px;">
                    <div style="display:flex; gap:15px; align-items: flex-start;">
                        <i class="fa-solid fa-medal text-gold" style="font-size: 1.2rem;"></i>
                        <div><h4 style="font-size: 0.9rem; margin-bottom: 5px;">Premium Quality Fabrics</h4><p style="font-size: 0.75rem; color: var(--text-light); margin:0;">Sourced from trusted mills worldwide.</p></div>
                    </div>
                    <div style="display:flex; gap:15px; align-items: flex-start;">
                        <i class="fa-solid fa-tag text-gold" style="font-size: 1.2rem;"></i>
                        <div><h4 style="font-size: 0.9rem; margin-bottom: 5px;">Custom Branding & Labeling</h4><p style="font-size: 0.75rem; color: var(--text-light); margin:0;">Tags, labels, packaging & embroidery.</p></div>
                    </div>
                    <div style="display:flex; gap:15px; align-items: flex-start;">
                        <i class="fa-solid fa-users-gear text-gold" style="font-size: 1.2rem;"></i>
                        <div><h4 style="font-size: 0.9rem; margin-bottom: 5px;">Skilled Manufacturing Team</h4><p style="font-size: 0.75rem; color: var(--text-light); margin:0;">Experienced professionals ensuring perfection.</p></div>
                    </div>
                    <div style="display:flex; gap:15px; align-items: flex-start;">
                        <i class="fa-solid fa-clock text-gold" style="font-size: 1.2rem;"></i>
                        <div><h4 style="font-size: 0.9rem; margin-bottom: 5px;">Timely Delivery</h4><p style="font-size: 0.75rem; color: var(--text-light); margin:0;">On-time production & delivery commitment.</p></div>
                    </div>
                    <div style="display:flex; gap:15px; align-items: flex-start;">
                        <i class="fa-solid fa-boxes-stacked text-gold" style="font-size: 1.2rem;"></i>
                        <div><h4 style="font-size: 0.9rem; margin-bottom: 5px;">Flexible Bulk Orders</h4><p style="font-size: 0.75rem; color: var(--text-light); margin:0;">Low MOQ with scalable production capacity.</p></div>
                    </div>
                    <div style="display:flex; gap:15px; align-items: flex-start;">
                        <i class="fa-solid fa-clipboard-check text-gold" style="font-size: 1.2rem;"></i>
                        <div><h4 style="font-size: 0.9rem; margin-bottom: 5px;">Strict Quality Control</h4><p style="font-size: 0.75rem; color: var(--text-light); margin:0;">Multi-level inspection for consistent quality.</p></div>
                    </div>
                </div>
            </div>

            <!-- Column 2: Stats Grid -->
            <div class="col-stats" style="background: var(--white); padding: 40px; border-radius: 8px; display: grid; grid-template-columns: 1fr 1fr; gap: 30px; align-items: center; justify-content: center;">
                <div class="text-center" style="display:flex; flex-direction:column; align-items:center;">
                    <i class="fa-regular fa-star" style="font-size: 2rem; color: var(--gold); margin-bottom: 10px;"></i>
                    <h3 style="font-size: 1.8rem; margin:0; color: var(--navy);">18+</h3>
                    <span style="font-size: 0.8rem; color: var(--text-light);">Years Experience</span>
                </div>
                <div class="text-center" style="display:flex; flex-direction:column; align-items:center;">
                    <i class="fa-regular fa-user" style="font-size: 2rem; color: var(--gold); margin-bottom: 10px;"></i>
                    <h3 style="font-size: 1.8rem; margin:0; color: var(--navy);">1000+</h3>
                    <span style="font-size: 0.8rem; color: var(--text-light);">Happy Clients</span>
                </div>
                <div class="text-center" style="display:flex; flex-direction:column; align-items:center;">
                    <i class="fa-solid fa-box-open" style="font-size: 2rem; color: var(--gold); margin-bottom: 10px;"></i>
                    <h3 style="font-size: 1.8rem; margin:0; color: var(--navy);">5000+</h3>
                    <span style="font-size: 0.8rem; color: var(--text-light);">Products Manufactured</span>
                </div>
                <div class="text-center" style="display:flex; flex-direction:column; align-items:center;">
                    <i class="fa-regular fa-heart" style="font-size: 2rem; color: var(--gold); margin-bottom: 10px;"></i>
                    <h3 style="font-size: 1.8rem; margin:0; color: var(--navy);">98%</h3>
                    <span style="font-size: 0.8rem; color: var(--text-light);">Client Satisfaction</span>
                </div>
            </div>

            <!-- Column 3: Industries -->
            <div class="col-inds" style="background: var(--white); padding: 40px; border-radius: 8px;">
                <h6 style="color: var(--gold); text-transform: uppercase; letter-spacing: 1px; font-size: 0.75rem; margin-bottom: 30px;">INDUSTRIES WE SERVE</h6>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
                    <div class="text-center">
                        <i class="fa-solid fa-school text-navy" style="font-size: 1.8rem; margin-bottom: 10px;"></i>
                        <h4 style="font-size: 0.85rem; margin: 0;">Schools & Colleges</h4>
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-building text-navy" style="font-size: 1.8rem; margin-bottom: 10px;"></i>
                        <h4 style="font-size: 0.85rem; margin: 0;">Corporate Companies</h4>
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-shirt text-navy" style="font-size: 1.8rem; margin-bottom: 10px;"></i>
                        <h4 style="font-size: 0.85rem; margin: 0;">Retail Clothing Brands</h4>
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-child text-navy" style="font-size: 1.8rem; margin-bottom: 10px;"></i>
                        <h4 style="font-size: 0.85rem; margin: 0;">Kidswear Brands</h4>
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-hotel text-navy" style="font-size: 1.8rem; margin-bottom: 10px;"></i>
                        <h4 style="font-size: 0.85rem; margin: 0;">Hospitality</h4>
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-house-medical text-navy" style="font-size: 1.8rem; margin-bottom: 10px;"></i>
                        <h4 style="font-size: 0.85rem; margin: 0;">Healthcare</h4>
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-calendar-check text-navy" style="font-size: 1.8rem; margin-bottom: 10px;"></i>
                        <h4 style="font-size: 0.85rem; margin: 0;">Events</h4>
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-cart-shopping text-navy" style="font-size: 1.8rem; margin-bottom: 10px;"></i>
                        <h4 style="font-size: 0.85rem; margin: 0;">E-commerce Brands</h4>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" style="padding: 80px 0; background: var(--white);">
        <div class="container">
            <div class="section-title text-center" style="margin-bottom: 50px;">
                <h5 style="color: var(--navy); display: flex; align-items: center; justify-content: center; gap: 15px; font-size: 0.9rem; letter-spacing: 2px;">
                    <span style="width: 40px; height: 1px; background: var(--border-color);"></span> FREQUENTLY ASKED QUESTIONS <span style="width: 40px; height: 1px; background: var(--border-color);"></span>
                </h5>
            </div>
            
            <div class="faq-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
                <div class="faq-col" style="display: flex; flex-direction: column; gap: 15px;">
                    <div class="faq-item" style="border-bottom: 1px solid var(--border-color); padding: 15px 0; display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                        <h4 style="margin:0; font-size: 1rem; color: var(--navy);">What is your minimum order quantity (MOQ)?</h4>
                        <i class="fa-solid fa-plus text-navy"></i>
                    </div>
                    <div class="faq-item" style="border-bottom: 1px solid var(--border-color); padding: 15px 0; display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                        <h4 style="margin:0; font-size: 1rem; color: var(--navy);">Do you provide samples before bulk production?</h4>
                        <i class="fa-solid fa-plus text-navy"></i>
                    </div>
                    <div class="faq-item" style="border-bottom: 1px solid var(--border-color); padding: 15px 0; display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                        <h4 style="margin:0; font-size: 1rem; color: var(--navy);">Can you add our logo or custom branding?</h4>
                        <i class="fa-solid fa-plus text-navy"></i>
                    </div>
                </div>
                <div class="faq-col" style="display: flex; flex-direction: column; gap: 15px;">
                    <div class="faq-item" style="border-bottom: 1px solid var(--border-color); padding: 15px 0; display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                        <h4 style="margin:0; font-size: 1rem; color: var(--navy);">Do you manufacture kidswear for brands and schools?</h4>
                        <i class="fa-solid fa-plus text-navy"></i>
                    </div>
                    <div class="faq-item" style="border-bottom: 1px solid var(--border-color); padding: 15px 0; display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                        <h4 style="margin:0; font-size: 1rem; color: var(--navy);">Can you handle large uniform orders for schools or corporates?</h4>
                        <i class="fa-solid fa-plus text-navy"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

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