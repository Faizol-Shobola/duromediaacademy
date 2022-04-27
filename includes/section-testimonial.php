	        <!-- testimonials section -->
        <?php $query_args = array(
        'post_type' => 'students',
//         'posts_per_page' => 5,
        'order' => 'ASC',
    );

    $query = new WP_Query( $query_args ); ?>

	<div class="testimonial bg-white";>
			<div class="cont py-10 owl-carousel owl-theme testimonial-slide">
			 <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="flex items-center justify-center flex-col text-center text-primary">
					<div class="text-lg pb-4">
						<p><?php the_field('testimony'); ?></p>
					</div>
					<div class="rounded-full h-52 md:h-24 w-52 md:w-24 overflow-hidden mx-auto ">
				<?php if(has_post_thumbnail()):?>

				<img src="<?php the_post_thumbnail_url();?>"alt="<?php the_title();?>" class="w-full h-auto object-cover object-top">

				<?php endif;?>                </div>
					<div class="uppercase py-5 font-bold text-primary">
						<p>- <?php the_title(); ?> |<span class="text-secondary pl-1"><?php the_field('description'); ?></span></p>
					</div>

				</div>
			<?php endwhile; else: endif; ?>

			</div>
		</div>