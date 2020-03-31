  <?php 
  /* Template name: 404.php */
  get_header(); ?>
        <?php
          if ( have_posts() ):
              while ( have_posts() ): the_post(); ?>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <?php endwhile; ?>
          <?php else: ?>
              <h2 class="subheading">Unfortunately...</h2>
              <h1 class="mb-4 mb-md-0">Page not found...</h1>
              <p>but we have a lot of interesting things on the <a href="<?php echo home_url();?>" class="button">HOME PAGE</a></p>
          <?php endif; ?>
  <?php get_footer(); ?>