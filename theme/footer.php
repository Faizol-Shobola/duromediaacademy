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
