<?php
/* Template Name: Contact */
get_header();
?>

<!-- Hero Banner -->
    <section class="contact-hero">
        <div class="container">
            <h1>Contact Us</h1>
            <div class="breadcrumb">
                <a href="<?php echo esc_url( home_url( '/index' ) ); ?>">Home</a> <i class="fa-solid fa-chevron-right"></i> Contact Us
            </div>
        </div>
    </section>

    <!-- Main Contact Section -->
    <section class="section-padding" style="background: white;">
        <div class="container contact-split">
            <div class="contact-left">
                <p style="color: var(--gold); font-size: 0.75rem; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 10px;">GET IN TOUCH</p>
                <h2 style="font-size: 2.5rem; font-family: var(--font-serif); font-weight: 400; color: var(--navy); margin: 0 0 20px 0; line-height: 1.2;">We'd Love to Hear<br>From You</h2>
                <div style="width: 50px; height: 2px; background: var(--gold); margin-bottom: 25px;"></div>
                <p style="font-size: 0.95rem; color: var(--text-light); line-height: 1.6; margin-bottom: 40px; max-width: 400px;">
                    Have a question, a project in mind, or need more information about our services? Reach out to us and our team will get back to you as soon as possible.
                </p>

                <div class="contact-info-list">
                    <div class="contact-info-item">
                        <div class="contact-icon"><i class="fa-solid fa-phone-volume"></i></div>
                        <div class="contact-info-text">
                            <h5>Phone</h5>
                            <p>+1 (800) 841-2569</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-icon"><i class="fa-regular fa-envelope"></i></div>
                        <div class="contact-info-text">
                            <h5>Email</h5>
                            <p>info@evolveclothing.com</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-icon"><i class="fa-solid fa-location-dot"></i></div>
                        <div class="contact-info-text">
                            <h5>Address</h5>
                            <p>Gala no 18, Satyam Industrial Estate,<br>Subhash Road, Jogeshwari East,<br>Mumbai - 400060, India</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-right">
                <div class="contact-form-card">
                    <h3>Send Us a Message</h3>
                    <form action="#" method="POST">
                        <div class="contact-form-grid">
                            <input type="text" class="contact-input" placeholder="First Name">
                            <input type="text" class="contact-input" placeholder="Last Name">
                        </div>
                        <input type="email" class="contact-input" placeholder="Email Address" style="margin-bottom: 20px;">
                        <input type="tel" class="contact-input" placeholder="Phone Number" style="margin-bottom: 20px;">
                        <textarea class="contact-textarea" placeholder="Your Message"></textarea>
                        <button type="submit" class="contact-submit"><i class="fa-regular fa-paper-plane"></i> Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Grid -->
    <section class="section-padding" style="background: white; padding-top: 0;">
        <div class="container">
            <div class="contact-features">
                <div class="contact-grid-4">
                    <div class="contact-feature-item">
                        <div class="contact-feature-icon"><i class="fa-regular fa-clock"></i></div>
                        <h6>Business Hours</h6>
                        <p>Monday - Friday<br>8:00 AM - 6:00 PM (CT)</p>
                    </div>
                    <div class="contact-feature-item">
                        <div class="contact-feature-icon"><i class="fa-solid fa-award"></i></div>
                        <h6>Quick Response</h6>
                        <p>We aim to respond to all<br>inquiries within 24 hours.</p>
                    </div>
                    <div class="contact-feature-item">
                        <div class="contact-feature-icon"><i class="fa-regular fa-handshake"></i></div>
                        <h6>Reliable Support</h6>
                        <p>Our team is here to help<br>you at every step.</p>
                    </div>
                    <div class="contact-feature-item">
                        <div class="contact-feature-icon"><i class="fa-solid fa-globe"></i></div>
                        <h6>Global Service</h6>
                        <p>Proudly serving clients<br>across the globe.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
        <!-- Map Section -->
    <section class="contact-map-section">
        <iframe src="https://maps.google.com/maps?q=Satyam+Industrial+Estate,+Subhash+Road,+Jogeshwari+East,+Mumbai+-+400060&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0; position: absolute; top: 0; left: 0; filter: grayscale(100%) contrast(1.1) opacity(0.7);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="contact-map-card" style="box-sizing: border-box; z-index: 2;">
            <h4>Find Us Here</h4>
            <p><strong>Evolve Clothing Company</strong><br>Gala no 18, Satyam Industrial Estate,<br>Subhash Road, Jogeshwari East,<br>Mumbai - 400060, India</p>
            <a href="https://maps.google.com/?q=Evolve+Clothing+Company,+Gala+no+18,+Satyam+Industrial+Estate,+Subhash+Road,+Jogeshwari+East,+Mumbai+-+400060" target="_blank" rel="noopener" class="btn btn-navy" style="width: 100%; box-sizing: border-box; justify-content: center; text-align: center;">GET DIRECTIONS <i class="fa-solid fa-arrow-up-right-from-square" style="margin-left: 6px;"></i></a>
        </div>
    </section>

    <!-- Pre Footer CTA Banner -->
    <section class="contact-cta">
        <div class="container contact-cta-inner">
            <div class="contact-cta-icon">
                <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 22h14a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v4"></path>
                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                    <circle cx="10" cy="14" r="5"></circle>
                    <path d="m14 10-6 8"></path>
                </svg>
            </div>
            <div class="contact-cta-text">
                <h2>Let's Create Something Amazing Together</h2>
                <p>We're excited to hear about your ideas and help bring them to life.</p>
            </div>
            <div class="contact-cta-btn">
                <a href="#" class="btn" style="border: 1px solid white; color: white; padding: 14px 30px;">Start a Project <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- Footer -->

<?php
get_footer();
?>