<div class="hero-wrap js-fullheight" style="background-image: url(<?php echo get_template_directory_uri().'/images/bg_1.jpg'?>);" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
      <div class="col-md-12">

        <?php if (is_archive()) { $part = 'archive';}?>
        <?php if (is_single()) { $part = 'single';}?>
         <?php if (is_page()) { $part = 'contact';}?>
         <?php if (is_page()) { $part = 'about';}?>
         <?php if (is_search()) { $part = 'search';}?>
         <?php if (is_404()) { $part = '404';}?>
        <?php get_template_part('template-parts/titles/titles', $part);?>

      </div>
    </div>
  </div>
</div>