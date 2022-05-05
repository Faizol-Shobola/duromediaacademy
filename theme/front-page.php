<?php
/**
 * The template for displaying Home pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package duromediaacademy
 */

get_header();
?>


<!-- Hero section -->
<div class="bg-home-banner bg-left bg-cover hero py-8 lg:py-10">
        <div class="cont">
            <div class="lg:grid grid-cols-2 flex flex-col-reverse gap-x-10 sm:px-6 py-8">
				

				 <div class="">
					<div class="title p-2">
						<h1 class="keyword text-sm">best graphics, web design and digital marketing training in lagos nigeria. </h1>
						<h2 class="text-4xl md:text-5xl text-white lg:text-6xl font-bold">Acquire a life-changing career</h2>
					</div>
					<!-- <div class="tagline py-3">
						<div class="text-3xl italic">(Oh hey there, I’m Tyson.) </div>
					</div> -->
					<div class="sub-title py-3">
						<p class="text-xl text-white">
							<span class="font-medium">We train our students based on <span class="text-secondary">“20%theory”</span> and <span class="text-secondary">“80% practical”</span>we also give professional experience advice based on the job.</span>  </p>
						<p class="text-xl pt-3 text-white">  Learn the latest skills to reach your professional goals from DuroMedia Academy, authorities on the Digtal skill training, Lagos Nigeria.
						</p>
					</div>
					<div class="button pt-5">
                        <a href="<?php get_site_url() ?>/all-programmes" class="capitalize px-10 py-3 font-medium text-base text-white bg-secondary border border-secondary outline-none rounded active:text-opacity-75 hover:bg-transparent hover:text-white focus:outline-none focus:ring">explore all courses</a>
					</div>
				</div>
				<div class="hidden w-full lg:flex justify-center items-center md:py-0">
					<div class="overflow-hidden md:w-96 md:h-80 lg:w-80 lg:h-96">
						<img src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/04';?>/duromediaacademy.png" alt=""  class="md:w-full h-auto">
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Specialization -->
    <div class="specialization py-10">
        <div class="cont grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3 lg:gap-6 py-14">
            <!--  -->
            <div class="relative block p-8 rounded-sm shadow-md">
                <div class="mt-4 sm:pr-8">
                    <i class="fas fa-users text-4xl text-primary"></i>
                    <p class="mt-2 text-lg">Learn from industry professionals</p>
                </div>
            </div>
            <!--  -->
            <div class="relative block p-8 rounded-sm shadow-md">
                <div class="mt-4 sm:pr-8">
                    <i class="fas fa-clipboard-check text-4xl text-primary"></i>
                    <p class="mt-2 text-lg">3+ Specialisations in each Programme</p>
                </div>
            </div>
            <!--  -->
            <dic class="relative block p-8 rounded-sm shadow-md">
                <div class="mt-4 sm:pr-8">
                    <i class="fas fa-user-graduate text-4xl text-primary"></i>
                    <p class="mt-2 text-lg ">70+% of graduates get promoted or land a better job.</p>
                </div>
            </dic>
    
        </div>
    </div>


    <!--  -->
    <div class="py-16 md:py-28 bg-neutral">
        <div class="flex items-center justify-center text-center pb-12">
            <h2 class="capitalize text-3xl font-bold">programmes</h2>
        </div>
        <div class="cont grid md:grid-cols-2 gap-12 sm:px-6 ">
            
            <?php get_template_part('template-parts/content','coursecard');?>

        </div>
    </div>

    <!-- why choose us -->
    <div class="pt-10">
        <div class="cont grid md:grid-cols-2 py-20 gap-12 sm:px-6">
           
            <div class="w-full lg:w-4/5">
                <span class="font- text-base">Why should you study with Duromedia Academy?</span>
                <h3 class="text-3xl font-bold py-4 md:py-5">Job-ready talent Superior outcomes</h3>
                <p class="font-medium text-lg ">We partner with leading technology companies to learn how technology is transforming industries, and teach the critical tech skills that companies are looking for in their workforce. With our powerful and flexible digital education platform, even the busiest learners can prepare themselves to take on the most in-demand tech roles.</p>
            </div>
            <div class="flex flex-col sm:items-center sm:justify-center gap-y-3">
                <div class="md:border-b border-slate-300 md:py-4 grid sm:grid-cols-2 gap-x-8 gap-y-3 sm:gap-y-0">
                    <div class="flex items-center gap-4 border-2 border-black p-4 md:p-0 md:border-0">
                        <img loading="lazy"  src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/04/certify.png';?>" alt="" class="object-scale-down w-12 h-12 lg:w-16 lg:h-16">
                        <h4 class="font-semibold text-lg lg:text-xl">Certified Certificate</h4>
                    </div>
                    <div class="flex items-center gap-4 border-2 border-black p-4 md:p-0 md:border-0">
                        <img loading="lazy"  src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/04/growth.png';?>" alt="" class="object-scale-down w-12 h-12 lg:w-16 lg:h-16">
                        <h4 class="font-semibold text-lg lg:text-xl">Career Growth</h4>
                    </div>
                </div>
                <div class="md:border-b border-slate-300 md:py-4 grid sm:grid-cols-2 gap-x-8 gap-y-3 sm:gap-y-0">
                    <div class="flex items-center gap-4 border-2 border-black p-4 md:p-0 md:border-0">
                        <img loading="lazy"  src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/04/project.png';?>" alt="" class="object-scale-down w-12 h-12 lg:w-16 lg:h-16">
                        <h4 class="font-semibold text-lg lg:text-xl">Real-world Projects</h4>
                    </div>
                    <div class="flex items-center gap-4 border-2 border-black p-4 md:p-0 md:border-0">
                        <img loading="lazy"  src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/04/mentor.png';?>" alt="" class="object-scale-down w-12 h-12 lg:w-16 lg:h-16">
                        <h4 class="font-semibold text-lg lg:text-xl">Mentors & Trainers</h4>
                    </div>
                </div>

            </div>

        </div>
    </div>
    
    <!-- testimony section -->
    <div class="py-20">
         <?php get_template_part('template-parts/content','testimonial');?>

    </div>
	
    <!-- CTA section -->
    <section class="bg-cta text-white bg-center bg-no-repeat bg-cover">
        <div class="max-w-screen-xl px-4 py-24 mx-auto lg:items-center lg:flex">
            <div class="max-w-3xl mx-auto text-center">
            <h3 class="text-3xl font-extrabold sm:text-4xl capitalize leading-6">Discover what Duromedia Academy has to offer.</h3>

            <div class="flex flex-wrap justify-center gap-4 mt-8">
                <a href="<?php get_site_url() ?>/all-programmes" class="block w-full px-12 py-3 text-base font-medium text-white bg-primary border border-primary rounded sm:w-auto active:text-opacity-75 hover:bg-transparent hover:text-white focus:outline-none focus:ring">
                Get Started
                </a>
            </div>
            </div>
        </div>
    </section>


    <!-- instructor section -->
 	<?php get_template_part('template-parts/content','instructor');?>

    <?php get_footer(); ?>