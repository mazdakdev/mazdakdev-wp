<?php

/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package mazdakdev
 */

if (! function_exists('mazdakdev_posted_on')) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function mazdakdev_posted_on()
	{
		$time_string = '<time datetime="%1$s">%2$s</time>';
		if (get_the_time('U') !== get_the_modified_time('U')) {
			$time_string = '<time datetime="%1$s">%2$s</time><time datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr(get_the_date(DATE_W3C)),
			esc_html(get_the_date()),
			esc_attr(get_the_modified_date(DATE_W3C)),
			esc_html(get_the_modified_date())
		);

		printf(
			'<a href="%1$s" rel="bookmark">%2$s</a>',
			esc_url(get_permalink()),
			$time_string // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		);
	}
endif;

if (! function_exists('mazdakdev_posted_by')) :
	/**
	 * Prints HTML with meta information about theme author.
	 */
	function mazdakdev_posted_by()
	{
		printf(
			/* translators: 1: posted by label, only visible to screen readers. 2: author link. 3: post author. */
			'<span class="sr-only">%1$s</span><span class="author vcard"><a class="url fn n" href="%2$s">%3$s</a></span>',
			esc_html__('Posted by', 'mazdakdev'),
			esc_url(get_author_posts_url(get_the_author_meta('ID'))),
			esc_html(get_the_author())
		);
	}
endif;

if (! function_exists('mazdakdev_comment_count')) :
	/**
	 * Prints HTML with the comment count for the current post.
	 */
	function mazdakdev_comment_count()
	{
		if (! post_password_required() && (comments_open() || get_comments_number())) {
			/* translators: %s: Name of current post. Only visible to screen readers. */
			comments_popup_link(sprintf(__('Leave a comment<span class="sr-only"> on %s</span>', 'mazdakdev'), get_the_title()));
		}
	}
endif;

if (! function_exists('mazdakdev_entry_meta')) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function mazdakdev_entry_meta()
	{

		// Hide author, post date, category and tag text for pages.
		if ('post' === get_post_type()) {

			// Posted by.
			mazdakdev_posted_by();

			// Posted on.
			mazdakdev_posted_on();

			/* translators: used between list items, there is a space after the comma. */
			$categories_list = get_the_category_list(__(', ', 'mazdakdev'));
			if ($categories_list) {
				printf(
					/* translators: 1: posted in label, only visible to screen readers. 2: list of categories. */
					'<span class="sr-only">%1$s</span>%2$s',
					esc_html__('Posted in', 'mazdakdev'),
					$categories_list // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				);
			}

			/* translators: used between list items, there is a space after the comma. */
			$tags_list = get_the_tag_list('', __(', ', 'mazdakdev'));
			if ($tags_list) {
				printf(
					/* translators: 1: tags label, only visible to screen readers. 2: list of tags. */
					'<span class="sr-only">%1$s</span>%2$s',
					esc_html__('Tags:', 'mazdakdev'),
					$tags_list // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				);
			}
		}

		// Comment count.
		if (! is_singular()) {
			mazdakdev_comment_count();
		}

		// Edit post link.
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__('Edit <span class="sr-only">%s</span>', 'mazdakdev'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);
	}
endif;

if (! function_exists('mazdakdev_entry_footer')) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function mazdakdev_entry_footer()
	{

		// Hide author, post date, category and tag text for pages.
		if ('post' === get_post_type()) {

			// Posted by.
			mazdakdev_posted_by();

			// Posted on.
			mazdakdev_posted_on();

			/* translators: used between list items, there is a space after the comma. */
			$categories_list = get_the_category_list(__(', ', 'mazdakdev'));
			if ($categories_list) {
				printf(
					/* translators: 1: posted in label, only visible to screen readers. 2: list of categories. */
					'<span class="sr-only">%1$s</span>%2$s',
					esc_html__('Posted in', 'mazdakdev'),
					$categories_list // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				);
			}

			/* translators: used between list items, there is a space after the comma. */
			$tags_list = get_the_tag_list('', __(', ', 'mazdakdev'));
			if ($tags_list) {
				printf(
					/* translators: 1: tags label, only visible to screen readers. 2: list of tags. */
					'<span class="sr-only">%1$s</span>%2$s',
					esc_html__('Tags:', 'mazdakdev'),
					$tags_list // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				);
			}
		}

		// Comment count.
		if (! is_singular()) {
			mazdakdev_comment_count();
		}

		// Edit post link.
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__('Edit <span class="sr-only">%s</span>', 'mazdakdev'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);
	}
endif;

if (! function_exists('mazdakdev_post_thumbnail')) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views
	 */
	function mazdakdev_post_thumbnail()
	{
		if (! mazdakdev_can_show_post_thumbnail()) {
			return;
		}

		if (is_singular()) :
?>

			<figure>
				<?php the_post_thumbnail(); ?>
			</figure><!-- .post-thumbnail -->

		<?php
		else :
		?>

			<figure>
				<a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
					<?php the_post_thumbnail('post-thumbnail'); ?>
				</a>
			</figure>

<?php
		endif; // End is_singular().
	}
endif;

if (! function_exists('mazdakdev_comment_avatar')) :
	/**
	 * Returns the HTML markup to generate a user avatar.
	 *
	 * @param mixed $id_or_email The Gravatar to retrieve. Accepts a user_id, gravatar md5 hash,
	 *                           user email, WP_User object, WP_Post object, or WP_Comment object.
	 */
	function mazdakdev_get_user_avatar_markup($id_or_email = null)
	{

		if (! isset($id_or_email)) {
			$id_or_email = get_current_user_id();
		}

		return sprintf('<div class="vcard">%s</div>', get_avatar($id_or_email, mazdakdev_get_avatar_size()));
	}
endif;

if (! function_exists('mazdakdev_discussion_avatars_list')) :
	/**
	 * Displays a list of avatars involved in a discussion for a given post.
	 *
	 * @param array $comment_authors Comment authors to list as avatars.
	 */
	function mazdakdev_discussion_avatars_list($comment_authors)
	{
		if (empty($comment_authors)) {
			return;
		}
		echo '<ol>', "\n";
		foreach ($comment_authors as $id_or_email) {
			printf(
				"<li>%s</li>\n",
				mazdakdev_get_user_avatar_markup($id_or_email) // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			);
		}
		echo '</ol>', "\n";
	}
endif;

if (! function_exists('mazdakdev_the_posts_navigation')) :
	/**
	 * Documentation for function.
	 */
	function mazdakdev_the_posts_navigation()
	{
		the_posts_pagination(
			array(
				'mid_size'  => 2,
				'prev_text' => __('Newer posts', 'mazdakdev'),
				'next_text' => __('Older posts', 'mazdakdev'),
			)
		);
	}
endif;
