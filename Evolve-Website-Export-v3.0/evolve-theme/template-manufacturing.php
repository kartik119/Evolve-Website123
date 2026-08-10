<?php
/* Template Name: Manufacturing */
get_header();
?>

<!-- Hero Section -->
    <section class="section-padding" style="background: var(--bg-light); overflow: hidden;">
        <div class="container" style="display: flex; gap: 60px; align-items: center;">
            <div style="flex: 1;">
                <p style="color: var(--gold); font-size: 0.85rem; font-weight: 600; letter-spacing: 1.5px; margin-bottom: 15px; text-transform: uppercase;">Research & Manufacturing</p>
                <h1 style="font-size: 3.2rem; margin-bottom: 25px; line-height: 1.1; color: var(--navy);">Precision in Every Stitch.<br><span style="color: var(--gold);">Excellence in Every Shirt.</span></h1>
                <p style="color: var(--text-light); margin-bottom: 35px; font-size: 1.05rem; line-height: 1.6;">Delivering superior construction, comfort, and finish through globally accepted standards. Our rigorous process, skilled craftsmanship, and modern technology deliver constant quality you can rely on.</p>
                
                <div style="display: flex; gap: 20px; margin-bottom: 40px;">
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary" style="padding: 15px 30px; font-weight: 600;">REQUEST A QUOTE <i class="fa-solid fa-arrow-right" style="margin-left:8px;"></i></a>
                    <a href="<?php echo esc_url( home_url( '/manufacturing' ) ); ?>" class="btn btn-outline" style="padding: 15px 30px; font-weight: 600; border: 2px solid var(--navy); color: var(--navy); border-radius: 4px;">EXPLORE SPECIFICATIONS <i class="fa-solid fa-arrow-down" style="margin-left:8px;"></i></a>
                </div>

                <div class="trust-indicators" style="display: flex; gap: 40px; border-top: 1px solid var(--border-color); padding-top: 30px;">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <i class="fa-solid fa-check-double text-gold" style="font-size: 1.5rem;"></i>
                        <div><strong style="display:block; font-size: 1.2rem; margin:0;">100%</strong><span style="font-size: 0.75rem; color: var(--text-light);">Quality Checked</span></div>
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <i class="fa-solid fa-industry text-gold" style="font-size: 1.5rem;"></i>
                        <div><strong style="display:block; font-size: 1.2rem; margin:0;">Global</strong><span style="font-size: 0.75rem; color: var(--text-light);">Standards</span></div>
                    </div>
                </div>
            </div>
            <div style="flex: 1.1; position: relative; width: 100%;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/mfg_hero_sketch_display.jpg" alt="Research & Manufacturing Excellence" style="width: 100%; height: 500px; object-fit: cover; border-radius: 12px; box-shadow: 0 20px 40px rgba(0,0,0,0.1); display: block;">
                <div style="position: absolute; bottom: 30px; left: 20px; background: var(--navy); color: var(--white); padding: 18px 25px; border-radius: 8px; text-align: center; border: 2px solid var(--gold); box-shadow: 0 10px 30px rgba(0,0,0,0.2); z-index: 2;">
                    <i class="fa-solid fa-gem text-gold" style="font-size: 1.3rem; margin-bottom: 5px;"></i>
                    <div style="font-size: 0.65rem; font-weight: 600; letter-spacing: 1px;">CRAFTED WITH</div>
                    <div style="font-size: 1.3rem; font-weight: 700; margin-bottom: 2px;">PRECISION</div>
                </div>
                <div style="position: absolute; top: 30px; right: 20px; background: var(--white); color: var(--navy); padding: 14px 22px; border-radius: 8px; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.15); z-index: 2;">
                    <i class="fa-solid fa-temperature-arrow-up text-gold" style="font-size: 1.1rem; margin-bottom: 3px;"></i>
                    <div style="font-size: 0.75rem; font-weight: 600;">FLAWLESS FINISH</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Manufacturing Specifications -->
    <section class="section-padding" style="background: var(--bg-cream);">
        <div class="container" style="display: flex; gap: 60px; align-items: center; justify-content: space-between;">
            <div style="flex: 1;">
                <p style="color: var(--gold); font-size: 0.75rem; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 10px;">OUR COMMITMENT</p>
                <h2 style="font-size: 2.5rem; font-family: var(--font-serif); font-weight: 400; color: var(--navy); margin: 0;">Manufacturing Specifications</h2>
            </div>
            <div style="flex: 1;">
                <p style="color: var(--text-light); font-size: 0.95rem; line-height: 1.6; margin: 0;">
                    We follow internationally accepted garment construction standards to ensure durability, comfort, and an exceptional finish in every shirt we produce. Our rigorous process, skilled craftsmanship, and modern technology deliver constant quality you can rely on.
                </p>
            </div>
        </div>
    </section>

    <!-- Stitch Types -->
    <section class="section-padding" style="background: var(--bg-cream); padding-top: 0;">
        <div class="container">
            <div style="text-align: center; margin-bottom: 40px;">
                <div class="mfg-line-title">
                    <h2>Stitch Types</h2>
                </div>
                <p style="font-size: 0.85rem; color: var(--text-light);">We employ various stitch types based on garment requirements, fabric type, and stress areas.</p>
            </div>

            <div class="mfg-grid-5">
                <!-- 1 -->
                <div class="mfg-card">
                    <div class="mfg-card-img-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/single_needle_stitch_user.jpg" alt="Single Needle Lock Stitch">
                        <div class="mfg-card-icon"><i class="fa-solid fa-scissors"></i></div>
                    </div>
                    <div class="mfg-card-content">
                        <h5>Single Needle Lock Stitch (S/N)</h5>
                        <ul>
                            <li>Used for main seam construction</li>
                            <li>Ideal for seams, shoulder seams, sleeves, etc.</li>
                            <li>Ensures clean, strong, and neat seam finish</li>
                            <li>12-14 SPI for formal shirts</li>
                        </ul>
                    </div>
                </div>
                <!-- 2 -->
                <div class="mfg-card">
                    <div class="mfg-card-img-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/double_needle_stitch_user.jpg" alt="Double Needle Lock Stitch">
                        <div class="mfg-card-icon"><i class="fa-solid fa-scissors"></i></div>
                    </div>
                    <div class="mfg-card-content">
                        <h5>Double Needle Lock Stitch</h5>
                        <ul>
                            <li>Used for yokes, center plackets and decorative topstitching</li>
                            <li>Adds reinforcement and a symmetrical finish.</li>
                        </ul>
                    </div>
                </div>
                <!-- 3 -->
                <div class="mfg-card">
                    <div class="mfg-card-img-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/overlock_stitch_user.jpg" alt="Overlock Stitch (3-thread & 5-thread)">
                        <div class="mfg-card-icon"><i class="fa-solid fa-bars"></i></div>
                    </div>
                    <div class="mfg-card-content">
                        <h5>Overlock Stitch (3-thread & 5-thread)</h5>
                        <ul>
                            <li>Used for raw edge finishing to prevent raveling</li>
                            <li>Neatly regulated seams and interior fabric edges</li>
                        </ul>
                    </div>
                </div>
                <!-- 4 -->
                <div class="mfg-card">
                    <div class="mfg-card-img-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/flatlock_stitch_user.jpg" alt="Flatlock Stitch">
                        <div class="mfg-card-icon"><i class="fa-solid fa-equals"></i></div>
                    </div>
                    <div class="mfg-card-content">
                        <h5>Flatlock Stitch</h5>
                        <ul>
                            <li>Used in knit or stretch fabrics</li>
                            <li>Ideal for T-shirt flatlets, active flat seams and flat-felling</li>
                        </ul>
                    </div>
                </div>
                <!-- 5 -->
                <div class="mfg-card">
                    <div class="mfg-card-img-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blind_stitch_user.jpg" alt="Blind Stitch">
                        <div class="mfg-card-icon"><i class="fa-solid fa-ellipsis"></i></div>
                    </div>
                    <div class="mfg-card-content">
                        <h5>Blind Stitch</h5>
                        <ul>
                            <li>Used in premium shirts for a seamless hem appearance</li>
                            <li>Delivers an invisible and elegant finish.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reinforcements & Detailing -->
    <section class="section-padding" style="background: var(--bg-beige);">
        <div class="container mfg-split-reinforce" style="display: flex; gap: 40px;">
            <div style="flex: 1; padding-top: 20px;">
                <h2 style="font-size: 2rem; font-family: var(--font-serif); font-weight: 400; color: var(--navy); margin-bottom: 20px;">Reinforcements<br>& Detailing</h2>
                <p style="font-size: 0.9rem; color: var(--text-light); line-height: 1.6;">
                    Enhancing durability and design with thoughtful reinforcements and premium detailing.
                </p>
            </div>
            <div style="flex: 3;">
                <div class="mfg-grid-3">
                    <div class="mfg-card">
                        <div class="mfg-card-img-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/collars_and_cuffs_user.jpg" alt="Collars and Cuffs">
                            <div class="mfg-card-icon"><i class="fa-solid fa-shirt"></i></div>
                        </div>
                        <div class="mfg-card-content">
                            <h5>Collars and Cuffs</h5>
                            <ul>
                                <li>Secure using high-quality interlinings (woven/non-woven, fusion) that hold shape and enhance finish</li>
                                <li>Optional removable collar stays and buttonfly darts.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mfg-card">
                        <div class="mfg-card-img-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/plackets_user.jpg" alt="Plackets">
                            <div class="mfg-card-icon"><i class="fa-solid fa-layer-group"></i></div>
                        </div>
                        <div class="mfg-card-content">
                            <h5>Plackets</h5>
                            <ul>
                                <li>Reinforced with interlining and double-needle stitching</li>
                                <li>Both fused and stitched plackets styles available.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mfg-card">
                        <div class="mfg-card-img-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/buttons_and_buttonholes_user.jpg" alt="Buttons & Buttonholes">
                            <div class="mfg-card-icon"><i class="fa-solid fa-circle-dot"></i></div>
                        </div>
                        <div class="mfg-card-content">
                            <h5>Buttons & Buttonholes</h5>
                            <ul>
                                <li>Lock stitch or cross stitch button attachment</li>
                                <li>Cleanly finished buttonholes with bar-tack on edges</li>
                                <li>Matched thread, fabric, or custom-branded buttons as per order.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Finishing -->
    <section class="section-padding" style="background: var(--bg-cream);">
        <div class="container">
            <div style="text-align: center; margin-bottom: 40px;">
                <div class="mfg-line-title">
                    <h2>Finishing</h2>
                </div>
                <p style="font-size: 0.85rem; color: var(--text-light);">Careful finishing for a flawless final product.</p>
            </div>

            <div class="mfg-grid-3">
                <div class="mfg-h-card">
                    <div class="mfg-h-card-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/top_pressing_user.jpg" alt="Top Pressing">
                        <div class="mfg-h-card-icon"><i class="fa-solid fa-temperature-arrow-up"></i></div>
                    </div>
                    <div class="mfg-h-card-content">
                        <h5>Top Pressing</h5>
                        <ul>
                            <li>Stepped and vacuum press to obtain smooth wrinkle-free finishing</li>
                        </ul>
                    </div>
                </div>
                <div class="mfg-h-card">
                    <div class="mfg-h-card-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/thread_trimming_qc_user.jpg" alt="Thread Trimming & Final QC">
                        <div class="mfg-h-card-icon"><i class="fa-solid fa-scissors"></i></div>
                    </div>
                    <div class="mfg-h-card-content">
                        <h5>Thread Trimming & Final QC</h5>
                        <ul>
                            <li>Each shirt is trimmed, inspected, and measured for quality assurance</li>
                        </ul>
                    </div>
                </div>
                <div class="mfg-h-card">
                    <div class="mfg-h-card-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/packaging_user.jpg" alt="Packaging">
                        <div class="mfg-h-card-icon"><i class="fa-solid fa-box-open"></i></div>
                    </div>
                    <div class="mfg-h-card-content">
                        <h5>Packaging</h5>
                        <ul>
                            <li>Folding board, pins, tissue paper, size tag, collar stays, branded bag, poly bag, and carton packing as per buyer requirements.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <div class="mfg-contact-wrap">
        <div class="mfg-contact-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/mfg_contact.jpg" alt="Factory Floor">
        </div>
        <div class="mfg-contact-form-area">
            <p style="color: var(--gold); font-size: 0.75rem; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 10px;">CONTACT US</p>
            <h2 style="font-size: 2.5rem; font-family: var(--font-serif); font-weight: 400; margin: 0 0 30px 0; color: white;">Have Questions?<br>Get in Touch!</h2>
            
            <form action="#" method="POST">
                <div class="mfg-form-grid">
                    <input type="text" class="mfg-form-input" placeholder="First Name">
                    <input type="text" class="mfg-form-input" placeholder="Last Name">
                </div>
                <div class="mfg-form-grid">
                    <input type="email" class="mfg-form-input" placeholder="Email Address">
                    <input type="tel" class="mfg-form-input" placeholder="Phone Number">
                </div>
                <input type="text" class="mfg-form-input" placeholder="Message" style="margin-bottom: 20px;">
                <button type="submit" class="mfg-form-btn"><i class="fa-regular fa-paper-plane"></i> Send Message</button>
            </form>
        </div>
        <div class="mfg-contact-features">
            <div class="mfg-feature-item">
                <i class="fa-solid fa-users-viewfinder"></i>
                <div>
                    <h6>Expert Guidance</h6>
                    <p>Get advice from our manufacturing specialists.</p>
                </div>
            </div>
            <div class="mfg-feature-item">
                <i class="fa-solid fa-gear"></i>
                <div>
                    <h6>Custom Solutions</h6>
                    <p>Tailored to your brand and requirements.</p>
                </div>
            </div>
            <div class="mfg-feature-item">
                <i class="fa-solid fa-shield-check"></i>
                <div>
                    <h6>Reliable Quality</h6>
                    <p>Consistent, durable, on-time delivery.</p>
                </div>
            </div>
            <div class="mfg-feature-item">
                <i class="fa-solid fa-truck-fast"></i>
                <div>
                    <h6>Timely Delivery</h6>
                    <p>On-time production and global shipping.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

<?php
get_footer();
?>