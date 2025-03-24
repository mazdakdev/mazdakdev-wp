<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mazdakdev
 */

get_header();
?>
<div class="flex flex-col md:flex-row mt-8">
  <img class="md:h-64 md:w-64 w-52 h-52 animate__animated animate__headShake self-center" src="https://mazdak.dev/assets/images/404.png" />

  <div class="self-center ml-4 text-center md:text-start">
    <strong class="text-4xl md:text-5xl text-gray-100">Page Not Found <i>!<i></strong>
    <div class="text-2xl text-gray-300">You've Got Lost.</div>
  </div>
</div>

<?php
get_footer();
