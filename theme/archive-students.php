<?php
/**
 * The template for displaying Students pages
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package duromediaacademy
 */

get_header();
?>

    <div class="breadcrum flex items-center justify-center min-h44 h-40 md:h-44 px-8 bg-secondary">
        <div class="title text-center">
            <h1 class="breadcrumb md:text-6xl">Students</h1>
        </div>
    </div>
    
        <div class="students py-10">
            <div class="cont">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <?php get_template_part('template-parts/content','students');?>
                </div>
				 <div class="box pagination-box flex justify-around py-10 " role="navigation" aria-label="Pagination Navigation">
                <?php previous_posts_link();?>
                <?php next_posts_link();?>
            </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>