<?php
/**
 * The template for displaying Home pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package duromediaacademy
 */

get_header();
?>


<!-- popup start -->
<!-- <div class="dialog fixed top-0 left-0 w-full pin z-40 overflow-auto bg-smoke flex h-screen justify-center items-center">
  <div class="bg-white relative h-5/6 w-4/5 md:h-auto overflow-y-auto md:w-3/5 rounded-md">
    <div class="py-5">
      <div class="title text-center">
          <h1 class="breadcrumb md:text-6xl">60<span class="text-secondary">%</span>OFF Training Course </h1>
          <p class="text-secondary capitalize">Choose a Course & start now</p>
      </div>
    </div>
    <div class="">
      <div id="timer" class="flex gap-x-2 md:gap-x-5 text-center justify-center text-sm md:text-2xl py-2">
        <div id="days" class="p-3 md:py-4 md:px-6 font-bold shadow-md rounded-md bg-primary text-white"></div>
        <div id="hours"  class="p-3 md:py-4 md:px-6 font-bold shadow-md rounded-md bg-secondary text-primary"></div>
        <div id="minutes"  class="p-3 md:py-4 md:px-6 font-bold shadow-md rounded-md bg-primary text-white"></div>
        <div id="seconds"  class="p-3 md:py-4 md:px-6 font-bold shadow-md rounded-md bg-secondary text-primary"></div>
      </div>
    </div>
    <div class="p-4 md:py-5 md:grid grid-cols-2 gap-y-10 md:gap-x-10 w-full md:px-10">
      <div class="course col-span-1 mx-0 px-7 py-10 md:py-7 rounded-md shadow-xl">
        <div class=" overflow-hidden w-full h-44 flex justify-center">
            <img src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/04';?>/graphics-design.jpg" alt="" class="w-full h-auto object-scale-down">
        </div>
        <div class="content">
            <div class="title text-3xl py-1">
                <h1 class="capitalize font-bold text-center text-primary">Graphic Design</h1>
            </div>
            <div class="text-center">
                <p class="text-sm">Graphic design can be used by companies to promote and sell products through advertising</p>
            </div>
           
            <div class="text-center">
              <p class="text-secondary font-bold line-through pb-3">&#8358;50,000</p>
              <a href="https://flutterwave.com/pay/duromedia" class="btn-primary-sm">Get 60%OFF</a>
            </div>
        </div>
      </div>
      <div class="course col-span-1 mx-0 px-7 py-10  md:py-7 rounded-md shadow-xl">
        <div class=" overflow-hidden w-full h-44 flex justify-center">
            <img src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/04';?>/Web-design.jpg" alt="" class="w-full h-auto object-scale-down">
        </div>
        <div class="content">
            <div class="title text-3xl py-1">
                <h1 class="capitalize font-bold text-center text-primary">Website Design</h1>
            </div>
            <div class="text-center">
                <p class="text-sm"> Are you both creative and technically inclined? You may want to consider a career as a web designer!</p>
            </div>
            <div class="text-center">
              <p class="text-secondary font-bold line-through pb-3">&#8358;50,000</p>
              <a href="https://flutterwave.com/pay/duromedia" class="btn-primary-sm">Get 60%OFF</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- popup end -->

<!-- Hero section -->
<div class="hero py-8 lg:py-7">
        <div class="cont ">
            <div class="lg:grid grid-cols-2 flex flex-col-reverse gap-x-10 sm:px-6 ">
				

				 <div class="pt-5">
					<div class="title p-2">
						<h1 class="keyword text-sm">best graphics, web design and digital marketing training in lagos nigeria. </h1>
						<h2 class="text-4xl md:text-5xl lg:text-6xl font-bold">Acquire a life-changing career</h2>
					</div>
					<!-- <div class="tagline py-3">
						<div class="text-3xl italic">(Oh hey there, I’m Tyson.) </div>
					</div> -->
					<div class="sub-title py-3">
						<p class="text-xl">Bureau of Labor Statistics estimates the 2017 median pay of a web designer to be $48,700 per year, equating to approximately $23.41 per hour.
							<span class="font-medium">We train our students based on <span class="text-secondary">“20%theory”</span> and <span class="text-secondary">“80% practical”</span>we also give professional experience advice based on the job.</span>  </p>
						<p class="text-xl pt-3">  Learn the latest skills to reach your professional goals from DuroMedia Academy, authorities on the Digtal skill training, Lagos Nigeria.
						</p>
					</div>
					<div class="button pt-5 wow fadeInRight" data-wow-delay=".5s">
						<a href=" <?php get_site_url() ?>/masterclass"  class=" btn-primary hover:bg-primary md:text-2xl">get started.</a>
					</div>
				</div>
				<div class="w-full flex justify-center items-center md:py-0">
					<div class="overflow-hidden w-full h-full ">
						<img src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/04';?>/hero.jpg" alt=""  class="wow bounceInDown md:w-full h-auto">
					</div>
				</div>
			</div>
		</div>
	</div>



    <!-- call-to-action section -->
    <div class="cta bg-neutral">
        <div class="cont flex items-center flex-col py-14 ">
            <div class="text-center">
                <p class="uppercase text-md font-bold text-secondary">our approaches are</p>
            </div>
            <div class="py-5 text-center">
                <h2 class="text-3xl md:text-3xl font-bold">Design Principles, Elements of Design (EoD), the science of logo (SoL), Component of Brand Identity (BoID), UI/UX, Front End Development (FED) Digital Marketing Fundamentals (DMF)</h2>
            </div>
            <div class="button py-5 flex flex-wrap gap-3 justify-center">
                <a href="<?php get_site_url() ?>/masterclass" data-wow-delay=".1s" class="wow tada btn-primary hover:bg-secondary md:text-2xl">get started</a>
                <a href="<?php get_site_url() ?>/projects" data-wow-delay=".1s" class="wow tada bg-secondary text-white rounded-md font-medium py-3 px-7 text-base capitalize hover:bg-primary md:text-2xl">Our Projects</a> 
            </div>
        </div>
    </div>

    <!-- instructor section -->
 	<?php get_template_part('template-parts/content','instructor');?>

    <!-- graphics section -->
    <div class="graphics py-16">
        <div class="cont ">
            <div class="title pb-12 text-center">
                <h2 class="text-4xl md:text-6xl font-bold text-primary">Go from hesitation to confidence.</h2>
            </div>
            <div class="lg:grid grid-cols-2 gap-x-10 sm:px-6 ">
                <div class="flex justify-center">
                    <div class=" overflow-hidden w-full h-full">
                        <img src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/04';?>/graphics-design.jpg" alt=""  class="wow slideInLeft md:w-full h-auto">
                    </div>
                </div>
                
                <div class="pt-5">
					<div class="title">
                        <h3 class="text-4xl md:text-6xl font-bold pb-7">Graphic Design</h3>
                    </div>
                    <div class="sub-title">
                        <p class="text-xl">
                        Graphic design communicates certain ideas or messages in a visual way, such as a business logo, or as complex as page layouts on a website.	</p>
                    </div>
					<div class="pt-4">
						<div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg">Gain a clear understanding of how to work with both print and web projects in Photoshop, Illustrator, and InDesign.</p>
                            </div>
                        </div>
						<div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg">Develop the skills and confidence to create common graphic design projects.</p>
                            </div>
                        </div>
						<div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg">Build a skill set that can set you up to be employable in the creative industry as a graphic designer.</p>
                            </div>
                        </div>
					</div>
                    <div class="button pt-5">
                
						<a href="<?php get_site_url() ?>/graphics-design" class="text-xl underline text-secondary hover:text-primary">Learn more ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- web-design section -->
    <div class="web-design py-8 lg:py-16 bg-neutral">
        <div class="cont ">
            <div class="lg:grid grid-cols-2 flex flex-col-reverse gap-x-10 sm:px-6 ">
                <div class="pt-5">
                    <div class="title">
                        <h3 class="text-4xl md:text-6xl font-bold pb-7">Website Development</h3>
                    </div>
                    <div class="sub-title">
                        <p class="text-xl">
                        Web design is a rapidly growing industry, as digital media has become part of everyone's lives and people rely on the web for their communications, information, shopping, social life, and more.
                        </p>
						<p class="text-xl">
                        We will cover the following core skill
                        </p>
                    </div>
					<div class="pt-4">
						<div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg">Intro to HTML, CSS and JS</p>
                            </div>
                        </div>
						<div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg">Intro to UI & UX DESIGN</p>
                            </div>
                        </div>
						<div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg">Designing With WordPress</p>
                            </div>
                        </div>
						<div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg">Hosting and Domain</p>
                            </div>
                        </div>
					</div>	
                    <div class="button pt-5">
                        <a href="<?php get_site_url() ?>/website-design" class="text-xl underline text-secondary hover:text-primary">Learn more ></a>
                    </div>
                </div>

                <div class="w-full flex justify-center items-center md:py-0">
                    <div class=" overflow-hidden w-full h-full">
                        <img src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/04';?>/Web-design.jpg" alt=""  class="wow slideInRight md:w-full h-auto">
                    </div>
                </div>
                
            </div>
        </div>
    </div>


    <!-- digital marketing section -->
    <div class="digital-market py-8 lg:py-16 bg-white-100">
        <div class="cont ">
            <div class="lg:grid grid-cols-2 gap-x-10 sm:px-6 ">
                <div class="flex justify-center">
                    <div class=" overflow-hidden w-full h-full">
                        <img src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/04';?>/D-market.jpg" alt="" class="wow slideInLeft md:w-full h-auto">
                    </div>
                </div>
                <div class="pt-5">
                    <div class="title">
                        <h3 class="text-4xl md:text-6xl font-bold pb-7">Digital Marketing</h3>
                    </div>
                    <div class="sub-title">
                        <p class="text-xl">
						Google and Facebook generate more revenue than any traditional media company because they control more eyeballs. That’s why digital marketing matters, it is where the attention is.
                        </p>
						<p class="text-xl">
						What you'll learn
                        </p>
						<div class="pt-4">
						<div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg">How to improve your brand identity and grow your brand's audience.</p>
                            </div>
                        </div>
						<div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg">You will learn social media marketing using all of the most popular social media platforms to grow business</p>
                            </div>
                        </div>
						<div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg">How to grow an email list, website traffic, subscriber count, and social media following.</p>
                            </div>
                        </div>
					</div>
                    </div>
                    <div class="button pt-5">
                        <a href="<?php get_site_url() ?>/digital-marketing" class="text-xl underline text-secondary hover:text-primary">Learn more ></a>
                    </div>
                </div>

                
            </div>
        </div>
    </div>

    <!-- testimony section -->
 	<?php get_template_part('template-parts/content','testimonial');?>
	

    <!-- consultation section -->
	    <div class="consultation py-16">
        <div class="cont">
            <div class="d-block md:grid grid-cols-7 gap-x-10 p-6 md:p-16 rounded-xl call-to-action wow flipInX" data-wow-delay=".2s"> 
                <div class="col-span-4">
					<div class="text-center md:text-left">
						<div class="title">
							<h4 class="text-4xl font-bold py-2"><span class="text-secondary">2 in 1 </span>Design MasterClass</h4>
						</div>
						<div class="sub-title">
						   <p class="text-xl py-1">Join our six Weeks Graphic & Website Design Practical Training</p>
						</div>
                 	</div>   
                </div>
                <div class="flex justify-center col-span-3">
                    <div class="button py-3 flex justify-center items-center">
                        <a href="<?php get_site_url() ?>/masterclass" class="btn-primary hover:bg-primary md:text-2xl">Get Started</a>
                    </div>
                </div>

                
            </div>
        </div>
    </div>

    <?php get_footer(); ?>