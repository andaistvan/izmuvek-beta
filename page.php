<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
get_header('new');

// if (is_page(7)) {
//     get_header('header-new');
// } else {
//     get_header('header-new');
// }

 ?>

<section id="pages" class="fullwidth">
   <div class="main-container">
      <div class="content-container">

			<?php
            while (have_posts()) : the_post();

                get_template_part('template-parts/content', 'page-nosidebar');

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
      </div><!-- content-container -->


    </div><!-- main-container -->
 </section><!-- section#pages -->

<?php
get_footer();
