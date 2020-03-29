  <?php
   /* Template name: Contact Page */
  get_header(); ?>

    <?php the_post(); ?>
    <?php the_content(); ?>
		<!-- ЦЕ ТРЕ РЕДАГУВ  поч-->
    <section class="ftco-section contact-section">
      <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-12 mb-4">
        <h2 class="h3"><?php the_field('contacts_title');?></h2>
        </div>
        <div class="w-100"></div>
        <div class="col-md-3">
        <p><span>Address:</span><?php the_field('adress-contact');?></p>
        </div>
        <div class="col-md-3">
        <p><span>Phone:</span> <a href="tel://<?php the_field('phone-contact');?>"><?php the_field('phone-contact');?></a></p>
        </div>
        <div class="col-md-3">
        <p><span>Email:</span> <a href="mailto:<?php the_field('email-contact');?>"><?php the_field('email-contact');?></a></p>
        </div>
        <div class="col-md-3">
        <p><span>Website:</span> <a href="<?php the_field('website-contact');?>" target="_blank"><?php the_field('website-contact');?></a></p>
        </div>
      </div>

        <div class="row block-9 no-gutters">
          <div class="col-lg-6 order-md-last d-flex">
            <div class="bg-light p-4 p-md-5 contact-form">
              <?php echo do_shortcode('[contact-form-7 id="371" title="Contact form"]'); ?>
            </div>
          </div>
          <div class="col-lg-6 d-flex">
            <div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
      
    </section>
   		<!-- ЦЕ ТРЕ РЕДАГУВ кінець -->


<?php the_field('contacts_map');?>
  <?php get_footer(); ?>