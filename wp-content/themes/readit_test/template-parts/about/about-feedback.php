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
        <div class="item">
          <div class="testimony-wrap py-4">
            <div class="text">
              <p class="mb-4"><?php the_field( 'about-feedback-desc' ); ?></p>
              <div class="d-flex align-items-center">
                <div class="user-img" style="background-image: url(<?php echo get_template_directory_uri();?>./images/person_1.jpg)"></div>
                <div class="pl-3">
                  <p class="name"><?php the_field( 'about-feedback-title' ); ?> </p>
                  <span class="position"><?php the_field( 'about-feedback-subtitle' ); ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="item">
          <div class="testimony-wrap py-4">
            <div class="text">
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <div class="d-flex align-items-center">
                <div class="user-img" style="background-image: url(<?php echo get_template_directory_uri();?>./images/person_2.jpg)"></div>
                <div class="pl-3">
                  <p class="name">Roger Scott</p>
                  <span class="position">Marketing Manager</span>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <!-- <div class="item">
          <div class="testimony-wrap py-4">
            <div class="text">
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <div class="d-flex align-items-center">
                <div class="user-img" style="background-image: url(<?php echo get_template_directory_uri();?>./images/person_3.jpg)"></div>
                <div class="pl-3">
                  <p class="name">Roger Scott</p>
                  <span class="position">Marketing Manager</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimony-wrap py-4">
            <div class="text">
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <div class="d-flex align-items-center">
                <div class="user-img" style="background-image: url(<?php echo get_template_directory_uri();?>./images/person_1.jpg)"></div>
                <div class="pl-3">
                  <p class="name">Roger Scott</p>
                  <span class="position">Marketing Manager</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimony-wrap py-4">
            <div class="text">
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <div class="d-flex align-items-center">
                <div class="user-img" style="background-image: url(<?php echo get_template_directory_uri();?>./images/person_2.jpg)"></div>
                <div class="pl-3">
                  <p class="name">Roger Scott</p>
                  <span class="position">Marketing Manager</span>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</div>
</section>