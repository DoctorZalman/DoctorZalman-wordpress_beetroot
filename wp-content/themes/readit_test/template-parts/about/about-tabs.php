
<div class="col-md-6 pl-md-5 py-md-5">
  <div class="row justify-content-start pt-3 pb-3">
    <div class="col-md-12 heading-section">
      <span class="subheading"><?php the_field('about-subtitle');?></span>
      <h2 class="mb-4"><?php the_field('about-title');?></h2>
      <p><?php the_field('about-description');?></p>

      <div class="tabulation-2 mt-4">
        <ul class="nav nav-pills nav-fill d-md-flex d-block">
          <?php if( have_rows('tabs') ):;
            $count_tab = 1;
          while( have_rows('tabs') ): the_row();
          $abouttab = get_sub_field('about_tab');
          ?>

          <li class="nav-item px-lg-2 mb-md-0 mb-2">
          <a class="nav-link py-2" data-toggle="tab" href="#home<?php echo $count_tab; ?>"><?php echo $abouttab; ?></a>
          </li>

          <?php
            $count_tab ++;
            endwhile;
            endif;
          ?>
        </ul>

        <div class="tab-content bg-light rounded mt-2">

          <?php  if( have_rows('tabs') ):;
              $count_text = 1;
            while( have_rows('tabs') ): the_row();
              $abouttext = get_sub_field('about_text');
          ?>

          <div class="tab-pane container p-0 fade" id="home<?php echo $count_text; ?>">

          <p><?php echo $abouttext; ?></p>
          </div>

          <?php
            $count_text ++;
          endwhile;
          endif;
          ?>

        </div>
      </div>

    </div>
  </div>
</div>