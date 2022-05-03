<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package duromediaacademy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title();?> - <?php bloginfo('name')?> | <?php bloginfo('description') ?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="keywords" content="graphics design training in lagos, web design training in lagos, digital marketing training in lagos, graphics academy, ikeja, lekki, lagos, nigeria, africa">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="flex flex-col  min-h-screen">
<!-- This example requires Tailwind CSS v2.0+ -->
<header>
<<<<<<< HEAD
  <div class="topbarpx-2 md:px-8 h-10 bg-primary flex items-center">
    <div class="cont">
      <div class="flex justify-center items-center text-white">
          <p class="text-base pr-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
=======
  <div class="topbar px-2 md:px-8 h-10 bg-primary">
    <div class=" grid grid-cols-3 h-full cont">
      <div class="col-span-2 flex justify-center items-center text-white">
        <div class="text-sm">
          <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, iste.</p>
        </div>
      </div>
      <div class="col-span-1 flex items-center text-white">
        <div class="icon-instagram mx-2">
>>>>>>> b8faaecb8fc274a24fca7582454587d2e174223b
          <a href="tel:+2348052835221" class="text-base">
              <i class="fas fa-phone transform rotate-90"></i>
              <span class="pl-2 text-base hidden md:inline">+2348052835221</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="header animate__animated animate__slideInDown relative bg-white z-20">
    <div class="cont mx-auto px-5 sm:px-6">
      <div class="md:py-5 md:flex md:items-center md:justify-between md:space-x-14 h-24 md:h-nav">
        <div class="flex justify-between items-center h-full">
          <div class="">
            <a href="<?php $uploads = wp_upload_dir();?>">
              <?php 
                if ( function_exists( 'the_custom_logo' ) ) {
                  the_custom_logo();
                }
              ?>
            </a>	 
          </div>
    
          <div class="md:hidden">
            <button type="button" class="open_link-toggle bg-white rounded-md p-2 text-gray-400 hover:text-gray-500 hover:bg-gray-100">
              <span class="sr-only">Open menu</span>
              <!-- Heroicon name: menu -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
        </div>


        <?php
      wp_nav_menu( 
          array(
          'menu'              => "primary", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
          'menu_class'        => "hidden md:flex space-x-10", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
          'container'         => "nav", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
          'container_class'   => "h-11 ",
          'link_before'       => '<span class="">', // (string) Text before the link text.
          'link_after'        => '</span>', // (string) Text after the link text.
          'depth'             => "2", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
          'theme_location'    => "top-menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
          'item_spacing'      => "discard", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
          ) );

      ?>
      </div>


    </div>

  <!--
    Mobile menu, show/hide based on mobile menu state.

    Entering: "duration-200 ease-out"
      From: "opacity-0 scale-95"
      To: "opacity-100 scale-100"
    Leaving: "duration-100 ease-in"
      From: "opacity-100 scale-100"
      To: "opacity-0 scale-95"
  -->

  





		<div class="sticky top-0 bottom-0 z-20 overflow-y-auto h-auto mobile-menu hidden inset-x-0 transition transform origin-top-right md:hidden">
      <div class="shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
        <div class="cont pt-5 pb-6 px-5">
        
          <div class="mobile">
      
            <nav class="w-full">
              <?php
              wp_nav_menu( 
              array(
				'menu'        => 'primary', // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
				'depth'             => "2", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
              	'theme_location' => 'mobile-menu', // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
              ) );
              ?>
            </nav>
          </div>
        </div>
      </div>
    </div>
	</div>
</header>
<div class="wrapper">
  <a id="button" class="bg-secondary z-10 text-center fixed rounded-full hidden h-12 w-12 hover:pointer hover:bg-primary active:bg-primary">
    <i class="fas fa-arrow-up my-2.5 text-xl text-white"></i>
  </a>

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
    <div class="p-3 md:py-5 md:px-8 md:grid grid-cols-2 gap-y-10 md:gap-x-10 w-full">
      <div class="course col-span-1 mx-0 px-7 py-10 md:py-7 rounded-md shadow-xl">
        <div class=" overflow-hidden w-full h-44 flex justify-center">
            <img src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/03';?>/graphics-design.jpg" alt="" class="w-full h-auto object-scale-down">
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
              <a href="" class="btn-primary-sm">Get 60%OFF</a>
            </div>
        </div>
      </div>
      <div class="course col-span-1 mx-0 px-7 py-10  md:py-7 rounded-md shadow-xl">
        <div class=" overflow-hidden w-full h-44 flex justify-center">
            <img src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/03';?>/web-design.jpg" alt="" class="w-full h-auto object-scale-down">
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
              <a href="" class="btn-primary-sm">Get 60%OFF</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
