<?php if( have_posts() ): while( have_posts() ): the_post();?>
    <div class="wow flipInY course col-span-1 mx-0 px-7 py-10 md:py-0 lg:py-10 shadow-xl">
        <div class=" overflow-hidden w-full h-72 md:h-2/5 lg:h-72 rounded-xl flex justify-center">
           
            <?php if(has_post_thumbnail()):?>

            <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="w-full h-auto object-scale-down">
            
            <?php endif;?>


        </div>
        <div class="content">
            <div class="title text-3xl py-1">
                <h1 class="capitalize font-bold text-center"><?php the_title(); ?></h1>
            </div>
            <div class="text-center">
                <p class="text-justify"><?php the_excerpt();?></p>
            </div>
            <div class="mt-5 text-center">
                <a href="<?php the_field('button_link'); ?>" class="btn-primary-sm"><?php the_field('button_text'); ?></a>
            </div>
        </div>

    </div>

<?php endwhile; else: endif; ?>