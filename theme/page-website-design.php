<?php
/**
 * The template for displaying Website design pages
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
    <div class="guide py-16 ">
        <div class="cont md:grid grid-cols-2 gap-x-10 sm:px-6 ">
            <div class="w-full flex justify-center items-center py-6 md:py-0">
                <div class=" overflow-hidden w-11/12 h-auto rounded-xl">
                    <img src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/04';?>/Web-design.jpg" alt="" class=" md:w-full h-auto">
                </div>
            </div>
            
            <div class="">
                <div class="titl">
                    <h1 class="text-3xl md:text-5xl font-bold pb-4 md:pb-7">Website Design</h1>
                </div>
                <div class="sub-title">
                    <p class="text-lg">
                    Web design is the process of planning, conceptualizing, and arranging content online. Today, designing a website goes beyond aesthetics to include the website’s overall functionality. Are you both creative and technically inclined? You may want to consider a career as a web designer!
                    </p>
                </div>
                 <div class="button flex py-3 flex-wrap gap-3">
					 <a href="https://duromediaacademy.com.ng/pricing/" data-wow-delay=".1s" class="wow tada bg-primary text-white rounded-md font-medium mt-3 py-2 px-10 capitalize hover:bg-secondary text-lg md:text-2xl">Get access today</a>
<!-- 					<div class="">
						<p class="capitalize pb-3 font-semibold text-lg text-primary">physical training</p>
						<a href="https://flutterwave.com/pay/duromediawdp" data-wow-delay=".1s" class="wow tada bg-primary text-white rounded-md font-medium py-3 px-5 text-base capitalize hover:bg-secondary md:text-lg"><span class="line-through pr-3">&#8358;75,000</span><span class="pl-2 font-semibold">&#8358;40,000</span></a>
					</div>
					<div class="">
					<p class="capitalize pb-3 font-semibold text-lg text-secondary">virtual training</p>
					<a href="https://flutterwave.com/pay/duromediawdo" data-wow-delay=".1s" class="wow tada bg-secondary text-white rounded-md font-medium py-3 px-5 text-base capitalize hover:bg-primary md:text-lg"><span class="line-through">&#8358;50,000</span><span class="pl-2 font-semibold">&#8358;25,000</span></a> 
					</div> -->
                
            </div>
            </div>
        </div>
    </div>
    <!-- how to section -->
    <div class="how-to py-16 bg-neutral">
        <div class="cont">
            <div class="title text-center pb-4">
                <h1 class="text-4xl md:text-6xl font-bold">This course is for you if...</h1>
            </div>
            <div class="flex items-center flex-col">
                <div class="block md:grid md:grid-cols-9">
                    <div class="col-span-2">
                    </div>
                    <div class="col-span-5">
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">You want to Build portfolio-worthy projects while you learn</p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">You want to show recruiters your skills and kick-start your career as a web designer</p>
                            </div>
                        </div>
                            
                    </div>
                    <div class="col-span-2">
                    </div>
                </div>
            </div>
        </div>
    </div>

	<!-- testimonial section -->
 	<?php get_template_part('template-parts/content','testimonial');?>

    <!-- For you section -->
    <div class="for-you py-16 bg-neutral">
        <div class="cont">
            <div class="title text-center pb-4">
                <h1 class="text-4xl md:text-6xl font-bold">Learn How to</h1>
            </div>
            <div class="flex items-center flex-col">
                <div class="block md:grid md:grid-cols-7">
                    <div class="col-span-1">
                    </div>
                    <div class="col-span-5">
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">How to become a WordPress expert. Create beautiful pages, posts, and portfolio items using this amazing editor.</p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">How to create a website from scratch using WordPress</p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">Download, install and configure external WordPress plugins.</p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">How to create websites for clients and even start your own Web-design company.</p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">install WordPress on your local computer so you can learn without paying for a domain and Webhosting</p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">How to create websites for clients and even start your own Web-design company.  </p>
                            </div>
                        </div>

                        
                    </div>
                    <div class="col-span-1">
                    </div>
                </div>
                <div class="div pt-2 md:pt-8 w-full md:w-auto">
                    <button href="" class="text-white text-lg md:text-2xl mt-3 md:w-auto border-2 border-secondary-400 hover:border-secondary-400 bg-secondary hover:bg-secondary rounded-md font-medium py-2 px-10"> Get access today</button>
                </div>
            </div>
        </div>
    </div>
    <!-- why this exist section -->
    <div class="why-this py-16 hidden">
        <div class="cont md:grid grid-cols-7 gap-x-10 sm:px-6 ">
            <div class="col-span-4 w-full flex justify-center items-center py-6 md:py-0">
                <div class=" overflow-hidden w-11/12 h-auto rounded-xl">
                    <img src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['url'];?>/img-7.jpg" alt="" class=" md:w-full h-full">
                </div>
            </div>
            
            <div class="col-span-3">
                <div class="titl">
                    <h1 class="text-3xl md:text-5xl font-bold pb-4 md:pb-7">Why this exists...</h1>
                </div>
                <div class="sub-title">
                    <p class="text-lg">
                    If I could harness all of the failures, wins, energy, and lessons I've learned since 1008 and press rewind, this is the course I would've made for my younger self. It's designed to help anyone out there crazy enough to bet on themselves and create things that don't yet exist. Hands down, if I were in your shoes, these would be the first 10 steps I'd take in starting a business.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- cirriculum section -->
    <div class="cirriculum py-16">
        <div class="cont">
            <div class="title text-center pb-4">
                <h1 class="text-4xl md:text-6xl font-bold">The curriculum</h1>
            </div>
            <div class="flex items-center flex-col">
                <div class="block md:grid md:grid-cols-7">
                    <div class="col-span-1">
                    </div>
                    <div class="col-span-5">
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-play-circle text-lg md:text-2xl text-primary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">Critical context for the mission ahead...</p>
                            </div>
                        </div>

                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-play-circle text-lg md:text-2xl text-primary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">Step 1: Intro to HTML5, CSS3 and JS.</p>
                            </div>
                        </div>

                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-play-circle text-lg md:text-2xl text-primary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">Step 2: intro to UI &amp; UX DESIGN.</p>
                            </div>
                        </div>

                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-play-circle text-lg md:text-2xl text-primary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">Step 3: Designing With WordPress.</p>
                            </div>
                        </div>

                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-play-circle text-lg md:text-2xl text-primary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">Step 4: Hosting and domain.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-span-1">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- what's included section -->
    <div class="what-included py-16 hidden">
        <div class="cont">
            <div class="title text-center pb-4">
                <h1 class="text-4xl md:text-6xl font-bold">What's included</h1>
            </div>
            <div class="flex items-center flex-col">
                <div class="block md:grid md:grid-cols-7">
                    <div class="col-span-1">
                    </div>
                    <div class="col-span-5">
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">You want to start a business, but life keeps getting in the way </p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">You mean well, but you lack discipline and strategy you need to actually follow through </p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">You have more time on your hands than money </p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">You've tried tactics from other experts which work great for them, but suck for you </p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">You suffer from so many great ideas that you can't pick one to run with </p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">Use inexpensive tools to market your brand </p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">You need actionable tips that you can apply immediately   </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1">
                    </div>
                </div>
                <div class="div pt-2 md:pt-8 w-full md:w-auto">
                    <button href="" class="text-white text-lg md:text-2xl mt-3 md:w-auto border-2 border-secondary-400 hover:border-secondary-400 bg-secondary hover:bg-secondary rounded-md font-medium py-2 px-10"> Get access today</button>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>