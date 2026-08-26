<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mazdakdev
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="body">
	<?php wp_body_open(); ?>
	<!-- status mobile -->
	<div class="flex flex-col justify-center px-8 overflow-hidden demo1" id="mobile">
		<div class="md:hidden">
			<div id="burgerBtn" class="mt-6 ml-3"></div>
			<!-- nav status -->
			<ul id="nav" class="text-gray-400 text-xl hidden animate__animated animate__fadeInLeft">
				<li class="hover:text-gray-200"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
				<li class="hover:text-gray-200"><a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a></li>
				<li class="hover:text-gray-200"><a href="<?php echo esc_url(home_url('/snippets/')); ?>">Snippets</a></li>
				<li class="hover:text-gray-200"><a href="https://github.com/mazdakdev" target="_blank" rel="noopener noreferrer">Github</a></li>
				<li class="hover:text-gray-200"><a href="<?php echo esc_url(home_url('/#cv')); ?>">CV</a></li>
			</ul>
		</div>

		<div class="flex flex-col justify-center max-w-2xl border-gray-700 mx-auto pb-16 " id="mobileBodyContent">
			<header>
				<nav class="py-7 rounded ">
					<div class="hidden md:flex md:w-auto md:order-1" id="mobile-menu-4">
						<ul class="flex flex-col mt-4 md:flex-row md:space-x-4 md:mt-0">
							<li>
								<a href="<?php echo esc_url(home_url('/')); ?>" class="block py-2 pr-4  text-gray-400 hover:text-gray-200  rounded p-0 " aria-current="page">Home</a>
							</li>
							<li>
								<a href="<?php echo esc_url(home_url('/blog/')); ?>" class="block py-2 pr-4  text-gray-400 hover:text-gray-200 rounded p-0">Blog</a>
							</li>
							<li>
								<a href="<?php echo esc_url(home_url('/snippets/')); ?>" class="block py-2 pr-4  text-gray-400 hover:text-gray-200  rounded p-0">Snippets</a>
							</li>
							<li>
								<a href="https://github.com/mazdakdev" target="_blank" rel="noopener noreferrer" class="block py-2 pr-4  text-gray-400  hover:text-gray-200 rounded p-0">Github</a>
							</li>
							<li>
								<a href="<?php echo esc_url(home_url('/#cv')); ?>" class="block py-2 pr-4  text-gray-400 hover:text-gray-200 rounded p-0">CV</a>
							</li>
						</ul>
					</div>
				</nav>
			</header>