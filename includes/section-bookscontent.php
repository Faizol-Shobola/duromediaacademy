<?php if( have_posts() ): while( have_posts() ): the_post();?>
    <div class="w-full flex justify-center md:col-span-3">
        <div class=" overflow-hidden rounded-lg my-3 w-11/12 md:h-3/5 lg:h-4/5">
        <?php if(has_post_thumbnail()):?>

            <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="md:w-full h-auto md:h-full">

        <?php endif;?>      

        </div>
    </div>
    <div class="md:col-span-4 pb-5">
        <div class="title">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold pb-7"><?php the_title(); ?></h1>
        </div>
        <div class="sub-title">
            <p class="text-xl py-3">
            <?php the_content(); ?>
            </p>
        </div>
        <div class="button pt-5">
            <a href="<?php the_field('button_link'); ?>" class="text-white bg-primary rounded-md font-medium py-2 px-10 text-md mt-5 md:w-auto"><?php the_field('button_text'); ?></a>
        </div>
    </div>
    
<?php endwhile; else: endif; ?>
    

                
          