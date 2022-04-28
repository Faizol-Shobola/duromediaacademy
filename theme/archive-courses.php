<?php
/**
 * The template for displaying Courses pages
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package duromediaacademy
 */

get_header();
?>

    <div class="breadcrum flex items-center justify-center min-h44 h-40 md:h-44 px-8 bg-secondary">
        <div class="title text-center">
            <h1 class="breadcrumb md:text-6xl">Courses</h1>
        </div>
    </div>

    <div class="course">
        <div class="cont py-14">
            <div class="md:grid grid-cols-2 gap-y-10 md:gap-x-10 w-full">

                <?php get_template_part('template-parts/content','courses');?>
               
            </div>
        </div>
    </div>

	<!-- testimonial section -->
 	<?php get_template_part('template-parts/content','testimonial');?>


<?php get_footer(); ?>
