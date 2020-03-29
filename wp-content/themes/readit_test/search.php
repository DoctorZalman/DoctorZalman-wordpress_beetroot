
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
						<h2>
							<p>Your search returned no results <br />
								Back to <a href="<?php echo get_home_url();?>">Home page</a><br /><br />
								Search again: <?php get_search_form(); ?> </p>
						</h2>

          <?php endif; ?>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col text-center">
				<div class="block-27">
            <?php the_posts_pagination( [
                'end_size'     => 1,     // количество страниц на концах
                'mid_size'     => 2,     // количество страниц вокруг текущей
                'prev_text'    => '<',
                'next_text'    => '>',
                'screen_reader_text' => ' '
            ] ); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>
