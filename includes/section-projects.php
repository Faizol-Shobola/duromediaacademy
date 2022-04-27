<?php if( have_posts() ): while( have_posts() ): the_post();?>
    <figure class="wow flipInX md:grid grid-cols-3 my-12 h-72 shadow-xl border-opacity-10 rounded-xl md:p-0 overflow-hidden border-2 border-thin border-black">
        <div class="col-span-1 w-full h-full overflow-hidden">
			<a href="<?php the_permalink(); ?>">
				<?php if(has_post_thumbnail()):?>
					<img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="w-full h-full object-cover">
				<?php endif;?>
			</a>
            
        </div>
        <div class="md:relative col-span-2 md:p-6 text-left space-y-2 p-5">
            <h3 class="text-4xl font-bold capitalize"><a href="<?php the_permalink()?>"><?php the_title();?></a></h3>
            <blockquote class="pb-4 overflow-hidden">
                <p class="text-lg font-normal">
                    <?php the_field('description'); ?>
                </p>
            </blockquote>
            <figcaption class="md:absolute md:bottom-5 font-medium text-sm ">
                <div class="text-cyan-600 md:pb-3">
                    
                    <p class="capitalize leading-loose">
                    </p>
                </div>
                <div class="">
                    <div class="button py-3">
                        <a href="<?php the_permalink(); ?>" class="underline text-primary capitalize hover:text-secondary">view project ></a>
                    </div>
                    <p class="capitalize leading-loose">
                        <span class="mr-2 text-secondary">contributors</span>
                        <?php
                            $args = [

                                'post_type' => 'students',
                                'meta_query' => [
                                    [
                                        'key' => 'projects',
                                        'value' => '"' . get_the_ID() . '"',
                                        'compare' => 'LIKE',
                                    ]
                                ]
                            ];
                            $students = get_posts($args);
                        ?>
                        <?php if($students):?>
                            <?php foreach($students as $post):?>
                                <?php setup_postdata($post);?>
                                <a href="<?php echo the_permalink();?>" class="rounded-2xl hover:text-white hover:border-secondary hover:bg-secondary px-2 py-1 border-2 "><?php echo the_title();?></a>
                            <?php wp_reset_postdata(); endforeach;?>
                        <?php endif;?>
                    </p>
                </div>
            </figcaption>
        </div>
    </figure>
<?php endwhile; else: endif; ?>



    <!-- <p class="capitalize leading-loose"><span class="mr-2 text-secondary">contributors</span><span class="rounded-2xl px-2 py-1 border-2 ">olanrewaju</span> <span class="rounded-2xl px-2 py-1 border-2 ">kenny</span> <span class="rounded-2xl px-2 py-1 border-2 ">olanrewaju</span> </p> -->
