<div class="grid gap-y-10 py-20">

    <div class="cont grid sm:grid-cols-2 md:grid-cols-3 gap-10 sm:h-72">
        <div class="bg-neutral h-full p-10 flex flex-col items-center text-center">
            <img loading="lazy"  src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/04/enroll.png';?>" alt="" class="object-scale-down w-12 h-12 lg:w-16 lg:h-16">
            <h3 class="mt-3 text-2xl font-bold ">Enrollment Deadline:</h3>

            <p class="mt-3 font-medium text-lg"> <?php the_field('deadline'); ?> </p>
        </div>
        <div class="bg-neutral h-full p-10 flex flex-col items-center text-center">
            <img loading="lazy"  src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/04/time.png';?>" alt="" class="object-scale-down w-12 h-12 lg:w-16 lg:h-16">
            <h3 class="mt-3 text-2xl font-bold ">Estimated Duration:</h3>

            <p class="mt-3 font-medium text-lg"> <?php the_field('duration'); ?>  </p>
        </div>
        <div class="bg-neutral h-full p-10 flex flex-col items-center text-center">
            <img loading="lazy"  src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/04/price.png';?>" alt="" class="object-scale-down w-12 h-12 lg:w-16 lg:h-16">
            <h3 class="mt-3 text-2xl font-bold ">Price:</h3>

            <p class="mt-3 font-medium text-lg"><?php the_field('price'); ?></p>
        </div>
        
    </div>
    <div class="cont grid sm:grid-cols-2 gap-10 course-card w-full">
        <div class="bg-neutral h-full p-10 md:p-x-16 flex flex-col items-center">
            <img loading="lazy"  src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/04/qualify.png';?>" alt="" class="object-scale-down w-12 h-12 lg:w-16 lg:h-16">
            <h3 class="mt-3 text-2xl font-bold text-center">Qualifying for:</h3>

            <!-- <p class="mt-3 font-medium text-lg"> </p> -->
            <ul role="list" class="marker:text-secondary mt-3 list-outside list-disc">
                
                <?php the_field('qualify'); ?>
            </ul>
        </div>
        <div class="bg-neutral h-full p-10 md:p-x-16 flex flex-col items-center">
            <img loading="lazy"  src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/04/prerequisites.png';?>" alt="" class="object-scale-down w-12 h-12 lg:w-16 lg:h-16">
            <h3 class="mt-3 text-2xl font-bold text-center">Prerequisites:</h3>

            <!-- <p class="mt-3 font-medium text-lg">  </p> -->
            <ul role="list" class="marker:text-secondary mt-3 list-outside list-disc">
                
                <?php the_field('prerequisites'); ?>
            </ul>
        </div>
        
    </div>

</div>


<!-- what you will learn section-->
<div class="bg-neutral py-20">
    <div class="cont">
        <div class="flex items-center justify-center text-center pb-10">
            <h2 class="capitalize text-3xl font-bold">What will you learn?</h2>
        </div>
        <div class="flex items-center flex-col">
            <div class="block md:grid md:grid-cols-9">
                <div class="col-span-2">
                </div>
                <div class="col-span-5">
                    <div class="flex gap-x-4 py-1">
                        
                        <?php  the_content();?> 
                    </div>   
                </div>
                <div class="col-span-2">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- testimonial section-->
<div class="py-20">
    <div class="cont">

        <div class="flex items-center justify-center text-center pb-10">
            <h2 class="capitalize text-3xl font-bold">hear from our students</h2>
        </div>
        <?php  get_template_part('template-parts/content','testimonial');?> 
    </div>
</div>

<!-- why choose us -->
<div class="py-20">
    <div class="cont grid md:grid-cols-2 gap-12 sm:px-6">
        
        <div class="w-full lg:w-4/5">
            <span class="font- text-base">Why should you study with Duromedia Academy?</span>
            <h3 class="text-3xl font-bold py-4 md:py-5">Job-ready talent Superior outcomes</h3>
            <img src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/04/duromediaacademycertificate.png';?>" alt="" class="object-cover p-4 border border-black object-top w-full h-60">
        </div>
        <div class="flex flex-col sm:items-center sm:justify-center gap-y-3">
            <div class="md:border-b border-slate-300 md:py-4 grid sm:grid-cols-2 gap-x-8 gap-y-3 sm:gap-y-0">
                <div class="flex items-center gap-4 border-2 border-black p-4 md:p-0 md:border-0">
                    <img loading="lazy"  src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/04/certify.png';?>" alt="" class="object-scale-down w-12 h-12 lg:w-16 lg:h-16">
                    <h4 class="font-semibold text-lg lg:text-xl">Certified Certificate</h4>
                </div>
                <div class="flex items-center gap-4 border-2 border-black p-4 md:p-0 md:border-0">
                    <img loading="lazy"  src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/04/growth.png';?>" alt="" class="object-scale-down w-12 h-12 lg:w-16 lg:h-16">
                    <h4 class="font-semibold text-lg lg:text-xl">Career Growth</h4>
                </div>
            </div>
            <div class="md:border-b border-slate-300 md:py-4 grid sm:grid-cols-2 gap-x-8 gap-y-3 sm:gap-y-0">
                <div class="flex items-center gap-4 border-2 border-black p-4 md:p-0 md:border-0">
                    <img loading="lazy"  src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/04/project.png';?>" alt="" class="object-scale-down w-12 h-12 lg:w-16 lg:h-16">
                    <h4 class="font-semibold text-lg lg:text-xl">Real-world Projects</h4>
                </div>
                <div class="flex items-center gap-4 border-2 border-black p-4 md:p-0 md:border-0">
                    <img loading="lazy"  src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/04/mentor.png';?>" alt="" class="object-scale-down w-12 h-12 lg:w-16 lg:h-16">
                    <h4 class="font-semibold text-lg lg:text-xl">Mentors & Trainers</h4>
                </div>
            </div>

        </div>

    </div>
</div>