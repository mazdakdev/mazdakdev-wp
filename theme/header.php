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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<!-- status mobile -->
<div class="flex flex-col justify-center px-8 demo1" id="mobile">
	<div class="md:hidden ">
		<div id="burgerBtn" class="mt-6 ml-3" onclick="burgerBtn()" ></div>
		<!-- nav status -->
		<ul id="nav"  class="text-gray-400 text-xl ">
			<a href="/"><li class="hover:text-gray-200">Home</li></a>
			<a href="/blog"><li class="hover:text-gray-200">Blog</li></a>
			<a href="/snippets"><li class="hover:text-gray-200">Snippets</li></a>
			<a href="https://github.com/mazdakdev"><li class="hover:text-gray-200">Github</li></a>
			<a href="/#cv"><li class="hover:text-gray-200">CV</li></a>
		</ul>
	</div>

	<div class="flex  flex-col justify-center md:items-start items-start max-w-2xl border-gray-700 mx-auto pb-16 " id="mobileBodyContent">
		<header>          
			<nav class="py-7 rounded ">
				<div class="md:container md:flex md:flex-col md:justify-center md:items-start md:mx-auto">
					<div class="hidden md:flex md:w-auto md:order-1"  id="mobile-menu-4">
						<ul class="flex flex-col mt-4 md:flex-row md:space-x-4 md:mt-0">
							<li>
								<a href="/" class="block py-2 pr-4  text-gray-400 hover:text-gray-200  rounded p-0 " aria-current="page">Home</a>
							</li>
							<li>
								<a href="/blog" class="block py-2 pr-4  text-gray-400 hover:text-gray-200 rounded p-0">Blog</a>
							</li>
							<li>
								<a href="/snippets" class="block py-2 pr-4  text-gray-400 hover:text-gray-200  rounded p-0">Snippets</a>
							</li>
							<li>
								<a href="https://github.com/mazdakdev" target="_blank" class="block py-2 pr-4  text-gray-400  hover:text-gray-200 rounded p-0">Github</a>
							</li>
							<li>
								<a href="/#cv" class="block py-2 pr-4  text-gray-400 hover:text-gray-200 rounded p-0">CV</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>

