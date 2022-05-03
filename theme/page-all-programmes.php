<?php
/**
 * The template for displaying All programme page
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
    <!-- quick-guide section -->
    <div class="guide py-20 ">
        <div class="cont  grid sm:grid-cols-2 gap-12 sm:px-6 ">
            
            <?php get_template_part('template-parts/content','coursecard');?>

        </div>
    </div>
   


<?php get_footer(); ?>