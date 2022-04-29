<?php get_header(); ?>

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
            
            
            <div class="relative course-card gap-4 h-96 md:h-0 bg-slate-800 p-10">
                <span class="absolute left-12 top-12 rounded-full px-3 py-1.5 bg-green-100 text-green-600 font-medium text-sm">coming soon</span>
                <div class="absolute left-12 bottom-12 ">
                    <h3 class="text-3xl text-white font-bold">Crash Course</h3>
                    <p class="text-white font-medium text-lg py-4 md:py-5">For African youth with a background in Data, Cloud or Programming. (Prerequisites apply*)</p>
                    <a href="appointment.html" class="capitalize inline-flex px-6 py-2 font-medium rounded-sm bg-pink-400 text-purple-900">explore all courses</a>
                </div>
            </div>
            <div class="relative course-card gap-4 h-96 md:h-0 bg-slate-800 p-10">
                <span class="absolute left-12 top-12 rounded-full px-3 py-1.5 bg-green-100 text-green-600 font-medium text-sm">coming soon</span>
                <div class="absolute left-12 bottom-12 ">
                    <h3 class="text-3xl text-white font-bold">Crash Course</h3>
                    <p class="text-white font-medium text-lg py-4 md:py-5">For African youth with a background in Data, Cloud or Programming. (Prerequisites apply*)</p>
                    <a href="appointment.html" class="capitalize inline-flex px-6 py-2 font-medium rounded-sm bg-pink-400 text-purple-900">explore all courses</a>
                </div>
            </div>

        </div>
    </div>
   


<?php get_footer(); ?>