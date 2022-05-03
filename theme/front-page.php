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
<div class="bg-home-banner bg-left bg-cover hero py-8 lg:py-10">
        <div class="cont ">
            <div class="lg:grid grid-cols-2 flex flex-col-reverse gap-x-10 sm:px-6 ">
				

				 <div class="pt-5">
					<div class="title p-2">
						<h1 class="keyword text-sm">best graphics, web design and digital marketing training in lagos nigeria. </h1>
						<h2 class="text-4xl md:text-5xl text-white lg:text-6xl font-bold">Acquire a life-changing career</h2>
					</div>
					<!-- <div class="tagline py-3">
						<div class="text-3xl italic">(Oh hey there, I’m Tyson.) </div>
					</div> -->
					<div class="sub-title py-3">
						<p class="text-xl text-white">
							<span class="font-medium">We train our students based on <span class="text-secondary">“20%theory”</span> and <span class="text-secondary">“80% practical”</span>we also give professional experience advice based on the job.</span>  </p>
						<p class="text-xl pt-3 text-white">  Learn the latest skills to reach your professional goals from DuroMedia Academy, authorities on the Digtal skill training, Lagos Nigeria.
						</p>
					</div>
					<div class="button pt-5 wow fadeInRight" data-wow-delay=".5s">
						<a href=" <?php get_site_url() ?>/masterclass"  class=" btn-secondary hover:bg-secondary md:text-2xl">get started.</a>
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
    <!-- <div class="cta bg-neutral">
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
    </div> -->

    <!-- Specialization -->
    <div class="specialization py-10">
        <div class="cont grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3 lg:gap-6 py-14">
            <!--  -->
            <div class="relative block p-8 border border-black">
               
                <div class="mt-4 text-gray-500 sm:pr-8">
                    <svg
                    class="w-8 h-8 sm:w-10 sm:h-10"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"
                    ></path>
                    </svg>
        
                    <h5 class="mt-4 text-xl font-bold text-gray-900">Science of Chemstry</h5>
        
                    <p class="mt-2 text-sm">
                    You can manage phone, email and chat conversations all from a single mailbox.
                    </p>
                </div>
            </div>
            <!--  -->
            <div class="relative block p-8 border border-black">
               
                <div class="mt-4 text-gray-500 sm:pr-8">
                    <svg
                    class="w-8 h-8 sm:w-10 sm:h-10"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"
                    ></path>
                    </svg>
        
                    <h5 class="mt-4 text-xl font-bold text-gray-900">Science of Chemstry</h5>
        
                    <p class="mt-2 text-sm">
                    You can manage phone, email and chat conversations all from a single mailbox.
                    </p>
                </div>
            </div>
            <!--  -->
            <dic class="relative block p-8 border border-black">
               
                <div class="mt-4 text-gray-500 sm:pr-8">
                    <svg
                    class="w-8 h-8 sm:w-10 sm:h-10"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"
                    ></path>
                    </svg>
        
                    <h5 class="mt-4 text-xl font-bold text-gray-900">Science of Chemstry</h5>
        
                    <p class="mt-2 text-sm ">
                    You can manage phone, email and chat conversations all from a single mailbox.
                    </p>
                </div>
            </dic>
    
        </div>
    </div>


    <!-- graphics section -->
    <!-- <div class="graphics py-16">
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
    </div> -->
    <!--  -->
    <div class="py-16 md:py-28 bg-neutral">
        <div class="flex items-center justify-center text-center pb-12">
            <h2 class="capitalize text-3xl font-bold">programmes</h2>
        </div>
        <div class="cont grid md:grid-cols-2 gap-12 sm:px-6 ">
            <!-- <div class="w-full flex justify-center items-center py-6 md:py-0">
                <div class=" overflow-hidden w-11/12 h-auto rounded-xl">
                    <img src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/04';?>/D-market.jpg" alt="" class="wow slideInLeft md:w-full h-auto">
                </div>
            </div> -->
          
            
            <!-- <div class="relative course-card gap-4 h-96 md:h-0 bg-slate-800 p-10">
                <span class="absolute left-5 md:left-8 lg:left-12 top-5 md:top-12 rounded-full px-3 py-1.5 bg-green-100 text-green-600 font-medium text-sm">coming soon</span>
                <div class="absolute left-5 md:left-8 lg:left-12 bottom-5 md:bottom-12 ">
                    <h3 class="text-3xl text-white font-bold">Crash Course</h3>
                    <p class="text-white font-medium text-lg py-4 md:py-5">For African youth with a background in Data, Cloud or Programming. (Prerequisites apply*)</p>
                    <a href="appointment.html" class="capitalize inline-flex px-6 py-2 font-medium rounded-sm bg-pink-400 text-purple-900">explore all courses</a>
                </div>
            </div>
            <div class="relative course-card gap-4 h-96 md:h-0 bg-slate-800 p-10">
                <span class="absolute left-5 md:left-8 lg:left-12 top-5 md:top-12 rounded-full px-3 py-1.5 bg-green-100 text-green-600 font-medium text-sm">coming soon</span>
                <div class="absolute left-5 md:left-8 lg:left-12 bottom-5 md:bottom-12 ">
                    <h3 class="text-3xl text-white font-bold">Crash Course</h3>
                    <p class="text-white font-medium text-lg py-4 md:py-5">For African youth with a background in Data, Cloud or Programming. (Prerequisites apply*)</p>
                    <a href="appointment.html" class="capitalize inline-flex px-6 py-2 font-medium rounded-sm bg-pink-400 text-purple-900">explore all courses</a>
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
                        <a href="appointment.html" class="capitalize px-10 py-3 font-medium text-sm text-white bg-primary border border-primary rounded active:text-opacity-75 hover:bg-transparent hover:text-white focus:outline-none focus:ring">explore all courses</a>
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
                        <a href="appointment.html" class="capitalize px-10 py-3 font-medium text-sm text-white bg-primary border border-primary rounded active:text-opacity-75 hover:bg-transparent hover:text-white focus:outline-none focus:ring">explore all courses</a>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <!-- web-design section -->
    <!-- <div class="web-design py-8 lg:py-16 bg-neutral">
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
    </div> -->


    <!-- digital marketing section -->
    <!-- <div class="digital-market py-8 lg:py-16 bg-white-100">
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
    </div> -->

    <!-- why choose us -->
    <div class="pt-10">
        <div class="cont grid md:grid-cols-2 py-20 gap-12 sm:px-6">
           
            <div class="w-full lg:w-4/5">
                <span class="font- text-base">Why should you study with Duromedia Academy?</span>
                <h3 class="text-3xl font-bold py-4 md:py-5">Job-ready talent Superior outcomes</h3>
                <p class="font-medium text-lg ">We partner with leading technology companies to learn how technology is transforming industries, and teach the critical tech skills that companies are looking for in their workforce. With our powerful and flexible digital education platform, even the busiest learners can prepare themselves to take on the most in-demand tech roles.</p>
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

    <!-- testimony section -->
 	<?php get_template_part('template-parts/content','testimonial');?>
	
    <!-- CTA section -->
    <section class="bg-home-banner text-white">
        <div class="max-w-screen-xl px-4 py-24 mx-auto lg:items-center lg:flex">
            <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-3xl font-extrabold sm:text-5xl">Understand User Flow.</h1>

            <p class="max-w-xl mx-auto mt-4 sm:leading-relaxed sm:text-xl">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus numquam ea!
            </p>

            <div class="flex flex-wrap justify-center gap-4 mt-8">
                <a class="block w-full px-12 py-3 text-sm font-medium text-white bg-primary border border-primary rounded sm:w-auto active:text-opacity-75 hover:bg-transparent hover:text-white focus:outline-none focus:ring" href="/get-started">
                Get Started
                </a>
            </div>
            </div>
        </div>
    </section>


    <!-- instructor section -->
 	<?php get_template_part('template-parts/content','instructor');?>

    <?php get_footer(); ?>