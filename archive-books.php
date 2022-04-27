<?php get_header(); ?>

    <div class="breadcrum flex items-center justify-center min-h44 h-40 md:h-44 px-8 bg-secondary">
        <div class="title text-center">
            <h1 class="breadcrumb md:text-6xl">Books</h1>
        </div>
    </div>
    
    <div class="books wrapper">
        <div class="books py-10 md:py-16">
            <div class="cont ">
                <div class="md:grid md:grid-cols-2 lg:grid-cols-3 gap-x-13  md:gap-x-10 gap-y-10 sm:px-6 text-center">

                <?php get_template_part('includes/section','books');?>
                
                </div>
            </div>
        </div>
    </div>

	<!-- testimonial section -->
 	<?php get_template_part('includes/section','testimonial');?>

<?php get_footer(); ?>
