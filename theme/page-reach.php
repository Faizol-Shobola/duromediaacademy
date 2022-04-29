<?php
/**
 * The template for displaying Reach page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package duromediaacademy
 */

get_header();
?>

    <div class="breadcrum flex items-center justify-center min-h44 h-40 md:h-44 px-8 bg-secondary">
        <div class="title text-center">
            <h1 class="breadcrumb md:text-6xl">
                <?php the_title(); ?>
            </h1>
        </div>
    </div>

	<div class="enquiry py-5">
        <div class="cont">
            <div class=" gap-x-10 sm:px-6 py-8">
				<div class="contact-info flex flex-wrap gap-x-5 gap-y-5">
					<div class="flex-auto flex justify-center items-center text-primary p-5 rounded-xl shadow-md">
						<div class="icon-instagram mx-4 ">
							<a href="https://www.instagram.com/duroacademy/" class="text-md md:text-xl flex-none flex items-center justify-center w-9 h-9 rounded-full bg-primary">
								<i class="fab fa-instagram text-white"></i>
							</a>
						</div>
						<div class="icon-facebook mx-4 ">
							<a href="https://www.facebook.com/duroacademy" class="text-md md:text-xl flex-none flex items-center justify-center w-9 h-9 rounded-full bg-primary">
								<i class="fab fa-facebook-f text-white"></i>
							</a>
						</div>
						<div class="icon-twittwer mx-4 ">
							<a href="https://twitter.com/duroacademy" class="text-md md:text-xl flex-none flex items-center justify-center w-9 h-9 rounded-full bg-primary">
								<i class="fab fa-twitter text-white"></i>
							</a>
						</div>
						<div class="icon-linkedin mx-4 hidden">
							<a href="#" class="text-md md:text-xl flex-none flex items-center justify-center w-9 h-9 rounded-full bg-primary">
								<i class="fab fa-linkedin-in text-white"></i>
							</a>
						</div>
					</div>
					<div class="flex-auto p-5 rounded-xl shadow-md">
						<a href="tel:+2348052835221" class="flex gap-x-4 items-center">
							<div class="text-md md:text-xl flex-none flex items-center justify-center w-9 h-9 rounded-full bg-primary text-secondary "><i class="fas fa-phone text-white transform rotate-90"></i></div>
							<div class="">
								<p class="text-sm md:text-xl">+2348052835221</p>
							</div>
						</a>
					</div>
					<div class="flex-auto p-5 rounded-xl shadow-md">
						<a href="mailto:info@duromediaacademy.com.ng" class="flex gap-x-4 items-center">
							<div class="text-md md:text-xl flex-none flex items-center justify-center w-9 h-9 rounded-full bg-primary text-secondary "><i class="fas fa-envelope text-white"></i></div>
							<div class="">
								<p class="text-sm md:text-xl">info@duromediaacademy.com.ng</p>
							</div>
						</a>
					</div>
					<div class="flex-auto flex gap-x-4 p-5 rounded-xl shadow-md">
						<div class="text-md md:text-xl flex-none flex items-center justify-center w-9 h-9 rounded-full bg-primary text-secondary "><i class="fas fa-map-marker-alt text-white"></i></div>
						<div class="">
							<p class="text-sm md:text-xl">Plot 12, Oladele Kadiri Close Phase 2, NG, off Nob-Oluwa Street, Ogba , Ikeja.  Lagos Nigeria.</p>
						</div>
					</div>
				</div>
				<div class="lg:grid grid-cols-2 pt-8">
					<div class="w-full flex justify-center items-center py-8">
						<div class="overflow-hidden w-full h-full">
							<img src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/03';?>/enquiry.jpg" alt="" class="wow slideInLeft md:w-full h-auto">
						</div>
					</div>

					<div class="p-5 py-0">
						<div class="px-2">
							<p class="text-sm md:text-xl text-center">Do you Have a question? Make enquire, have comments, or just want to say hello. You are always welcome to get in touch. We’d gladly help you out.</p>
						</div>
						<div class="flex py-5 justify-center">
							<div class="flex justify-center contactform">
								<?php the_content();?>
							</div>
						</div>	 
					</div>
				</div>

			</div>
		</div>
	</div>

    <?php get_footer(); ?>