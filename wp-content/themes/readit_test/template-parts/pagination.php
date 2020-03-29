<!-- Пагінація -->

<div class="row mt-5">
  <div class="col text-center">
    <div class="block-27">
      <ul>
        <?php the_posts_pagination( [
          'end_size'     => 1,     // количество страниц на концах
          'mid_size'     => 2,     // количество страниц вокруг текущей
          'prev_text'    => '<',
          'next_text'    => '>',
          'screen_reader_text' => ' '
          ] ); 
        ?>
      </ul>
    </div>
  </div>
</div>