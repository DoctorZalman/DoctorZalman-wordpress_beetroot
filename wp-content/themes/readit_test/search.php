
<?php get_header();?>


<section class="ftco-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
          <?php
          if ( have_posts() ):
              while ( have_posts() ): the_post(); ?>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <?php endwhile; ?>
          <?php else: ?>
							<p>Your search returned no results <br />
								Back to <a href="<?php echo get_home_url();?>">Home page</a><br /><br />
								Search again: <?php get_search_form(); ?> </p>
          <?php endif; ?>
			</div>
		</div>

	</div>
</section>

<?php get_footer();?>
