<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package duromediaacademy
 */

?>


</div>
<!-- <footer class="footer mt-auto bg-primary py-9 sm:p-4 w-full">
    <div class="max-w-2xl mx-auto md:px-4 px-4  text-white text-center">
        <div class="flex justify-center">
            <div class="max-w-xl p-0 sm:px-2 md:p-7 ">
                <h3 class="text-2xl md:text-4xl font-black">Start Today. Enjoy Tomorrow.</h3>
                <p class="text-base md:text-xl text-center py-6 px-4 md:px-10 ">Contact us to get insight on graphics design, digital marketing, and web design</p>
            </div>
        </div>
        <div class="flex">
            <div class="flex-auto contactform">
                <?php if(is_active_sidebar('footer-sidebar')):?>
                    <?php dynamic_sidebar('footer-sidebar');?>
                <?php endif;?>
            </div>
        </div>
        <div class="flex justify-center gap-x-10 md:gap-x-8">
                <div class="icon-instagram mx-2 md:mx-0">
                    <a href="https://www.instagram.com/duroacademy/" class="text-2xl">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <div class="icon-facebook mx-2 md:mx-0">
                    <a href="https://www.facebook.com/duroacademy" class="text-2xl">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
                <div class="icon-twittwer mx-2 md:mx-0">
                    <a href="https://twitter.com/duroacademy" class="text-2xl">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
                <div class="icon-linkedin mx-2 md:mx-0 hidden">
                    <a href="#" class="text-2xl">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
        </div>
        <div class="mt-2 md:my-5 pt-7 md:pt-10">
            <div class="banner-tags flex flex-col text-sm items-center flex-wrap">
                <?php if(is_active_sidebar('footer-sidebar-2')):?>
                    <?php dynamic_sidebar('footer-sidebar-2');?>
                <?php endif;?>
            </div>
        </div>
        
    </div>
</footer> -->


<footer class="footer bg-primary text-white">
  <div class="max-w-screen-xl px-4 py-10 mx-auto space-y-5 sm:px-6 lg:px-8">
    <div class="sm:items-center sm:justify-between sm:flex gap-y-5">
      <div class="flex gap-4 list-type-none">
        <?php if(is_active_sidebar('footer-1')):?>
          <?php dynamic_sidebar('footer-1');?>
        <?php endif;?>
      </div>
      

      <div class="flex mt-8 space-x-6">
        <?php if(is_active_sidebar('footer-2')):?>
          <?php dynamic_sidebar('footer-2');?>
        <?php endif;?>
      </div>
    </div>

    <div class="grid gap-8 pt-12 border-t border-gray-100 sm:grid-cols-2 md:grid-cols-4">
      <div class="newsletter formsm:col-span-2 md:col-span-2 px-3">
        <?php if(is_active_sidebar('footer-3')):?>
          <?php dynamic_sidebar('footer-3');?>
        <?php endif;?>
      </div>

      <div class="col-span-1">
        <?php if(is_active_sidebar('footer-4')):?>
          <?php dynamic_sidebar('footer-4');?>
        <?php endif;?>
      </div>

      <div class="col-span-1">
        <?php if(is_active_sidebar('footer-5')):?>
          <?php dynamic_sidebar('footer-5');?>
        <?php endif;?>
      </div>
    </div>

    <div class="pt-8 mt-12 border-t border-white">
      <div class="text-xs text-center text-white">
        <?php if(is_active_sidebar('footer-6')):?>
          <?php dynamic_sidebar('footer-6');?>
        <?php endif;?>
      </div>
    </div>
  </div>
</footer>



</div> 

<?php wp_footer();?>
    
</body>
</html>
