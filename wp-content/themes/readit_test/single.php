
<?php get_header();?>

<section class="ftco-section ftco-degree-bg">
	<div class="container">
		<div class="row">
		
		<?php get_template_part('template-parts/single-p');?>
					
					<div class="tag-widget post-tag-container mb-5 mt-5">
						<div class="tagcloud">
							<?php the_tags('',null, null);?>
						</div>
					</div>

					
					<?php 
						if( comments_open() || get_comments_number() ) {
							comments_template();}
					?>
				</div> 


				<div class="col-lg-4 sidebar pl-lg-5">
					<div class="sidebar-box">
						<?php get_search_form(); ?>
						<?php dynamic_sidebar('blog_single_right');?> 
					</div>
				</div>
	</div>
</section>

<?php get_footer();?>
