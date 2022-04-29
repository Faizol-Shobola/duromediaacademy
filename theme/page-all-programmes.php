<?php
/**
 * The template for displaying All programme page
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package duromediaacademy
 */

get_header();
?>

    <div class="breadcrum flex items-center justify-center min-h44 h-40 md:h-44 px-8 bg-secondary">
        <div class="title text-center">
            <h1 class="breadcrumb md:text-6xl">
                <?php the_title(); ?>
            </h1>
        </div>
    </div>
    <!-- quick-guide section -->
    <div class="guide py-20 ">
        <div class="cont  grid sm:grid-cols-2 gap-12 sm:px-6 ">
            <!-- <div class="w-full flex justify-center items-center py-6 md:py-0">
                <div class=" overflow-hidden w-11/12 h-auto rounded-xl">
                    <img src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/04';?>/D-market.jpg" alt="" class="wow slideInLeft md:w-full h-auto">
                </div>
            </div> -->
            
            
            <div class="relative block bg-black group" href="">
                <img  src="https://www.hyperui.dev/photos/man-6.jpeg" alt="" 
                    class="absolute inset-0 object-cover w-full h-full transition-opacity opacity-75 opacity-50"
                />
                <div class="relative p-8">
                    <div class="mt-72">
                    <div class="">
                        <p class="text-2xl font-bold text-secondary capitalize">Crash course</p>
                        <p class="text-lg font-medium text-white py-6">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis
                            perferendis hic asperiores quibusdam quidem voluptates doloremque
                            reiciendis nostrum harum. Repudian72e?
                        </p>
                        <a href="appointment.html" class="capitalize px-10 py-3 font-medium text-white bg-primary border border-primary rounded active:text-opacity-75 hover:bg-transparent hover:text-white focus:outline-none focus:ring">explore all courses</a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="relative block bg-black group" href="">
                <img  src="https://www.hyperui.dev/photos/man-6.jpeg" alt="" 
                    class="absolute inset-0 object-cover w-full h-full transition-opacity opacity-75 opacity-50"
                />
                <div class="relative p-8">
                    <div class="mt-72">
                    <div class="">
                        <p class="text-2xl font-bold text-secondary capitalize">Complete bootcamp</p>
                        <p class="text-lg font-medium text-white py-6">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis
                            perferendis hic asperiores quibusdam quidem voluptates doloremque
                            reiciendis nostrum harum. Repudian72e?
                        </p>
                        <a href="appointment.html" class="capitalize px-10 py-3 font-medium text-white bg-primary border border-primary rounded active:text-opacity-75 hover:bg-transparent hover:text-white focus:outline-none focus:ring">explore all courses</a>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
   


<?php get_footer(); ?>