<?php get_header(); ?>
     
<?php if( have_posts() ): while( have_posts() ): the_post();?>
        <div class="sticky top-20 bg-white p-6 md:p-8 space-y-3 mdspace-y-4 wow bounceInDown">
                <div class="flex flex-wrap md:justify-between gap-3">
                    <h2 class="text-4xl md:text-5xl font-semibold text-primary capitalize"><?php the_title(); ?></h2>
                    <p class="">
                        <a href="<?php the_field('project_link');?>" class="flex project-link items-center px-3 bg-primary text-white py-1 projectlink text-center hover:pointer hover:text-primary active:text-primary hover:bg-white rounded-2xl hover:border-primary border-2 ">
                            <i class="fas fa-globe text-2xl"></i>
                            <span class="pl-2 capitalize">view project</span>
                        </a>
                    </p>
                </div>
                <div class="flex flex-wrap md:justify-between gap-3">
                    <div class="text-gray-500 text-lg">
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
                    <div class="">
                        <?php
                            $projecttype = get_field('project_type');
                            if( $projecttype ): ?>
                                <p class="capitalize font-semibold"> project type:
                                <?php foreach( $projecttype as $type ): ?>
                                    <span class="px-1 font-medium"><?php echo $type; ?></span>
                                <?php endforeach; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
        </div>
    <section class="cont py-5 ">
        
        <main class="px-5 pb-5">
            <?php if(has_post_thumbnail()):?>
                <img class="wow slideInLeft flex justify-center object-cover w-96 h-96 py-5" data-wow-delay=".2s" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" width="1024" height="1000">
            <?php endif;?>
            <div class="projectcontent">
                <p class=""><?php the_content();?></p>
            </div>
        </main>
            
    </section>
<?php endwhile; else: endif; ?>

<?php get_footer();?>