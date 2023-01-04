<!--?php /* Template Name: Snippets */ ?-->
<?php
get_header();
?>

<div class="w-full md:mt-8 mt-16 prose-dark max-w-none text-gray-200">
    <h1 class="md:text-5xl text-4xl text-white md:mt-8 mt-16 "><strong>Code Snippets</strong></h1>
    <h3 class="text-gray-400 mt-4">All of my tricky code snippets, Codes(words) are powerful !
    </h3>
            
     

    <div class="grid w-full grid-cols-2 gap-4 my-2 mt-8 ">
         <?php 
            $post_query = new WP_Query([
                'post_type' => 'snippets',
            ]);

            if($post_query->have_posts() ) {
                while($post_query->have_posts() ) {
                    $post_query->the_post();
        ?>
        <a href="<?php the_permalink(); ?>" class="border border-gray-800 hover:border-gray-700 rounded p-4 w-full bg-gray-900" to="/snippets/django">
            <img src="<?php the_post_thumbnail_url() ?>"  class="rounded-full" loading="lazy" width="32" height="32">
            <h3 class="text-lg font-bold text-left mt-2 text-gray-100">  <?php the_excerpt(); ?></h3>
            <p class="mt-1 text-gray-400">
                <?php the_title(); ?>
            </p>
        </a>     
    <?php
        }
    }
    ?>        
    </div>



</div>

<?php
get_footer(); ?>

