<?php if( have_posts() ): while( have_posts() ): the_post();?>
    <a href="<?php the_permalink(); ?>" class="relative flex items-end w-full bg-black h-96 group">
    <?php if(has_post_thumbnail()):?>
        <img
            alt="<?php the_title();?>"
            src="<?php the_post_thumbnail_url();?>"
            class="absolute inset-0 object-cover w-full h-full hover:scale-105 transition transition-all duration-200 ease-in-out"
        />
        <?php endif;?>

        <div class="relative w-full p-6 tracking-widest text-center text-white transition-colors bg-primary sm:w-2/3 group-hover:bg-secondary">
            <strong class="text-lg uppercase"><?php the_title();?></strong>
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
                    <p class="mt-1 text-xs font-medium uppercase"><?php echo the_title();?></p>
                <?php wp_reset_postdata(); endforeach;?>
            <?php endif;?>
        </div>
    </a>
<?php endwhile; else: endif; ?>
