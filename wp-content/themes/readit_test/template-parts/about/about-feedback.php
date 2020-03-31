<section class="ftco-section testimony-section">
<div class="container">
        <?php the_post(); ?>
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section">
              <span class="subheading"><?php the_field( 'about-feedback-main-subtitle' ); ?></span>
              <h2 class="mb-4"> <?php the_field( 'about-feedback-main-title' ); ?> </h2>
            </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
            
            <?php if( have_rows('slider-feedback') ):  ?> 

              
                  
                <?php while( have_rows('slider-feedback') ): the_row();  
                  $title= get_sub_field( 'about-feedback-title' );
                  $sub = get_sub_field( 'about-feedback-subtitle' );
                  $desc = get_sub_field( 'about-feedback-desc' );
                  $avatar = get_sub_field( 'about-feedback-avatar' );
          
                  ?>
                  <div class="item">
                    <div class="testimony-wrap py-4">
                      <div class="text">
                        <?php if( $desc ): ?>
                           <p class="mb-4"><?php echo $desc; ?></p>
                        <?php endif; ?>
                        <div class="d-flex align-items-center">
                        <?php if( $desc ): ?>
                          <div class="user-img" style="background-image: url(<?php echo $avatar;?>)"></div>
                        <?php endif; ?>
                          
                          <div class="pl-3">
                          
                            <?php if( $desc ): ?>
                              <p class="name"><?php echo $title; ?></p>
                            <?php endif; ?>

                            <?php if( $desc ): ?>
                              <span class="position"><?php echo $sub; ?></span>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                <!-- <div class="item">

                  <div class="testimony-wrap py-4">

                <div class="text">
                  <?php if( $desc ): ?>
                    <p class="mb-4"><?php echo $desc; ?></p>
                  <?php endif; ?>
                  
                  <div class="d-flex align-items-center">


                    <div class="user-img" style="background-image: url(<?php

                      echo $avatar;  // ???? Як це має працювати???
                    
                      
                      ?>)" 
                      
                      alt="<?php echo $avatar['alt'] ?>">

                    
                    </div>


                    <div class="pl-3">

                      <?php if( $title ): ?>
                        <p class="name"><?php echo $title; ?> </p>
                      <?php endif; ?>

                      <?php if( $sub): ?>
                        <span class="position"><?php echo $sub; ?></span>
                      <?php endif; ?>

                    </div>

                  </div>
                </div>

              </div>
              </div> -->

                <?php endwhile; ?>
              
            <?php endif; ?>   

            </div>
          </div>
        </div>
</div>
</section>