  <?php 
  /* Template name: 404.php */
  get_header(); ?>


    <div class="hero-wrap js-fullheight" style="background-image: url(<?php echo get_template_directory_uri().'/images/bg_1.jpg'?>);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-12">
              <h2 class="subheading">Unfortunately...</h2>
              <h1 class="mb-4 mb-md-0">Page not found...</h1>
              <div class="row">
                <div class="col-md-7">
                  <div class="text">
                    <p>but we have a lot of interesting things on the <a href="<?php echo home_url();?>" class="button">HOME PAGE</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  <?php get_footer(); ?>