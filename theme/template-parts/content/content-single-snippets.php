<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mazdakdev
 */

?> 

<article class="mb-16 " id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header ">
        <div class="flex justify-between">
            <div>
                <h1 class="md:text-4xl text-2xl text-white md:mt-8 mt-16"><strong><?php the_title(); ?></strong></h1>
            </div>
            <div>
                <img src="<?php the_post_thumbnail_url(); ?>" class="rounded-full md:mt-8 mt-16" loading="lazy" width="48" height="48">
            </div>
        </div>
	</header>


	<div class="entry-content prose mt-8 md:-ml-8">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__( 'Continue reading<span class="sr-only"> "%s"</span>', 'mazdakdev' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div>' . __( 'Pages:', 'mazdakdev' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>

</article>


