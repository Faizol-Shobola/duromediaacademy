<?php
/**
 * The template for displaying single Courses pages
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package duromediaacademy
 */

get_header();
?>
<section class="relative bg-black text-white">
    <?php if(has_post_thumbnail()):?>
  <img
    class="absolute inset-0 object-[75%] sm:object-[25%] object-cover w-full h-full opacity-50"
    src="<?php the_post_thumbnail_url();?>"
    alt="<?php the_title();?>"
  />
  <?php endif;?>

  <div class="relative cont px-4 py-32 mx-auto lg:items-center lg:flex">
    <div class="max-w-xl text-center sm:text-left">
      <h1 class="text-3xl font-extrabold sm:text-5xl"><?php the_title();?></h1>
      <p class="max-w-lg mt-4 sm:leading-relaxed sm:text-xl"><?php the_field('short-description') ?></p>
    </div>
  </div>
</section>
<div class="sticky top-20 z-40 px-4 py-4  bg-neutral sm:justify-center sm:gap-12 sm:items-center sm:flex sm:px-6 lg:px-8">
  <p class="font-bold text-center sm:text-left text-lg">
  Take a step forward
  </p>

  <a
    class="block px-6 py-3 mt-4 text-base font-semibold text-center text-white transition bg-primary rounded-md sm:mt-0 hover:bg-primary active:text-white/90 focus:outline-none focus:ring capitalize"
    href="/alpinejs">enroll now
  </a>
</div>

<div class="course">

    <?php get_template_part('template-parts/content','coursessingle');?>

</div>

	<!-- testimonial section-->
 	<?php // get_template_part('template-parts/content','testimonial');?> 


<?php get_footer(); ?>

