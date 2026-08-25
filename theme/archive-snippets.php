<?php
/* Template Name: Snippets */
get_header();
?>

<div class="w-full mt-8 prose-dark max-w-none text-gray-200">
    <h1 class="md:text-5xl text-4xl text-white md:mt-8 mt-16 "><strong>Code Snippets</strong></h1>
    <h3 class="text-gray-400 mt-4">All of my tricky code snippets, Codes(words) are powerful !
    </h3>



    <div class="grid w-full grid-cols-2 gap-4 my-2 mt-8 ">
        <?php
        $post_query = new WP_Query([
            'post_type' => 'snippets',
        ]);

        if ($post_query->have_posts()) {
            while ($post_query->have_posts()) {
                $post_query->the_post();
        ?>
                <a href="<?php echo esc_url(get_permalink()); ?>" class="border border-gray-800 hover:border-gray-700 rounded p-4 w-full bg-gray-900">
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'thumbnail')); ?>" class="rounded-full" loading="lazy" width="32" height="32" alt="<?php echo esc_attr(get_the_title()); ?>">
                    <h3 class="text-lg font-bold text-left mt-2 text-gray-100"> <?php echo wp_kses_post(get_the_excerpt()); ?></h3>
                    <p class="mt-1 text-gray-400">
                        <?php the_title(); ?>
                    </p>
                </a>
        <?php
            }
            wp_reset_postdata();
        } else {
            ?>
            <p class="text-gray-400"><?php esc_html_e('No snippets found.', 'mazdakdev'); ?></p>
            <?php
        }
        ?>
    </div>



</div>

<?php
get_footer(); ?>