     <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">

          <nav class="bottom_menu" id="ftco-footer">
            <ul class="inside">
                <?php
                $args = array(
                  'container'       => '',
                  'items_wrap'      => '%3$s',
                  'theme_location'  => 'footer_menu'
                );?>
            </ul>   
          </nav>

          <div class="col-md">
                <h2 class="logo"><a href="#"><?php the_field('logo-footer', 'options')?></a></h2>
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
            <div class="ftco-footer-widget mb-4" >
                
            </div>
          </div>
          <div class="col-md">
          
             <div class="ftco-footer-widget mb-4">
             <?php dynamic_sidebar( 'sidebar-2' ); ?>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
            <?php dynamic_sidebar( 'sidebar-3' ); ?>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            <?php dynamic_sidebar( 'sidebar-4' ); ?>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-12 text-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <?php the_field('copy', 'options')?>
              
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
      <?php wp_footer(); ?>
    </footer> 

     
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24"      cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg>
  </div>

  </body>
</html>