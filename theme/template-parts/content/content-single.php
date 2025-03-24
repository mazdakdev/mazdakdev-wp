<?php

/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mazdakdev
 */

?>

<article class="mb-16 md:mt-8 mt-16" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header ">
		<h1 class="text-white md:text-5xl text-4xl "><strong><?php the_title(); ?></strong></h1>
		<div class="flex flex-row  mt-8">
			<img alt="Mazdak Pakaghideh" src="<?php echo get_template_directory_uri(); ?>/assets/images/Mazdak-Pakaghideh.png" class="rounded-full md:w-[24px] md:h-[24px] w-[20px] h-[20px]" loading="lazy">

			<p class="ml-2 text-sm text-gray-300">Mazdak Pakaghideh / <?php the_date(); ?></p>
		</div>
	</header>


	<div class="prose mt-8">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__('Continue reading<span class="sr-only"> "%s"</span>', 'mazdakdev'),
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
				'before' => '<div>' . __('Pages:', 'mazdakdev'),
				'after'  => '</div>',
			)
		);
		?>
	</div>

</article>