<!-- event-шаблон -->

<div class="col-md-4 d-flex ">
  <div class="blog-entry justify-content-end">
    <a href="<?php the_permalink(); ?>" class="block-20"><?php the_post_thumbnail('mytheme-square'); ?></a>
    <div class="text p-4 float-right d-block">
      <div class="topper d-flex align-items-center">
        <div class="one py-2 pl-3 pr-1 align-self-stretch">
          <span class="day"><?php the_time('d'); ?></span>
        </div>
        <div class="two pl-0 pr-3 py-2 align-self-stretch">
          <span class="yr"><?php the_time('Y'); ?></span>
          <span class="mos"><?php the_time('F'); ?></span>
        </div>
      </div>
      <h3 class="heading mb-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p><?php the_excerpt()?></p>
      <p><a href="<?php the_permalink(); ?>" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
    </div>
  </div>
</div>