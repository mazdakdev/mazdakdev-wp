<?php
if( ! function_exists( 'better_commets' ) ):
function better_comments($comment, $args, $depth) {
    ?>


 
    <article id="li-comment-<?php comment_ID() ?>"  class="comments-area pl-6 mb-6 mt-12 text-base rounded-lg bg-gray-900">
        <footer class="flex justify-between items-center mb-2">
            <div class="flex items-center">
                <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><?php echo get_avatar($comment); ?><?php echo get_comment_author() ?></p>
                <p class="text-xs break-all sm:text-sm text-gray-600 dark:text-gray-400"><?php printf(/* translators: 1: date and time(s). */ esc_html__('%1$s at %2$s' , '5balloons_theme'), get_comment_date(),  get_comment_time()) ?>
                </p>
            </div>
        </footer>
        <div id="comment-txt"><?php comment_text() ?></div>
        <div class="flex items-center mt-4 space-x-4">
            <button type="button"
                class="flex items-center text-sm hover:underline text-gray-400">
                <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
               <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            </button>
        </div>
    </article>
    

<?php
        }
endif;