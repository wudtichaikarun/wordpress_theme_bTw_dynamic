<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Romantic
 */

?>

<?php wp_footer(); ?>
  <!-- SIGN UP -->
  <section id="signup" data-type="background" data-speed="4">
   <div class="container">
     <div class="row">
       <div class="col-sm-6 col-sm-offset-3">
         <h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
         <p><a href="#" class="btn btn-lg btn-block btn-success">Yes, sing me up!</a></p>
       </div>
     </div>
   </div> 
  </section>
  
  <!-- FOOTER -->
  <footer>
    <div class="container">
      <div class="col-sm-3">
        <p><a href="/"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/logo.png" alt="Boostrap to WordPress"></a></p>
      </div>

      <div class="col-sm-6">
        <nav>
          <ul class="list-unstyled list-inline">
            <li><a href="#">Home</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Resources</a></li>
            <li><a href="#">Contact</a></li>
            <li  class="signup-link"><a href="#">Sign up now</a></li>
          </ul>
        </nav>
      </div>

      <div class="col-sm-3">
        <p class="pull-right">&copy; 2018 Romantic</p>
      </div>
    </div>
  </footer>

  <!-- MODAL -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
          </button>

          <h4 class="modal-title" id="myModalLabel">
            <i class="fa fa-envelope"> Subscribe to our Mailing List</i>
          </h4>
        </div>
        
        <div class="modal-body">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam, reprehenderit? Voluptatem omnis neque molestiae voluptatum vel, iste eius, qui blanditiis, repellendus iusto ipsa facilis illum voluptates consectetur voluptas libero? Fuga!</p>

          <form class="form-inline" role="form">
            <div class="form-group">
              <label for="subscribe-name" class="sr-only">Your first name</label>
              <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
            </div>

            <div class="form-group">
              <label for="subscribe-email" class="sr-only">Your first name</label>
              <input type="text" class="form-control" id="subscribe-email" placeholder="Your first name">
            </div>

            <input type="submit" class="btn btn-danger">
          </form>

          <hr>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias cumque repellat autem animi porro odit quia, in architecto nemo.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- BOOSTRAP CORE JAVASCRIPT -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="<?php bloginfo( 'template_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
  <script src="<?php bloginfo( 'template_directory'); ?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo( 'template_directory'); ?>/assets/js/main.js"></script>
</body>
</html>
