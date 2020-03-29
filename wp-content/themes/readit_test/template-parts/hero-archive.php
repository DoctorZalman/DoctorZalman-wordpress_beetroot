	<!-- Головний екран -->
  
  	<div class="hero-wrap js-fullheight" style="background-image: url(<?php echo get_template_directory_uri().'/images/bg_1.jpg'?>);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-12">
              <h2 class="subheading"><?php the_field('subtitle', 'options'); ?></h2>
              <h1 class="mb-4 mb-md-0"><?php the_field('title', 'options'); ?></h1>
              <div class="row">
                <div class="col-md-7">
                  <div class="text">
                    <p><?php the_field('description', 'options'); ?></p>
                    <div class="mouse">
                      <a href="#" class="mouse-icon">
                        <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>