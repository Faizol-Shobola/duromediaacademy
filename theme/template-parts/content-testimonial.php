	        <!-- testimonials section -->
        <?php $query_args = array(
        'post_type' => 'students',
//         'posts_per_page' => 5,
        'order' => 'ASC',
    );

    $query = new WP_Query( $query_args ); ?>

<div class="max-w-5xl px-4 mx-auto owl-carousel owl-theme testimonial-slide">
	<?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		<section class="p-8 bg-neutral rounded-lg mx-1">
			<div class="grid grid-cols-1 gap-12 sm:grid-cols-3 sm:items-center">
				<div class="relative">
					<div class="aspect-w-1 aspect-h-1">
						<?php if(has_post_thumbnail()):?>
							<img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="object-cover rounded-lg" />
						<?php endif;?>
					</div>

					<div
					class="absolute inline-flex px-4 py-2 bg-white rounded-lg shadow-xl -bottom-4 -right-4"
					>
					<span class="inline-block w-12 h-10 bg-neutral rounded-lg"></span>
					</div>
				</div>

				<blockquote class="sm:col-span-2">
					<p class="text-lg font-medium"><?php the_field('testimony'); ?></p>

					<cite class="inline-flex items-center mt-8 not-italic">
					<span class="hidden w-6 h-px bg-gray-400 sm:inline-block"></span>
					<p class="text-sm text-gray-500 uppercase sm:ml-3">
						<strong><?php the_title(); ?></strong>, <span class="text-secondary"><?php the_field('description'); ?></span>
					</p>
					</cite>
				</blockquote>
			</div>
		</section>
  	<?php endwhile; else: endif; ?>
</div>