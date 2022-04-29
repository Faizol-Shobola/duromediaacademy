<?php
/**
 * The template for displaying Tools pages
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package duromediaacademy
 */

get_header();
?>

    <div class="breadcrum flex items-center justify-center min-h44 h-40 md:h-44 px-8 bg-secondary">
        <div class="title text-center">
            <h1 class="breadcrumb md:text-6xl">Tools</h1>
        </div>
    </div>
    
    <div class="tools py16">
        <div class="max-w-4xl mx-auto px-8">
            <div class="flex justify-center">
                <div class="p-0 sm:px-2 md:p-7 ">
                    <p class="text-xl text-center py-3 px-4 ">Get powerful branding insights + other undeniably cool things (like this).</p>
                </div>

            </div>
            <div class="tool">
                <?php get_template_part('template-parts/content','tools');?>
            
            </div>
        </div>
    </div>

<?php get_footer(); ?>