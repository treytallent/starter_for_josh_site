<footer class="container-fluid">
   <!-- div to hold content in the centre of the page -->
   <div class="container">
      <!-- div that gives access to BS columns -->
      <div class="row">
         <div class="col-md-6">
            <!-- <a class="josh white" href="#"> JOSH WHITKIN </a> -->
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-left')) :
            endif; ?>
         </div>
         <div class="col-md-6">
            <!-- <p>Terms and Conditions</p> -->
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-right')) :
            endif; ?>

         </div>
         <!-- row -->
      </div>
      <!-- container -->
   </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>