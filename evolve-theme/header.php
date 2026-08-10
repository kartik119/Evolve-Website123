<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="description" content="Evolve Clothing Co. specializes in custom premium clothing manufacturing, white-label production, uniforms, and kidswear.">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container header-inner">
        <div class="logo">
            <a href="index.html" style="display: flex; align-items: center; gap: 8px; text-decoration: none;">
                <i class="fa-solid fa-shirt text-gold" style="font-size:1.6rem;"></i>
                <span style="font-family: var(--font-serif); font-size:1.25rem; font-weight:700; color:var(--navy); letter-spacing:1px; line-height:1;">EVOLVE<span style="font-size:0.5rem; letter-spacing:3.5px; font-family:var(--font-sans); color:var(--text-light); display:block; margin-top:2px; font-weight:600;">CLOTHING CO.</span></span>
            </a>
        </div>
        
        <?php if ( has_nav_menu( 'primary' ) ) : ?>
            <nav class="main-nav">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => 'header-nav-list',
                    'container'      => false,
                    'fallback_cb'    => false,
                ) );
                ?>
            </nav>
        <?php else: ?>
            <!-- Fallback Static Nav -->
            <nav class="main-nav">
                <ul style="display: flex; gap: 30px; list-style: none; margin: 0; padding: 0; align-items: center;">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="active" style="color: var(--gold);">Home</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>">About Us</a></li>
                    <li class="has-dropdown"><a href="<?php echo esc_url( home_url( '/services' ) ); ?>">Our Services <i class="fa-solid fa-chevron-down" style="font-size:0.6rem; margin-left:2px;"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>">White-Label Manufacturing</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/kids' ) ); ?>">Kidswear Manufacturing</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/uniforms' ) ); ?>">Uniform Manufacturing</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>">Gallery</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/research-manufacturing' ) ); ?>">Research & Manufacturing</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a></li>
                </ul>
            </nav>
        <?php endif; ?>

        <div class="header-actions">
            <a href="#" class="icon-link"><i class="fa-solid fa-magnifying-glass"></i></a>
            <a href="https://wa.me/919833323469" target="_blank" rel="noopener" class="icon-link dynamic-wa" title="Chat on WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="<?php echo esc_url( home_url( '/quote' ) ); ?>" class="btn btn-navy" style="padding: 12px 24px; font-size:0.75rem;">REQUEST QUOTE</a>
            <button class="mobile-nav-toggle" aria-label="Toggle navigation"><i class="fa-solid fa-bars"></i></button>
        </div>
    </div>
</header>
