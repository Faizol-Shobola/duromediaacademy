<?php get_header(); ?>

    <!-- <div class="bg-gray-100 py-14">
        <div class="cont grid md:grid-cols-2 gap-10 h-">
            <div class="md:col-span-1">
                <div class="h-30">
                    <img src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/04';?>/balloons.png" alt="Search Image" class="wow slideInLeft w-auto h-auto" width="600" height="300">
                </div>
            </div> 
            <div class="col-span-1 pt-5">
                <div class="title p-2">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold capitalize">celebrating</h1>
                </div>
                
                <div class="sub-title py-3">
                    <p class="text-xl">
                        <span class="font-medium">The biggest project from our  <span class="text-secondary">amiable students</span> is the <span class="text-secondary capitalize"> duromedia academy website</span></span></p>
                    <p class="text-xl pt-3"> So what are you still waiting for</p>
                </div>
				<div class="button pt-5">
						<a href=" <?php get_site_url() ?>/masterclass" class="btn-primary hover:bg-primary md:text-2xl">get started.</a>
					</div>
            </div>
        </div>
    </div> -->

    <!--  -->
    <section class="text-white bg-gray-700">
        <div class="max-w-screen-xl px-4 py-32 mx-auto lg:items-center lg:flex">
            <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-3xl font-extrabold sm:text-5xl">
                Understand User Flow.

                <span class="sm:block">
                Increase Conversion.
                </span>
            </h1>

            <p class="max-w-xl mx-auto mt-4 sm:leading-relaxed sm:text-xl">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus numquam ea!
            </p>

            <div class="flex flex-wrap justify-center gap-4 mt-8">
                <a class="block w-full px-12 py-3 text-sm font-medium text-white bg-blue-600 border border-blue-600 rounded sm:w-auto active:text-opacity-75 hover:bg-transparent hover:text-white focus:outline-none focus:ring" href="/get-started">
                Get Started
                </a>

                <a class="block w-full px-12 py-3 text-sm font-medium text-white border border-blue-600 rounded sm:w-auto hover:bg-blue-600 active:bg-blue-500 focus:outline-none focus:ring" href="/about">
                Learn More
                </a>
            </div>
            </div>
        </div>
    </section>

    <!--  -->
   
    <!-- Project Template -->
    <div class="project py-16">
        <!-- <h2 class="font-semibold capitalize text-5xl pt- text-center">all project</h2> -->
        <div class="cont">
            <div class="grid md:grid-cols-2 gap-10">
                <?php get_template_part('includes/section','projects');?>
            </div>
        </div>
		 <div class="box pagination-box flex justify-around py-10 " role="navigation" aria-label="Pagination Navigation">
                <?php previous_posts_link();?>
                <?php next_posts_link();?>
            </div>
    </div>
<?php get_footer(); ?>