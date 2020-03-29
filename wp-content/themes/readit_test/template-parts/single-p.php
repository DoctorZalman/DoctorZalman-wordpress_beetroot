	<?php the_post(); ?>
		<div class="col-lg-8">
			<p class="mb-5">
			<?php the_post_thumbnail( 'mytheme-mini' ); ?>
			</p>
			<h2 class="mb-3"><?php the_title(); ?></h2>
			<div><?php the_content(); ?>
		</div>