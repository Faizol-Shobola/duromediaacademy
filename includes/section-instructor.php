     <!-- Instructor section -->
     <?php $query_args = array(
        'post_type' => 'instructors',
        // 'posts_per_page' => 5,
        'order' => 'ASC',
    );

    $query = new WP_Query( $query_args ); ?>

	<div class="testimonial py-12 bg-hero-pattern";>
            <div class="title pb-7 text-center">
                <h2 class="text-4xl md:text-6xl font-bold capitalize text-primary">meet the instructors</h2>
            </div>
			<div  class="flex justify-center cont py-8 owl-carousel owl-theme instructor-slide">
			 <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="flex items-center justify-center flex-col text-center h-auto mx-5">
					
                    <div class="flex justify-center w-full h-full overflow-hidden mx-auto ">
                        <?php if(has_post_thumbnail()):?>

                        <img src="<?php the_post_thumbnail_url();?>"alt="<?php the_title();?>" data-wow-delay=".3s" class="wow fadeIn rounded-full w-3/5 h-3/5 object-cover object-top">

                        <?php endif;?>                
                    </div>
					<div class="py-3 wow flipInY" data-wow-delay=".8s">
						<h4 class="capitalize font-bold text-2xl text-primary"><?php the_title(); ?></h4>
                        <p class="text-lg text-secondary font-semibold"><?php the_field('subject'); ?></p>
					</div>

				</div>
			<?php endwhile; else: endif; ?>

			</div>
		</div> 