<?php
/**
 * The template for displaying all single student
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package duromediaacademy
 */

get_header();
?>


<?php if( have_posts() ): while( have_posts() ): the_post();?>
    <section class="cont py-10 space-y-10">
        <div class="wow bounceInDown grid md:grid-cols-3 pt-7 px-2 md:py-5 shadow-xl border-opacity-10 rounded-xl border-2 border-thin border-black">
            <div class="col-span-1 flex items-center">
                <?php if(has_post_thumbnail()):?>
                    <img class="w-60 h-60 mx-auto object-cover rounded-xl border-4 border-solid border-primary" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" width="200" height="200">
                <?php endif;?>
            </div>
            <div class="col-span-1 space-y-3 my-4 md:my-0 py-3 px-2 md:px-0">
                <h2 class="text-4xl font-semibold text-primary capitalize"><?php the_title();?></h2>
                <p class=""><?php the_field('description'); ?></p>
                <p class="italic"><?php the_field('location'); ?></p>
                <div class="social-links py-2">
                    <?php $social = get_field('social_media');?>
                    <?php if( $social ): ?>
                        <a href="<?php echo esc_url( $social['github']);?>" class="github-link text-center p-2 hover:pointer hover:text-primary active:text-primary">
                            <i class="fab fa-github text-2xl"></i>
                        </a>
                        <a href="<?php echo esc_url( $social['twitter']);?>" class="twitter-link text-center p-2 hover:pointer hover:text-primary active:text-primary">
                            <i class="fab fa-twitter text-2xl"></i>
                        </a>
                        <a href="<?php echo esc_url( $social['linkedin']);?>" class="linkedin-link text-center p-2 hover:pointer hover:text-primary active:text-primary">
                            <i class="fab fa-linkedin-in text-2xl"></i>
                        </a>
                        <a href="<?php echo esc_url( $social['instagram']);?>" class="instagram-link text-center p-2 hover:pointer hover:text-primary active:text-primary">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                        <a href="<?php echo esc_url( $social['facebook']);?>" class="facebook-link text-center p-2 hover:pointer hover:text-primary active:text-primary">
                            <i class="fab fa-facebook-f text-2xl"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="grid md:grid-cols-3 gap-10">
            <main class="wow slideInLeft md:col-span-2 px-5 pb-5 h-96 md:h-80 overflow-y-auto shadow-xl border-opacity-10 rounded-xl border-2 border-thin border-black">
                <h2 class="sticky top-0 pt-5 bg-white text-4xl font-semibold text-primary capitalize">about</h2>
                <p class="pt-5"><?php the_content();?></p>
            </main>
            <aside class="wow slideInRight md:col-span-1 p-5 overflow-y-auto h-96 md:h-80 shadow-xl border-opacity-10 rounded-xl border-2 border-thin border-black">
                <h2 class="text-4xl font-semibold text-primary capitalize pb-5">skill</h2>
                <div class="">
                    <?php
                        $skills = get_field('skills');
                        if( $skills ): ?>
                        <ul>
                            <?php foreach( $skills as $skill ): ?>
                                <li><i class="fas fa-check-circle text-lg text-primary pr-2"></i><?php echo $skill; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </aside>
        </div>
        <blockquote class="wow flipInX p-5 shadow-xl border-opacity-10 rounded-xl border-2 border-thin border-black">
            <h2 class="text-4xl font-semibold text-primary capitalize">Testimony</h2>
            <p class="text-lg italic p-3 md:p-8 font-semibold text-center"><?php the_field('testimony'); ?></p>
        </blockquote> 
        <div class="wow bounceInUp px-2 py-3 md:p-6 shadow-xl border-opacity-10 rounded-xl border-2 border-thin border-black">
            <h2 class="text-4xl pb-5 font-semibold text-primary capitalize">Projects</h2>
            <div class="owl-carousel owl-theme project-slide">
                <?php $projects = get_field('projects');?>
                <?php if($projects):?>
                    <?php foreach($projects as $post):?> 
                        <?php setup_postdata($post);?>
                        <figure class="md:mx-3 rounded-xl  border-opacity-10 overflow-hidden border-2 border-thin border-black">
                            <?php if(has_post_thumbnail()):?>
                                <img class="w-full h-72 mx-auto object-scale-down" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" width="384" height="512">
                            <?php endif;?>
                            <div class="pt-6 text-center space-y-4 p-8">
                                <figcaption class="font-medium">
                                    <h3 class="text-xl font-semibold">
                                        <?php the_title(); ?>
                                    </h3>
                                    <div class="my-5 text-center">
                                        <a href="<?php the_permalink(); ?>" class="btn-primary capitalize">view project</a>
                                    </div>
                                </figcaption>
                            </div>
                        </figure>
                    <?php  wp_reset_postdata(); endforeach;?>
                <?php endif;?>
            </div>
        </div>
    </section>
<?php endwhile; else: endif; ?>

<?php get_footer();?>
