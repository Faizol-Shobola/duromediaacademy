<?php
/**
 * The template for displaying Public speaking page
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
                public speaking
            </h1>
        </div>
    </div>
    <!-- quick-guide section -->
    <div class="guide py-16 ">
        <div class="cont md:grid grid-cols-2 gap-x-10 sm:px-6 ">
            <div class="w-full flex justify-center items-center py-6 md:py-0">
                <div class=" overflow-hidden w-11/12 h-auto rounded-xl">
                    <img src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/06';?>/publicspeaking.png" alt="" class="wow slideInLeft md:w-full h-auto">
                </div>
            </div>
            
            <div class="">
                <div class="titl">
                    <h1 class="text-3xl md:text-5xl font-bold pb-4 md:pb-7">Masterclass on public speaking</h1>
                </div>
                <div class="sub-title">
                    <p class="text-lg">
                   Practical Sessions with Audiovisual Aids, facing live Cameras & Radio and TV" appearances For Executives, Pastors, Imams, MC, Teachers, Politicians, Sales/marketing Executives
					<!--<span class="block py-2 text-secondary">Let's take a closer look at how that happens.</span>Google and Facebook generate more revenue than any traditional media company because they control more eyeballs. That’s why digital marketing matters, it is where the attention is -->
                    </p>
                </div>
                 <div class="button flex py-3 flex-wrap gap-3">
					  <a href="https://flutterwave.com/pay/duromedia" data-wow-delay=".1s" class="wow tada bg-primary text-white rounded-md font-medium mt-3 py-2 px-10 capitalize hover:bg-secondary text-lg md:text-2xl">Register Now</a>
<!-- 					<div class="">
						<p class="capitalize pb-3 font-semibold text-lg text-primary">physical training</p>
						<a href="https://flutterwave.com/pay/duromediadmtp" data-wow-delay=".1s" class="wow tada bg-primary text-white rounded-md font-medium py-3 px-5 text-base capitalize hover:bg-secondary md:text-lg"><span class="line-through pr-3">&#8358;75,000</span><span class="pl-2 font-semibold">&#8358;40,000</span></a>
					</div>
                <div class="">
					<p class="capitalize pb-3 font-semibold text-lg text-secondary">virtual training</p>
					<a href="https://flutterwave.com/pay/duromediadmto" data-wow-delay=".1s" class="wow tada bg-secondary text-white rounded-md font-medium py-3 px-5 text-base capitalize hover:bg-primary md:text-lg"><span class="line-through">&#8358;50,000</span><span class="pl-2 font-semibold">&#8358;25,000</span></a> 
					</div> -->
                
            </div>
            </div>
        </div>
    </div>

    <!-- how to section -->
    <div class="how-to py-16  bg-neutral">
        <div class="cont">
 
            <div class="flex items-center flex-col">
                <div class="block md:grid md:grid-cols-9">
                    <div class="col-span-2">
                    </div>
                    <div class="col-span-5">
                       	<div class="flex-auto flex gap-x-4 p-5 rounded-xl shadow-md">
    						<div class="text-md md:text-xl flex-none flex items-center justify-center w-9 h-9 rounded-full bg-primary text-secondary "><i class="fas fa-map-marker-alt text-white"></i></div>
    						<div class="">
    							<p class="text-sm md:text-xl">Plot 12, Oladele Kadiri Close Phase 2, off Nob-Oluwa Street, Ogba , Ikeja.  Lagos Nigeria.</p>
    						</div>
    					</div>
                            
                        <div class="flex-auto flex flex-col gap-5 p-5 rounded-xl shadow-md">
                                <div class="flex">
                                    <div class="text-md md:text-xl flex-none flex items-center justify-center rounded-lg bg-primary text-secondary p-2"><span class="text-white">DURATION</span></div>
            						<div class="px-5">
            							<p class="text-sm md:text-xl">4 weekends of intensive training</p>
            						</div>
                                </div>
                                <div class="flex pt-5">
                                    <div class="text-md md:text-xl flex-none flex items-center justify-center rounded-lg bg-primary text-secondary p-2"><span class="text-white">TIME</span></div>
            						<div class="px-5">
            							<p class="text-sm md:text-xl">10:00am - 02:00pm</p>
            						</div>
                                </div>
    						
    					</div>
                    </div>
                            
                    </div>
                    <div class="col-span-2">
                    </div>
                </div>
            </div>
        </div>
    </div>

	
    <!-- For you section -->
    <div class="for-you py-16">
        <div class="cont">
            <div class="title text-center pb-4">
                <h1 class="text-4xl md:text-6xl font-bold">Facilitators</h1>
            </div>
            <div class="flex items-center flex-col">
                <div class="block md:grid md:grid-cols-7">
                    <div class="col-span-1">
                    </div>
                    <div class="col-span-5 md:flex gap-y-10 py-5">
                        <div class=" flex items-center flex-col">
                            <img class="w-72 h-72 mx-auto object-cover rounded-xl border-4 border-solid border-primary" src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/06';?>/oba.jpg" alt="" width="300" height="300">
                            <div class="py-3 wow flipInY text-center" data-wow-delay=".8s">
        						<h4 class="capitalize font-bold text-2xl text-primary">Oba Adeoye</h4>
                                <p class="text-base">Former Director Programmes, Lagos TV | Former host, Standpoint on TVC</p>
        					</div>
                        </div>
                        <div class=" flex items-center flex-col">
                            <img class="w-72 h-72 mx-auto object-cover rounded-xl border-4 border-solid border-primary" src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/06';?>/ezekiel.jpg" alt="" width="300" height="300">
                            <div class="py-3 wow flipInY text-center" data-wow-delay=".8s">
        						<h4 class="capitalize font-bold text-2xl text-primary">Emmanuel Osideko</h4>
                                <p class="text-base">Journalist, Editor, Public Relations Professional, Educator, Researcher</p>
        					</div>
                        </div>
                       
                    </div>
                    <div class="col-span-1">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--sponsorship-->
    <div class="for-you py-16 bg-neutral">
        <div class="cont">
            <div class="title text-center pb-4">
                <h1 class="text-4xl md:text-6xl font-bold ">Put Together By</h1>
            </div>
            <div class="flex items-center flex-col">
                <div class="block md:grid md:grid-cols-7">
                    <div class="col-span-1">
                    </div>
                    <div class="col-span-5 md:flex gap-10">
                        <div class=" flex items-center">
                            <img class="w-72 h-auto mx-auto object-cover " src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/06';?>/duromediaacademy.png" alt="" width="300" height="300">
                            
                        </div>
                        <div class=" flex items-center">
                            <img class="w-72 h-auto mx-auto object-cover" src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/06';?>/fullmedia.jpeg" alt="" width="300" height="300">
                            
                        </div>
                       
                    </div>
                    <div class="col-span-1">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    
    <!-- what's included section -->
    <div class="what-included py-16">
        <div class="cont">
            <div class="title text-center pb-4">
                <h1 class="text-4xl md:text-6xl font-bold">What you will gain</h1>
            </div>
            <div class="flex items-center flex-col">
                <div class="block md:grid md:grid-cols-7">
                    <div class="col-span-1">
                    </div>
                    <div class="col-span-5">
                       
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">How to make effective extemporaneous delivery.  </p>
							</div>
                        </div>
						<div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">How to master the art of proper pronunciation and enunciation.  </p>
							</div>
                        </div>
						<div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">How to make your audience stay glued to you while talking.  </p>
							</div>
                        </div>
						<div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">How to use speech during political campaigns.</p>
							</div>
                        </div>
						<div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">The art of winning businesses and contracts using speech.</p>
							</div>
                        </div>
						<div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-lg md:text-2xl text-secondary"></i></div>
                            <div class="">
                                <p class="text-lg md:text-2xl">Certificate will be issued at end of the training.</p>
							</div>
                        </div>     
                    </div>
                    <div class="col-span-1">
                    </div>
                </div>
                <div class="div pt-2 md:pt-8 w-full md:w-auto">
                    <a href="https://flutterwave.com/pay/duromedia" class="text-white text-lg md:text-2xl mt-3 md:w-auto border-2 border-secondary hover:border-secondary-400 bg-secondary hover:bg-secondary rounded-md font-medium py-2 px-10"> Get access today</a>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>