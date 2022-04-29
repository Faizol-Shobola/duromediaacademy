<?php
/**
 * The template for displaying Projects pages
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package duromediaacademy
 */

get_header();
?>

    <section class="text-white bg-gray-700">
        <div class="max-w-screen-xl px-4 py-32 mx-auto lg:items-center lg:flex">
            <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-3xl font-extrabold sm:text-5xl">Understand User Flow.
                <span class="sm:block">Increase Conversion.</span>
            </h1>

            <p class="max-w-xl mx-auto mt-4 sm:leading-relaxed sm:text-xl">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus numquam ea!
            </p>

            <div class="flex flex-wrap justify-center gap-4 mt-8">
                <a class="block w-full px-12 py-3 text-sm font-medium text-white bg-blue-600 border border-blue-600 rounded sm:w-auto active:text-opacity-75 hover:bg-transparent hover:text-white focus:outline-none focus:ring" href="/get-started">
                Get Started
                </a>

                <a class="block w-full px-12 py-3 text-sm font-medium text-white border border-blue-600 rounded sm:w-auto hover:bg-blue-600 active:bg-blue-500 focus:outline-none focus:ring" href="/about">
                Learn More
                </a>
            </div>
            </div>
        </div>
    </section>

   
    <!-- Project Template -->
    <div class="project py-16">
        <!-- <h2 class="font-semibold capitalize text-5xl pt- text-center">all project</h2> -->
        <div class="cont">
            <div class="grid md:grid-cols-2 gap-10">
                <?php get_template_part('template-parts/content','projects');?>
            </div>
        </div>
		 <div class="box pagination-box flex justify-around py-10 " role="navigation" aria-label="Pagination Navigation">
                <?php previous_posts_link();?>
                <?php next_posts_link();?>
            </div>
    </div>
<?php get_footer(); ?>