	
<?php /* Template Name: Breadcrumb template */ ?>
<?php get_header(); ?>

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
				<?php the_content();?>

			</div>
		</div>
	</div>

    <?php get_footer(); ?>