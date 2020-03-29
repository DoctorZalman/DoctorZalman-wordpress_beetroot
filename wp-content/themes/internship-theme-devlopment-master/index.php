<?php get_header(); ?>

   	<section class="ftco-section">
   		<div class="container">
   			<div class="row">
   				<div class="col-md-12">

					<?php if (have_posts()): while(have_posts()): the_post(); ?>
   					<div class="case">
   						<div class="row">
   							<div class="col-md-6 col-lg-6 col-xl-8 d-flex">
   								<a href="blog-single.html" class="img w-100 mb-3 mb-md-0" style="background-image: url(images/image_1.jpg);"></a>
   							</div>
   							<div class="col-md-6 col-lg-6 col-xl-4 d-flex">
   								<div class="text w-100 pl-md-3">
   									<span class="subheading"><?php the_category(); ?></span>
   									<h2><a href="blog-single.html"><?php the_title(); ?></a></h2>
   									<ul class="media-social list-unstyled">
										<li class="ftco-animate"><a href="http://facebook.com/share?url=<?php the_permalink();?>"><span class="icon-twitter"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
									</ul>
   									<div class="meta">
   										<p class="mb-0"><a href="#">11/13/2019</a> | <a href="#">12 min read</a></p>
   									</div>
   								</div>
   							</div>
   						</div>
   					</div>
					<?php endwhile; endif; ?>
					
   				</div>
   			</div>
   			<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
   		</div>
   	</section>


<?php get_footer(); ?>