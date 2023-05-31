<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mazdakdev
 */
get_header();
?>

      <div class="flex flex-col-reverse md:flex-row md:items-start items-center animate__animated animate__backInDown md:space-x-10 z-40 mt-8">
                <div class="flex flex-col  md:items-start md:text-start text-center items-center">
                    <h1 class="font-bold text-3xl md:text-5xl tracking-tight mb-1 text-white">
                        Mazdak Pakaghideh
                    </h1>
                    <h2 class="text-gray-200 mb-4">
                        Teenage Software Developer 
        
                    </h2>
                    <p class="text-gray-400 mb-16">
                        Teenage Web, ML & AI Developer and a
                        Penetration tester from Iran
                    </p>
                </div>

                <div class="w-[146px] sm:w-[176px] flex items-center mb-8 z-50 ">
                    <img 
                        alt="Mazdak Pakaghideh"
                        height={176}
                        width={176}
                        src="https://mazdak.dev/assets/images/Mazdak-Pakaghideh.png"
                        class="rounded-full"
                    />
                </div>
        </div>
      
            <section class="animate__animated animate__backInLeft">
                <h3 class="font-bold text-3xl md:text-start text-center  md:text-4xl tracking-tight text-white">
                    Featured Posts
                </h3>
              

                <div class="flex gap-6 flex-col md:flex-row mt-6 " style="padding:1px;">
                    <?php
                        $args = array('numberposet' => 3);
                        $posts = get_posts($args);
                    ?>

               <?php if(isset($posts[0])){ ?>
                        <a href="<?php echo 'index.php/'.$posts[0]->post_name;?>" class="post-1 md:w-[208px] md:h-[210px] h-40 shadow-sm justify-center items-center  flex p-5 hover:scale-[1.01] " >
                            <p class="text-white text-xl text-center  md:text-start ">
                            <?php echo $posts[0]->post_title?>
                            </p>
                        </a>
                    <?php } 
                    else{?>

                    <a class="post-1 shadow-sm md:w-[208px] md:h-[210px] h-40 justify-center items-center  flex p-5 hover:scale-[1.01]">
                        <p class="text-gray-400 text-xl  text-center md:text-start  ">
                          Not Available
                        </p>
                    </a>
                    <?php }?>
                    

                     <?php if(isset($posts[1])){ ?>
                        <a href="<?php echo 'index.php/'.$posts[1]->post_name;?>" class="post-2 md:w-[208px] md:h-[210px] h-40 shadow-sm justify-center items-center  flex p-5 hover:scale-[1.01] " >
                            <p class="text-white text-xl text-center  md:text-start ">
                            <?php echo $posts[1]->post_title?>
                            </p>
                        </a>
                    <?php } 
                    else{?>

                    <a class="post-2 shadow-sm md:w-[208px] md:h-[210px] h-40 justify-center items-center  flex p-5 hover:scale-[1.01]">
                        <p class="text-gray-400 text-xl  text-center md:text-start  ">
                          Not Available
                        </p>
                    </a>
                    <?php }?>

                       <?php if(isset($posts[2])){ ?>
                        <a href="<?php echo 'index.php/'.$posts[2]->post_name;?>" class="post-3 md:w-[208px] md:h-[210px] h-40 shadow-sm justify-center items-center  flex p-5 hover:scale-[1.01] " >
                            <p class="text-white text-xl text-center  md:text-start ">
                            <?php echo $posts[2]->post_title?>
                            </p>
                        </a>
                    <?php } 
                    else{?>

                    <a class="post-3 shadow-sm md:w-[208px] md:h-[210px] h-40 justify-center items-center  flex p-5 hover:scale-[1.01]">
                        <p class="text-gray-400 text-xl  text-center md:text-start  ">
                          Not Available
                        </p>
                    </a>
                    <?php }?>


                </div>

                <a href="/blog" class="flex mt-8 items-start-start justify-start  text-gray-400 leading-7 rounded-lg hover:text-gray-200 transition-all h-6">
                    Read all posts

                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    class="h-6 w-6 ml-1"
                    >

                    <path
                        stroke="currentColor"
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth={2}
                        d="M17.5 12h-15m11.667-4l3.333 4-3.333-4zm3.333 4l-3.333 4 3.333-4z"
                    />

                    </svg>
                </a>
            </section>
    

            <section>
                <p class="font-bold text-3xl md:text-start text-center md:text-4xl tracking-tight mt-16 text-white">
                        About Me
                </p>        
                <div>
                    <p class="text-gray-100 mt-6 md:text-start text-center  ">
                        It started with love, curiosity, and of course a lot of questions in my heart.
                        I started this path when I was 10 with c++. To me being a developer represents the power of creation & technology is the way to transcend our reality for evolving towards the truth.
                    </p>
                    <p class="text-gray-100 mt-6 md:text-start text-center  ">
                       A teenager from Rasht/Iran, a knowledge-seeker person who is in love with technology, AI, development and learning everything he possibly could.
                    </p>      
                </div>

            </section>

            <section>
                    
                <h3 class="font-bold text-3xl md:text-start text-center md:text-4xl tracking-tight mt-16 text-white">
                            CV
                </h3>

                <div id="cv" class="flex mt-6 flex-row items-center justify-center md:ml-14 md:space-x-52 space-x-10 ">
                    <a href="https://mazdak.dev/assets/cv/Mazdak-Pakaghideh-FA.pdf/" target="_blank" class="cv md:ml-30   h-[56px]  flex flex-col md:flex-row  items-center hover:scale-[1.05] justify-center p-7 ">
                        <p class="text-gray-100">CV - FA</p>
                        <svg  class="fill-gray-100 w-[16px] h-[15px] md:ml-5 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M480 352h-133.5l-45.25 45.25C289.2 409.3 273.1 416 256 416s-33.16-6.656-45.25-18.75L165.5 352H32c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32v-96C512 366.3 497.7 352 480 352zM432 456c-13.2 0-24-10.8-24-24c0-13.2 10.8-24 24-24s24 10.8 24 24C456 445.2 445.2 456 432 456zM233.4 374.6C239.6 380.9 247.8 384 256 384s16.38-3.125 22.62-9.375l128-128c12.49-12.5 12.49-32.75 0-45.25c-12.5-12.5-32.76-12.5-45.25 0L288 274.8V32c0-17.67-14.33-32-32-32C238.3 0 224 14.33 224 32v242.8L150.6 201.4c-12.49-12.5-32.75-12.5-45.25 0c-12.49 12.5-12.49 32.75 0 45.25L233.4 374.6z"/></svg>
                    </a>
                    
                    <a href="https://mazdak.dev/assets/cv/Mazdak-Pakaghideh-EN.pdf/" target="_blank" class="cv md:ml-30  h-[56px]  flex flex-col md:flex-row hover:scale-[1.05] items-center justify-center p-7 ">
                        <p class="text-gray-100">CV - EN</p>
                        <svg  class="fill-gray-100 w-[16px] h-[15px] md:ml-5 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M480 352h-133.5l-45.25 45.25C289.2 409.3 273.1 416 256 416s-33.16-6.656-45.25-18.75L165.5 352H32c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32v-96C512 366.3 497.7 352 480 352zM432 456c-13.2 0-24-10.8-24-24c0-13.2 10.8-24 24-24s24 10.8 24 24C456 445.2 445.2 456 432 456zM233.4 374.6C239.6 380.9 247.8 384 256 384s16.38-3.125 22.62-9.375l128-128c12.49-12.5 12.49-32.75 0-45.25c-12.5-12.5-32.76-12.5-45.25 0L288 274.8V32c0-17.67-14.33-32-32-32C238.3 0 224 14.33 224 32v242.8L150.6 201.4c-12.49-12.5-32.75-12.5-45.25 0c-12.49 12.5-12.49 32.75 0 45.25L233.4 374.6z"/></svg>
                    </a>
                </div>

            </section>

<?php get_footer()?>
