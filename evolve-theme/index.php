<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 */

get_header();
?>

<main id="primary" class="site-main page-content" style="padding: 100px 0;">
    <div class="container">
        <?php
        if ( have_posts() ) :

            if ( is_home() && ! is_front_page() ) :
                ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
                <?php
            endif;

            /* Start the Loop */
            while ( have_posts() ) :
                the_post();
                
                // We'll output basic content here. 
                // For Elementor pages, the_content() will render the Elementor output.
                the_content();

            endwhile;

            the_posts_navigation();

        else :
            echo '<p>No content found.</p>';
        endif;
        ?>
    </div>
</main>

<?php
get_footer();
