<?php
/**
 * The template for displaying Masterclass page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
        <div class="cont lg:grid grid-cols-2 gap-x-10 sm:px-6 ">
            <div class="w-full flex justify-center items-center py-6 md:py-0">
                <div class=" overflow-hidden w-11/12 h-auto rounded-xl">
                    <img src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/03';?>/master-1.jpg" alt="" class="wow slideInLeft md:w-full h-auto object-scale-down">
                </div>
            </div>
            
            <div class="px-2">
                <div class="title">
                    <h1 class="text-3xl md:text-5xl font-bold pb-4 md:py-7"><span class="text-secondary">2 in 1 </span>Graphic & Website Design Practical Training</h1>
                </div>
                <div class="sub-title">
                    <p class="text-lg">
                    This graphic and website masterclass training course is aimed to provide you with two opportunities became graphic designer and website designer at the same time. Being a double designer at this time, is a huge investment in yourself. If you have little or no prior experience in graphics and website no problem you are covered. This masterclass provides you with opportunity to earn as a design as well as website
                    </p>
                </div>
                <div class="button pt-3">
                    <a href="https://flutterwave.com/pay/duromediamc" class="btn text-white bg-primary rounded-md font-medium py-3 px-12 text-lg md:text-2xl mt-3">Enroll for &#8358;80,000</a>
                </div>
            </div>
        </div>
    </div>
	<!-- -->
	<div class="guide py-16 bg-neutral">
        <div class="cont lg:grid grid-cols-2 flex flex-col-reverse gap-x-10 sm:px-6 ">
			<div class="px-2">
                <div class="title">
					<h1 class="text-3xl md:text-5xl font-bold pb-4 md:py-7"><span class="text-secondary">2 in 1 </span>Graphic & Digital Marketing Practical Training</h1>
                </div>
                <div class="sub-title">
                    <p class="text-lg">
                    If you're trying to create or revamp a business during this crazy time, but are struggling with the "how", you're not alone and you're not crazy. You just need some meaningful guidance by a fella who just wants to see you thrive. The Smart Brand Masterclass: Pro will take you from startup confusion to brand clarity using a proven 10-step framework anyone can implement to launch a business that people crave. In it, we’ll simply cover what’s worth your time and avoid what isn’t, so you get to do (more of) what you love. This 1-hour online course will fly by. Here's what's included.
                    </p>
                </div>
                <div class="button pt-3">
                    <a href="https://flutterwave.com/pay/duromediamc" class="btn text-white bg-primary rounded-md font-medium py-3 px-12 text-lg md:text-2xl mt-3">Enroll for &#8358;80,000</a>
                </div>
            </div>
			 <div class="w-full flex justify-center items-center py-6 md:py-0">
                <div class=" overflow-hidden w-11/12 h-auto">
                    <img src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/03';?>/master-2.jpg" alt="" class="wow slideInRight md:w-full h-auto object-scale-down">
                </div>
            </div>
        </div>
    </div>

	<!-- testimonial section -->
 	<?php get_template_part('template-parts/content','testimonial');?>

    <!-- what's included section -->
    <div class="what-included py-16 bg-neutral">
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
                                <p class="text-lg md:text-2xl">Practical section</p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">Sharing professional experience</p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">Build personal brand</p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">Student project</p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">Intern opportunity</p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">Certificate</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-span-1">
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>