	<?php 
	/* Template name: Archive */
	get_header(); ?>
	
	<!-- blog_content start -->
	
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row d-flex">
					<?php if (have_posts()): while(have_posts()): the_post(); ?>

				<?php get_template_part('template-parts/event');?>

					<?php endwhile; endif; ?>

				</div>

					<?php get_template_part('template-parts/pagination'); ?>

			</div> 
		</section>
		
	<!-- blog_content end -->
  <?php get_footer(); ?>