<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mazdakdev
 */

get_header();
?>

	  <div class="w-full md:mt-8 mt-16 prose-dark max-w-none">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content', 'single' );

				if ( is_singular( 'post' ) ) {
					// Previous/next post navigation.
					the_post_navigation(
						array(
							'next_text' => '<span aria-hidden="true">' . __( 'Next Post', 'mazdakdev' ) . '</span> ' .
								'<span class="sr-only">' . __( 'Next post:', 'mazdakdev' ) . '</span> <br/>' .
								'<span>%title</span>',
							'prev_text' => '<span aria-hidden="true">' . __( 'Previous Post', 'mazdakdev' ) . '</span> ' .
								'<span class="sr-only">' . __( 'Previous post:', 'mazdakdev' ) . '</span> <br/>' .
								'<span>%title</span>',
						)
					);
				}

		

				// End the loop.
			endwhile;
			?>

</div>


<?php get_footer(); ?>


