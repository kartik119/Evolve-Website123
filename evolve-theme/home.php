<?php
/* Template Name: Blogs */
get_header();
?>

<main class="page-content" style="padding: 100px 0; background-color: var(--bg-cream);">
    <div class="container">
        <div class="section-subtitle">INSIGHTS & GUIDES</div>
        <h1 style="font-size: 2.8rem; font-family: var(--font-serif); margin-bottom: 20px;">Evolve Blogs</h1>
        <p style="margin-bottom: 50px; font-size: 1.1rem; max-width: 600px;">Explore our latest articles on apparel manufacturing, fabric sourcing, uniform design, and industry trends.</p>
        
        <div class="blog-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
            
            <div class="blog-card" style="background: var(--white); border-radius: 8px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.03); transition: transform 0.3s ease;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/fabric_sourcing_1779777197767.png" alt="Fabric Sourcing" style="width: 100%; height: 220px; object-fit: cover;">
                <div style="padding: 30px;">
                    <div style="color: var(--gold); font-size: 0.8rem; font-weight: 600; margin-bottom: 10px; text-transform: uppercase;">Fabric & Materials</div>
                    <a href="<?php echo esc_url( home_url( '/blog-post' ) ); ?>" style="text-decoration: none; color: inherit; display: block; transition: color 0.3s;" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='inherit'"><h3 style="font-size: 1.3rem; margin-bottom: 15px; line-height: 1.4;">The Ultimate Guide to Sourcing Premium Fabrics for Your Brand</h3></a>
                    <p style="font-size: 0.95rem; color: var(--text-light); margin-bottom: 20px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">Discover the key factors to consider when choosing fabrics for your clothing line, from durability to sustainability and feel.</p>
                    <a href="<?php echo esc_url( home_url( '/blog-post' ) ); ?>" style="font-size: 0.85rem; font-weight: 600; color: var(--navy); display: flex; align-items: center; gap: 5px; text-decoration: none;">READ ARTICLE <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="blog-card" style="background: var(--white); border-radius: 8px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.03); transition: transform 0.3s ease;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/uniforms_1779777178912.png" alt="Corporate Uniforms" style="width: 100%; height: 220px; object-fit: cover;">
                <div style="padding: 30px;">
                    <div style="color: var(--gold); font-size: 0.8rem; font-weight: 600; margin-bottom: 10px; text-transform: uppercase;">Corporate Wear</div>
                    <a href="<?php echo esc_url( home_url( '/blog-post' ) ); ?>" style="text-decoration: none; color: inherit; display: block; transition: color 0.3s;" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='inherit'"><h3 style="font-size: 1.3rem; margin-bottom: 15px; line-height: 1.4;">Why Custom Corporate Uniforms Are Essential for Brand Identity</h3></a>
                    <p style="font-size: 0.95rem; color: var(--text-light); margin-bottom: 20px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">A look into how properly designed corporate wear builds team morale, instills trust in clients, and promotes your brand identity.</p>
                    <a href="<?php echo esc_url( home_url( '/blog-post' ) ); ?>" style="font-size: 0.85rem; font-weight: 600; color: var(--navy); display: flex; align-items: center; gap: 5px; text-decoration: none;">READ ARTICLE <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="blog-card" style="background: var(--white); border-radius: 8px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.03); transition: transform 0.3s ease;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/bulk_production_1779777228921.png" alt="Bulk Production" style="width: 100%; height: 220px; object-fit: cover;">
                <div style="padding: 30px;">
                    <div style="color: var(--gold); font-size: 0.8rem; font-weight: 600; margin-bottom: 10px; text-transform: uppercase;">Manufacturing</div>
                    <a href="<?php echo esc_url( home_url( '/blog-post' ) ); ?>" style="text-decoration: none; color: inherit; display: block; transition: color 0.3s;" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='inherit'"><h3 style="font-size: 1.3rem; margin-bottom: 15px; line-height: 1.4;">Navigating the Transition from Sampling to Bulk Production</h3></a>
                    <p style="font-size: 0.95rem; color: var(--text-light); margin-bottom: 20px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">Learn what to expect and how to prepare your designs when moving from single prototypes into full-scale mass production.</p>
                    <a href="<?php echo esc_url( home_url( '/blog-post' ) ); ?>" style="font-size: 0.85rem; font-weight: 600; color: var(--navy); display: flex; align-items: center; gap: 5px; text-decoration: none;">READ ARTICLE <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="blog-card" style="background: var(--white); border-radius: 8px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.03); transition: transform 0.3s ease;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/kids_clothing_1779777160080.png" alt="Kidswear Manufacturing" style="width: 100%; height: 220px; object-fit: cover;">
                <div style="padding: 30px;">
                    <div style="color: var(--gold); font-size: 0.8rem; font-weight: 600; margin-bottom: 10px; text-transform: uppercase;">Kidswear</div>
                    <a href="<?php echo esc_url( home_url( '/blog-post' ) ); ?>" style="text-decoration: none; color: inherit; display: block; transition: color 0.3s;" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='inherit'"><h3 style="font-size: 1.3rem; margin-bottom: 15px; line-height: 1.4;">Safety and Comfort: The Pillars of Kidswear Manufacturing</h3></a>
                    <p style="font-size: 0.95rem; color: var(--text-light); margin-bottom: 20px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">Understand the stringent quality checks and safety guidelines required when manufacturing apparel for children.</p>
                    <a href="<?php echo esc_url( home_url( '/blog-post' ) ); ?>" style="font-size: 0.85rem; font-weight: 600; color: var(--navy); display: flex; align-items: center; gap: 5px; text-decoration: none;">READ ARTICLE <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="blog-card" style="background: var(--white); border-radius: 8px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.03); transition: transform 0.3s ease;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/sampling_1779777213825.png" alt="White Labeling" style="width: 100%; height: 220px; object-fit: cover;">
                <div style="padding: 30px;">
                    <div style="color: var(--gold); font-size: 0.8rem; font-weight: 600; margin-bottom: 10px; text-transform: uppercase;">White-Label</div>
                    <a href="<?php echo esc_url( home_url( '/blog-post' ) ); ?>" style="text-decoration: none; color: inherit; display: block; transition: color 0.3s;" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='inherit'"><h3 style="font-size: 1.3rem; margin-bottom: 15px; line-height: 1.4;">How White-Label Manufacturing Can Scale Your Fashion Brand</h3></a>
                    <p style="font-size: 0.95rem; color: var(--text-light); margin-bottom: 20px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">Explore the benefits of white-label production and how partnering with the right manufacturer accelerates your growth.</p>
                    <a href="<?php echo esc_url( home_url( '/blog-post' ) ); ?>" style="font-size: 0.85rem; font-weight: 600; color: var(--navy); display: flex; align-items: center; gap: 5px; text-decoration: none;">READ ARTICLE <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

        </div>
        
        <div style="text-align: center; margin-top: 60px;">
            <a href="#" class="btn btn-outline" style="padding: 12px 30px;">LOAD MORE ARTICLES <i class="fa-solid fa-rotate"></i></a>
        </div>
    </div>
</main>

<?php
get_footer();
?>