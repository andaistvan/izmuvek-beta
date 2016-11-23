<?php
/*
Template Name: page no sidebar
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
get_header(); ?>

<section id="pages-no-sidebar" class="fullwidth">
   <div class="main-container">

			<?php
            while (have_posts()) : the_post();

                get_template_part('template-parts/content', 'page');

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

    </div><!-- main-container -->
 </section><!-- section#pages -->

<?php
get_footer();
