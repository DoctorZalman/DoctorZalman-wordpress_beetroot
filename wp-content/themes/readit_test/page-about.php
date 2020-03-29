	<?php
	/* Template name: About */
	get_header(); ?>

		<?php if (have_posts()): while(have_posts()): the_post(); ?>

			<section class="ftco-section ftco-no-pt ftco-no-pb">
					<div class="container">
						<div class="row d-flex">

							<!-- ава + відео -->
							<?php get_template_part('template-parts/about/about-post-avatar'); ?>

							<!-- Таби -->

							<?php get_template_part('template-parts/about/about-tabs'); ?>

							<!-- Таби кінець-->

						</div>
					</div>
			</section>

      <?php the_content(); ?>
		<?php endwhile; endif; ?>

  <?php get_footer(); ?>