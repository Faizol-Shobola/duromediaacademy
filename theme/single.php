<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package duromediaacademy
 */

get_header();
?>

<?php get_template_part('template-parts/content','blogcontent');?>

    <?php setPostViews(get_the_ID());?>


<?php get_footer() ?>