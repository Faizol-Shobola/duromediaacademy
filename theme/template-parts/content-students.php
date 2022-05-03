<?php if( have_posts() ): while( have_posts() ): the_post();?>


    <figure class="wow flipInY rounded-xl p-8 shadow-xl border-opacity-10 overflow-hidden border-2 border-thin border-black">
        <?php if(has_post_thumbnail()):?>
            <img class="w-40 h-40 rounded-full mx-auto object-cover" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" width="384" height="512">
        <?php endif;?>
        <div class="pt-6 text-center space-y-4">
                <figcaption class="">
                <p class="font-medium text-primary ">
                    <?php the_field('description'); ?>
                </p>
                <h3 class="text-lg font-semibold">
                    <?php the_title(); ?>
                </h3>
                <div class="my-5 text-center">
                    <a href="<?php the_permalink(); ?>" class="btn-primary capitalize">view profile</a>
                </div>
            </figcaption>
        </div>
    </figure>
<?php endwhile; else: endif; ?>