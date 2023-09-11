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
	<script src="https://kit.fontawesome.com/ccc8febacc.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body id="body">
	<!-- status mobile -->
	<div class="flex flex-col justify-center px-8 overflow-hidden demo1" id="mobile">
		<div class="md:hidden">
			<div id="burgerBtn" class="mt-6 ml-3" onclick="burgerBtn()" ></div>
			<!-- nav status -->
			<ul id="nav" class="text-gray-400 text-xl hidden animate__animated animate__fadeInLeft">
				<a href="/"><li class="hover:text-gray-200">Home</li></a>
				<a href="/blog"><li class="hover:text-gray-200">Blog</li></a>
				<a href="/snippets"><li class="hover:text-gray-200">Snippets</li></a>
				<a href="https://github.com/mazdakdev"><li class="hover:text-gray-200">Github</li></a>
				<a href="/#cv" onclick="burgerBtn()"><li class="hover:text-gray-200">CV</li></a>
			</ul>
		</div>

		<div class="flex flex-col justify-center md:items-start items-center max-w-2xl border-gray-700 mx-auto pb-16 " id="mobileBodyContent">
			<header>          
			

				<nav class="py-7 rounded flex flex-row">
  					<div class="container mx-auto">
   						<ul class="flex flex-col md:flex-row md:space-x-4 md:items-start md:justify-end">
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
  <button class="ml-auto">Button</button>
</nav>

			</header>

