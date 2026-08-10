<?php
/* Template Name: Quote */
get_header();
?>

<!-- Hero Section -->
    <section class="quote-hero">
        <div class="container">
            <h1>Get a Quote</h1>
            <p>Tell us about your apparel requirements and our team will prepare a tailored quote for your brand, uniforms, kidswear, or bulk manufacturing needs.</p>
            <div style="margin-top: 25px; font-size: 0.9rem; font-weight: 500;">
                <a href="<?php echo esc_url( home_url( '/index' ) ); ?>" style="color: var(--gold);">Home</a> 
                <span style="color: rgba(255,255,255,0.5); margin: 0 10px;"><i class="fa-solid fa-chevron-right" style="font-size: 0.7rem;"></i></span> 
                <span>Get a Quote</span>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="section-padding" style="background: var(--bg-cream);">
        <div class="container quote-split">
            
            <!-- Left: Form Area -->
            <div class="quote-main">
                <h2 style="font-family: var(--font-serif); font-size: 2rem; color: var(--navy); margin-bottom: 30px; font-weight: 400;">Request Your Custom Quote</h2>
                
                <form action="#" method="POST">
                    <div class="quote-form-grid">
                        <input type="text" class="quote-input" placeholder="First Name *">
                        <input type="text" class="quote-input" placeholder="Last Name *">
                    </div>
                    <div class="quote-form-grid">
                        <input type="text" class="quote-input" placeholder="Company / Brand Name *">
                        <input type="text" class="quote-input" placeholder="Quantity *">
                    </div>
                    <div class="quote-form-grid">
                        <input type="email" class="quote-input" placeholder="Email Address *">
                        <input type="tel" class="quote-input" placeholder="Phone Number *">
                    </div>
                    
                    <div class="quote-form-grid">
                        <select class="quote-input text-light">
                            <option value="">Product Category *</option>
                                                        <option value="corporate">Corporate Uniforms</option>
                            <option value="kidswear">Kidswear</option>
                            <option value="white-label">White-label Fashion</option>
                            <option value="other">Other</option>
                        </select>
                        <select class="quote-input text-light">
                            <option value="">Order Quantity *</option>
                            <option value="100-500">100 - 500 pcs</option>
                            <option value="500-1000">500 - 1,000 pcs</option>
                            <option value="1000-5000">1,000 - 5,000 pcs</option>
                            <option value="5000+">5,000+ pcs</option>
                        </select>
                    </div>

                    <div class="quote-form-grid">
                        <select class="quote-input text-light">
                            <option value="">Fabric Preference *</option>
                            <option value="cotton">100% Cotton</option>
                            <option value="blend">Poly-Cotton Blend</option>
                            <option value="sustainable">Sustainable / Organic</option>
                            <option value="unsure">Not sure yet</option>
                        </select>
                        <select class="quote-input text-light">
                            <option value="">Custom Branding / Logo Requirement *</option>
                            <option value="embroidery">Embroidery</option>
                            <option value="print">Screen Printing</option>
                            <option value="both">Both</option>
                            <option value="none">None</option>
                        </select>
                    </div>

                    <div class="quote-form-grid">
                        <select class="quote-input text-light">
                            <option value="">Delivery Location *</option>
                            <option value="na">North America</option>
                            <option value="eu">Europe</option>
                            <option value="asia">Asia</option>
                            <option value="other">Other</option>
                        </select>
                        <select class="quote-input text-light">
                            <option value="">Preferred Timeline *</option>
                            <option value="urgent">Urgent (2-4 Weeks)</option>
                            <option value="standard">Standard (4-8 Weeks)</option>
                            <option value="relaxed">Relaxed (8+ Weeks)</option>
                        </select>
                    </div>

                    <div class="quote-upload">
                        <i class="fa-solid fa-arrow-up-from-bracket"></i>
                        <p style="font-weight: 500; color: var(--navy); margin-bottom: 5px;">Drag & drop files here or <span style="color: var(--gold); text-decoration: underline;">browse</span></p>
                        <p>JPG, PNG, PDF up to 10MB</p>
                    </div>

                    <textarea class="quote-input" rows="4" placeholder="Project Details / Message *" style="margin-bottom: 30px; resize: vertical;"></textarea>

                    <button type="submit" class="btn btn-primary" style="width: 100%; padding: 18px; font-size: 1.1rem; justify-content: center; background: var(--gold);">
                        <i class="fa-regular fa-paper-plane" style="margin-right: 10px;"></i> Submit Quote Request
                    </button>
                </form>
            </div>
            
            <!-- Right: Sidebar -->
            <div class="quote-sidebar">
                <h3 style="font-family: var(--font-serif); font-size: 1.8rem; color: var(--navy); margin-bottom: 30px; font-weight: 400;">Why Request a Quote With Us?</h3>
                <ul class="quote-sb-list">
                    <li>
                        <div class="quote-sb-icon"><i class="fa-solid fa-bullseye"></i></div>
                        <div class="quote-sb-text">
                            <h5>Tailored Pricing</h5>
                            <p>We provide accurate pricing based on your exact specifications and quantity.</p>
                        </div>
                    </li>
                    <li>
                        <div class="quote-sb-icon"><i class="fa-solid fa-user-tie"></i></div>
                        <div class="quote-sb-text">
                            <h5>Expert Guidance</h5>
                            <p>Get professional advice on fabrics, trims, sampling, and production techniques.</p>
                        </div>
                    </li>
                    <li>
                        <div class="quote-sb-icon"><i class="fa-solid fa-clock-rotate-left"></i></div>
                        <div class="quote-sb-text">
                            <h5>Fast & Reliable Response</h5>
                            <p>Our team responds quickly to help you move forward with confidence.</p>
                        </div>
                    </li>
                    <li>
                        <div class="quote-sb-icon"><i class="fa-solid fa-handshake-angle"></i></div>
                        <div class="quote-sb-text">
                            <h5>End-to-End Support</h5>
                            <p>From concept to delivery, we support your brand at every step.</p>
                        </div>
                    </li>
                    <li>
                        <div class="quote-sb-icon"><i class="fa-solid fa-cubes-stacked"></i></div>
                        <div class="quote-sb-text">
                            <h5>Flexible & Scalable</h5>
                            <p>Whether it's a small batch or bulk order, we're built to scale with you.</p>
                        </div>
                    </li>
                </ul>

                <div class="quote-next-box">
                    <i class="fa-solid fa-pen-nib quote-next-box-icon"></i>
                    <h4>What Happens Next?</h4>
                    <ol>
                        <li>We review your requirements</li>
                        <li>Our team may reach out for details</li>
                        <li>You'll receive a tailored quote</li>
                        <li>Approve & start your production journey</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Methods Grid -->
    <section class="section-padding" style="background: var(--bg-cream); padding-top: 0;">
        <div class="container quote-contact-cards">
            <div class="q-contact-card">
                <div class="q-contact-icon"><i class="fa-brands fa-whatsapp"></i></div>
                <div class="q-contact-text">
                    <h6>WhatsApp Us</h6>
                    <p>Chat with our team instantly</p>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Start Chat <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="q-contact-card">
                <div class="q-contact-icon"><i class="fa-solid fa-phone"></i></div>
                <div class="q-contact-text">
                    <h6>Call Us</h6>
                    <p>Speak to our expert</p>
                    <span style="display: block; font-size: 0.8rem; font-weight: 600; color: var(--gold); margin-top: 5px;">+1 (800) 841-2569</span>
                </div>
            </div>
            <div class="q-contact-card">
                <div class="q-contact-icon"><i class="fa-regular fa-envelope"></i></div>
                <div class="q-contact-text">
                    <h6>Email Us</h6>
                    <p>Drop us your requirements</p>
                    <span style="display: block; font-size: 0.8rem; font-weight: 600; color: var(--gold); margin-top: 5px;">info@evolveclothing.com</span>
                </div>
            </div>
            <div class="q-contact-card">
                <div class="q-contact-icon"><i class="fa-regular fa-calendar-check"></i></div>
                <div class="q-contact-text">
                    <h6>Schedule Consultation</h6>
                    <p>Book a time that works for you</p>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Book Now <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Timeline -->
    <section class="section-padding" style="background: var(--bg-cream); padding-top: 20px;">
        <div class="container text-center">
            <h2 style="font-family: var(--font-serif); font-size: 2.2rem; color: var(--navy); margin-bottom: 50px; font-weight: 400;">How Our Quote Process Works</h2>
            
            <div class="quote-timeline">
                <div class="q-timeline-step">
                    <div class="q-step-icon"><i class="fa-solid fa-clipboard-list"></i></div>
                    <div class="q-step-text">
                        <h6>Share Requirements</h6>
                        <p>Fill out the form with your product details and needs.</p>
                    </div>
                </div>
                <div class="q-timeline-step">
                    <div class="q-step-icon"><i class="fa-solid fa-user-doctor"></i></div>
                    <div class="q-step-text">
                        <h6>Review & Consultation</h6>
                        <p>We understand your needs and may reach out for more details.</p>
                    </div>
                </div>
                <div class="q-timeline-step">
                    <div class="q-step-icon"><i class="fa-solid fa-swatchbook"></i></div>
                    <div class="q-step-text">
                        <h6>Sample / Fabric Discussion</h6>
                        <p>We discuss fabrics, trims, sampling and production feasibility.</p>
                    </div>
                </div>
                <div class="q-timeline-step">
                    <div class="q-step-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                    <div class="q-step-text">
                        <h6>Quote Preparation</h6>
                        <p>Receive a detailed, transparent quote tailored to your order.</p>
                    </div>
                </div>
                <div class="q-timeline-step">
                    <div class="q-step-icon"><i class="fa-solid fa-thumbs-up"></i></div>
                    <div class="q-step-text">
                        <h6>Approval & Planning</h6>
                        <p>Approve the quote and we plan your production timeline.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Strip -->
    <section class="quote-stats">
        <div class="container quote-stats-grid">
            <div class="q-stat-item">
                <div class="q-stat-icon"><i class="fa-regular fa-handshake"></i></div>
                <div class="q-stat-text">
                    <h4>18+</h4>
                    <h6>Years Experience</h6>
                    <p>in garment manufacturing</p>
                </div>
            </div>
            <div class="q-stat-item">
                <div class="q-stat-icon"><i class="fa-solid fa-users"></i></div>
                <div class="q-stat-text">
                    <h4>1000+</h4>
                    <h6>Happy Clients</h6>
                    <p>across the globe</p>
                </div>
            </div>
            <div class="q-stat-item">
                <div class="q-stat-icon"><i class="fa-solid fa-shirt"></i></div>
                <div class="q-stat-text">
                    <h4>5000+</h4>
                    <h6>Products Manufactured</h6>
                    <p>with premium quality</p>
                </div>
            </div>
            <div class="q-stat-item">
                <div class="q-stat-icon"><i class="fa-solid fa-shield-check"></i></div>
                <div class="q-stat-text">
                    <h4>98%</h4>
                    <h6>Client Satisfaction</h6>
                    <p>trusted by global brands</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pre-Footer CTA -->
    <section class="section-padding" style="background: var(--navy);">
        <div class="container" style="display: flex; align-items: center; justify-content: space-between;">
            <div style="display: flex; align-items: center; gap: 30px;">
                <i class="fa-solid fa-pen-nib text-gold" style="font-size: 4rem;"></i>
                <div>
                    <h2 style="font-size: 2rem; color: var(--white); font-family: var(--font-serif); margin-bottom: 10px; font-weight: 400;">Ready to bring your apparel ideas to life?</h2>
                    <p style="color: rgba(255,255,255,0.7); margin: 0;">Let's create high-quality, custom garments that represent your brand perfectly.</p>
                </div>
            </div>
            <div style="display: flex; gap: 20px;">
                <a href="<?php echo esc_url( home_url( '/quote' ) ); ?>" class="btn btn-primary" style="padding: 15px 30px; font-size: 1.1rem;">Request a Quote <i class="fa-solid fa-arrow-right" style="margin-left: 10px;"></i></a>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-outline" style="padding: 15px 30px; font-size: 1.1rem; border-color: rgba(255,255,255,0.2); color: var(--white);">
                    <i class="fa-brands fa-whatsapp"></i> WhatsApp Us
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->

<?php
get_footer();
?>