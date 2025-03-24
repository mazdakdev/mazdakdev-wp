<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mazdakdev
 */

get_header();
?>

<section id="primary">
	<main id="main">

		<?php

		/* Start the Loop */
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content/content', 'page');

			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) {
				comments_template();
			}

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
