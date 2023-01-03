<!--?php /* Template Name: Blog */ ?-->
<?php
get_header();
?>

<div class="w-full md:mt-8 mt-16 prose-dark max-w-none text-gray-200">
    <h1 class="text-5xl text-white md:mt-8 mt-16 "><strong>Blog</strong></h1>
    <h3 class="text-gray-400 mt-4">A Personal Blog about my perception of everything that exists.</h3>
            
      
            
    <h2 class="text-4xl text-white mt-8 mb-8"><strong>All Posts</strong></h2>

    <?php 
        $post_query = new WP_Query([
            'post_type' => 'post',
        ]);

        if($post_query->have_posts() ) {
            while($post_query->have_posts() ) {
                $post_query->the_post();
    ?>
        

    <a href="<?php the_permalink(); ?>" class="w-full">
        <div class="mb-8">
                <div class="flex flex-col justify-between md:flex-row">
                <h4 class="w-full mb-2 text-lg font-medium  md:text-xl text-gray-100">
                    <?php the_title(); ?>
                </h4>
            </div>
            <p class="text-gray-400">
                <?php
                
                    $my_content = apply_filters( 'the_content', get_the_content() );
                    echo wp_trim_words( $my_content, 30);
                ?>
            </p>
        </div>
    </a>

<?php
    }
}
?>

</div>

<?php
get_footer(); ?>

