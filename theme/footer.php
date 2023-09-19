<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mazdakdev
 */

?>

 
	</div>
		<footer class="flex flex-col justify-center items-start max-w-2xl mx-auto w-full mb-8 mt-8">
			<hr class="w-full border-1 border-gray-800 mb-8"/>
			<div class="flex m-auto space-x-6 lg:mt-0  text-gray-200">  
					<a href="mailto:contact@mazdak.dev" class="text-base md:text-xl">
						<i class="fa-solid fa-envelope"></i>
					</a>
					<a href="https://t.me/mazdakdev" class="text-base md:text-xl" rel="noreferrer" target="_blank">
						<i class="fa-brands fa-telegram"></i>
					</a>
					<a href="https://github.com/mazdakdev" class="text-base md:text-xl" rel="noreferrer" target="_blank">
						<i class="fa-brands fa-github"></i>
					</a>
					<a href="https://www.linkedin.com/in/mazdak-pakaghideh-5b4834204" class="text-base md:text-xl" rel="noreferrer" target="_blank">
						<i class="fa-brands fa-linkedin-in"></i>
					</a>
					<a href="https://x.com/mazdakdev" class="text-base md:text-xl" rel="noreferrer" target="_blank">
						<i class="fa-brands fa-x-twitter"></i>
					</a>

			</div>

    </footer>
</div>

<?php wp_footer(); ?>

<script>
		

	function burgerBtn(){
		const status = document.getElementById("mobile");
		const nav_status = document.getElementById("nav");
		const body = document.getElementById("body") ;
		
		if(status.classList.contains("navigation") == false && nav_status.classList.contains("hidden")){
			status.classList.add("navigation");
			nav_status.classList.remove("hidden");
			body.classList.add("overflow-hidden");
			
		}
		else{
			status.classList.remove("navigation");
			nav_status.classList.add("hidden");
			body.classList.remove("overflow-hidden");
		}
		
	}


	</script>
</body>
</html>
