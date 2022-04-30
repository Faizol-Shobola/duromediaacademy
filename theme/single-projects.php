<?php
/**
 * The template for displaying all single project
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package duromediaacademy
 */

get_header();
?>
     
<?php if( have_posts() ): while( have_posts() ): the_post();?>

    <div class="wrapper">
        <a id="button" class="z-10 text-center fixed bg-white rounded-sm py-0.5 px-2 hidden cursor-pointer font-body">
            <i class="fas fa-chevron-up text-2xl text-secondary "></i>
        </a>


        <!-- hero banner -->
        <div class="bg-primary relative">
            <!-- image -->
            <div class="col-span-1 h-60 md:h-72 lg:h-96 bg-black">
                <?php if(has_post_thumbnail()):?>
                    <img class="w-full h-full object-cover opacity-75" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                <?php endif;?>
            </div>
            <div class=" absolute top-1/3 md:top-1/2 md:left-1/2 left-5">
                <!-- Name -->
                <div class="title pb-5 text-white">
                    <h1 class="text-3xl font-medium py-2 uppercase font-head"><?php the_title(); ?></h1>
                    <p class="text-2xl uppercase font-body">our best services for your kids</p>

                    <!-- line -->
                    <div class="h-1.5 rounded-sm w-24 bg-white my-3"></div>
                </div>
            </div>
        </div>
        <!-- gallery -->
        <div class="cont py-12">
            <div class="grid md:grid-cols-3 gap-8">
                <!-- image 1 -->
                <div class="col-span-1">
                    <img src="https://kids.duromediaacademy.com.ng/wp-content/uploads/2021/04/Web-design.jpg" class="w-full h-auto" alt="">
                </div>
                <!-- image 2 -->
                <div class="col-span-1">
                    <img src="https://kids.duromediaacademy.com.ng/wp-content/uploads/2021/04/graphics-2.jpg" class="w-full h-auto" alt="">
                </div>
                <!-- image 3 -->
                <div class="col-span-1">
                    <img src="https://kids.duromediaacademy.com.ng/wp-content/uploads/2021/04/web-2.jpg" class="w-full h-auto" alt="">
                </div>
            </div>
        </div>
        <!-- project description -->
        <div class="cont grid md:grid-cols-9 pb-10 gap-5">
            <div class="md:col-span-3 ">
                <div class="border-2 border-gray-100 px-3 py-8 rounded-md">
                    <!-- project type -->
                    <article class=" shadow-md p-3">
                        <?php
                            $projecttype = get_field('project_type');
                            if( $projecttype ): ?>
                            <span class="text-secondary text-base uppercase font-semibold">type</span>
                            <?php foreach( $projecttype as $type ): ?>
                                <span class="text-gray-500 pl-2 text-lg uppercase"><?php echo $type; ?></span>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </article>
                    <!-- project link -->
                    <article class=" shadow-md p-3">
                        <span class="text-secondary ext-base uppercase font-semibold">link</span>
                        <a href="<?php the_field('project_link');?>" class="text-primary underline pl-2 text-lg lowercase font-body">View Project</a>
                    </article>
                    <!-- project author -->
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
                    <article class=" shadow-md p-3">
                        <span class="text-secondary text-base uppercase font-semibold">author</span>
                        <?php if($students):?>
                            <?php foreach($students as $post):?>
                                <?php setup_postdata($post);?>
                                <a href="<?php echo the_permalink();?>" class="underline text-gray-500 pl-2 text-lg uppercase font-body"><?php echo the_title();?></a>
                            <?php wp_reset_postdata(); endforeach;?>
                        <?php endif;?>
                    </article>
                </div>
            </div>
            <!-- description -->
            <div class="md:col-span-6">
                <!-- title -->
                <div class="title pb-5">
                <h1 class="text-2xl font-medium py-2 uppercase text-gray-600 font-head">description</h1>    
                <!-- line -->
                <div class="h-0.5 rounded-sm w-12 bg-secondary my-3"></div>
            </div>
            <div class="text-gray-500">
                <p class="font-body"><?php the_content();?></p>
            </div>
        </div>
    </div>


<?php endwhile; else: endif; ?>


<?php get_footer();?>