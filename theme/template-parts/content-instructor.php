     <!-- Instructor section -->
     <?php $query_args = array(
        'post_type' => 'instructors',
        // 'posts_per_page' => 5,
        'order' => 'ASC',
    );

    $query = new WP_Query( $query_args ); ?>

	<div class="testimonial py-20";>
            <div class="title pb-7 text-center">
                <h2 class="capitalize text-3xl font-bold">Meet the instructors</h2>
            </div>
			<div  class="flex justify-center cont py-8 owl-carousel owl-theme instructor-slide">
			 <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				<!-- <div class="flex items-center justify-center flex-col text-center h-auto mx-5">
					
                    <div class="flex justify-center w-full h-full overflow-hidden mx-auto ">
                        <?php if(has_post_thumbnail()):?>

                        <img src="<?php the_post_thumbnail_url();?>"alt="<?php the_title();?>" data-wow-delay=".3s" class="wow fadeIn rounded-full w-3/5 h-3/5 object-cover object-top">

                        <?php endif;?>                
                    </div>
					<div class="py-3 wow flipInY" data-wow-delay=".8s">
						<h4 class="capitalize font-bold text-2xl text-primary"><?php the_title(); ?></h4>
                        <p class="text-lg text-secondary font-semibold"><?php the_field('subject'); ?></p>
					</div>

				</div> -->




                <a class="relative block bg-black group mx-1 md:mx-5" href="">
                    <?php if(has_post_thumbnail()):?>
                        <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="absolute object-top inset-0 object-cover w-full h-full transition-opacity  group-hover:opacity-50"/>
                    <?php endif;?> 
                    <div class="relative p-8">
                        <p class="text-sm font-medium tracking-widest text-secondary uppercase"><?php the_field('subject'); ?></p>

                        <p class="text-2xl font-bold text-white"><?php the_title(); ?></p>

                        <div class="mt-40">
                            <div class="md:transition-all transform translate-y-8 opacity-0  group-hover:opacity-100 group-hover:translate-y-0">
                                <p class="text-sm text-white">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis
                                    perferendis hic asperiores quibusdam quidem voluptates doloremque
                                    reiciendis nostrum harum. Repudiandae?
                                </p>
                            </div>
                        </div>
                    </div>
                </a>



			<?php endwhile; else: endif; ?>

			</div>
		</div> 
