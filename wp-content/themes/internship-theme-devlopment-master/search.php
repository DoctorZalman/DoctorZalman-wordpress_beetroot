<form action="/" method="get">
        <input type="text" name="s">
        <input type="submit" value="search">
</form>

<?php if (have_posts()): while(have_posts()): the_post(); ?>
    <div>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
    <?php the_excerpt(); ?>
    </div>
<?php endwhile; else: ?>
    <h3>тут нічого немає. шукайте ще</h3>
<?php endif; ?>

<?php wp_pagenavi(); ?>