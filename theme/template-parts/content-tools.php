<?php if( have_posts() ): while( have_posts() ): the_post();?>

    <div class="wow flipInX md:grid md:grid-cols-9 py-8 border-t-2  border-gray-100 gap-x-5">
        <div class="col-span-3 flex justify-center pb-5 md:pb-0 w-full h-full">
        <?php if(has_post_thumbnail()):?>

        <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="w-4/5 h-3/5 object-contain">

        <?php endif;?>
        </div>
        <div class="col-span-6 text-lg">
            <p class=""><?php the_content(); ?> </p>
        </div>
    </div>

<?php endwhile; else: endif; ?>
