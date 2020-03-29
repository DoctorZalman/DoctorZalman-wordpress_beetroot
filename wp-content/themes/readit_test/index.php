  <?php get_header(); ?>

   	<section class="ftco-section">
   		<div class="container">
   			<div class="row">
   				<div class="col-md-12">
					 <?php if(have_posts()): while(have_posts()): the_post(); ?>
   					<div class="case">
   						<div class="row">
   							<div class="col-md-6 col-lg-6 col-xl-8 d-flex">
   								<a href="<?php the_permalink(); ?>" class="img w-100 mb-3 mb-md-0" ><?php the_post_thumbnail( 'mytheme-mini' ); ?></a>
   							</div>
   							<div class="col-md-6 col-lg-6 col-xl-4 d-flex">
   								<div class="text w-100 pl-md-3">
   									<span class="subheading"><?php the_category(); ?></span>
   									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
   									<ul class="media-social list-unstyled">
			                <li><a href="https://twitter.com/home?status=<?php the_permalink();?>"><span class="icon-twitter"></span></a></li>
			                <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>"><span class="icon-facebook"></span></a></li>
			                <li><a href="https://www.instagram.com/?utm_source=i<?php the_permalink();?>"><span class="icon-instagram"></span></a></li>
			              </ul>
   									<div class="meta">
   										<p class="mb-0"><a href="#"> <?php the_time('j F Y'); ?></a> | <a href="#"><?php time_to_read(); ?>  min read | <?php the_author_posts_link(); ?></a></p>
   									</div>
   								</div>
   							</div>
   						</div>
   					</div>
					<?php endwhile; endif; ?>
   				</div>
   			</div>
				<?php get_template_part('template-parts/pagination'); ?>
   		</div>
   	</section>

  <?php get_footer(); ?>
