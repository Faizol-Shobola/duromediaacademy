<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package duromediaacademy
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div>
			<?php
			dmacademy_posted_on();
			dmacademy_posted_by();
			?>
		</div>
		<?php endif; ?>
	</header>

	<?php dmacademy_post_thumbnail(); ?>

	<div>
		<?php the_excerpt(); ?>
	</div>

	<footer>
		<?php dmacademy_entry_footer(); ?>
	</footer>
</article><!-- #post-<?php the_ID(); ?> -->
