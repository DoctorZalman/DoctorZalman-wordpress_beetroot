
<?php get_header();?>
<!-- <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(<?php echo get_template_directory_uri();?>.'/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
			<div class="col-md-9 pb-5 text-center ">
				<h1 class="mb-3 bread"><?php the_field('title-blog', 'options');?>singl-event</h1>
			</div>
		</div>
	</div> -->
</section>

<section class="ftco-section ftco-degree-bg">
	<div class="container">
		<div class="row">
		
		<?php get_template_part('template-parts/single-p');?>

		<div class="about-author d-flex p-4 bg-light">
			<div class="bio mr-5">
				<img src="<?php echo get_template_directory_uri();?>./images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
			</div>
			<div class="desc">
				<h3>George Washington</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
			</div>
		</div>
		<div class="tag-widget post-tag-container mb-5 mt-5">
			<div class="tagcloud">
				<?php the_tags('',null, null);?>
			</div>
		</div>

		
		</div>
		<div class="col-lg-4 sidebar pl-lg-5">
					<div class="sidebar-box">
						<?php get_search_form(); ?>
						<?php dynamic_sidebar('blog_single_right');?> 
					</div>
				</div>
		
		</div>
	</div>
</section>



<?php get_footer();?>
