<?php get_header(); ?>
    
    <?php if (have_posts()): while(have_posts()): the_post(); ?>
        <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread"><?php the_title(); ?></h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
            </div>
        </div>
        </section>

        <section class="container">
            <?php the_content(); ?>
        </section>
    <?php endwhile; endif; ?>

<?php get_footer(); ?>