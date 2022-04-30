<div class="grid gap-y-10 py-20">

    <div class="cont grid sm:grid-cols-2 md:grid-cols-3 gap-10 sm:h-72">
        <div class="bg-neutral h-full p-10 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />   
            </svg>

            <h3 class="mt-3 text-2xl font-bold ">Enrollment Deadline:</h3>

            <p class="mt-3 font-medium text-lg"> <?php the_field('deadline'); ?> </p>
        </div>
        <div class="bg-neutral h-full p-10 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />   
            </svg>

            <h3 class="mt-3 text-2xl font-bold ">Estimated Duration:</h3>

            <p class="mt-3 font-medium text-lg"> <?php the_field('duration'); ?>  </p>
        </div>
        <div class="bg-neutral h-full p-10 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />   
            </svg>

            <h3 class="mt-3 text-2xl font-bold ">Price:</h3>

            <p class="mt-3 font-medium text-lg"><?php the_field('price'); ?></p>
        </div>
        
    </div>
    <div class="cont grid sm:grid-cols-2 gap-10 course-card w-full">
        <div class="bg-neutral h-full p-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />   
            </svg>

            <h3 class="mt-3 text-2xl font-bold text-center">Qualifying for:</h3>

            <!-- <p class="mt-3 font-medium text-lg"> </p> -->
            <ul role="list" class="marker:text-secondary mt-3 list-outside list-disc">
                
                <?php the_field('qualify'); ?>
            </ul>
        </div>
        <div class="bg-neutral h-full p-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />   
            </svg>

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
            <h2 class="capitalize text-3xl font-bold">Hear from Udacity Students</h2>
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
            <img src="https://images.unsplash.com/photo-1599481238505-b8b0537a3f77?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1789&q=80" alt="" class="object-cover object-top w-full h-60">
        </div>
        <div class="flex flex-col sm:items-center sm:justify-center gap-y-3">
            <div class="md:border-b border-slate-300 md:py-4 grid sm:grid-cols-2 gap-x-8 gap-y-3 sm:gap-y-0">
                <div class="flex items-center gap-4 border-2 border-black p-4 md:p-0 md:border-0">
                    <img loading="lazy"  src="https://alx-t.com/wp-content/uploads/2022/03/icon-sa-4.png" alt="" class="object-scale-down w-12 h-12 lg:w-16 lg:h-16">
                    <h4 class="font-semibold text-lg lg:text-xl">Certified Certificate</h4>
                </div>
                <div class="flex items-center gap-4 border-2 border-black p-4 md:p-0 md:border-0">
                    <img loading="lazy"  src="https://alx-t.com/wp-content/uploads/2022/03/icon-sa-4.png" alt="" class="object-scale-down w-12 h-12 lg:w-16 lg:h-16">
                    <h4 class="font-semibold text-lg lg:text-xl">Certified Certificate</h4>
                </div>
            </div>
            <div class="md:border-b border-slate-300 md:py-4 grid sm:grid-cols-2 gap-x-8 gap-y-3 sm:gap-y-0">
                <div class="flex items-center gap-4 border-2 border-black p-4 md:p-0 md:border-0">
                    <img loading="lazy"  src="https://alx-t.com/wp-content/uploads/2022/03/icon-sa-4.png" alt="" class="object-scale-down w-12 h-12 lg:w-16 lg:h-16">
                    <h4 class="font-semibold text-lg lg:text-xl">Certified Certificate</h4>
                </div>
                <div class="flex items-center gap-4 border-2 border-black p-4 md:p-0 md:border-0">
                    <img loading="lazy"  src="https://alx-t.com/wp-content/uploads/2022/03/icon-sa-4.png" alt="" class="object-scale-down w-12 h-12 lg:w-16 lg:h-16">
                    <h4 class="font-semibold text-lg lg:text-xl">Certified Certificate</h4>
                </div>
            </div>

        </div>

    </div>
</div>