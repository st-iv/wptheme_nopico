<!-- <div class="container"> -->
<?php
// global $more;
// while( have_posts() ) : the_post();
// 	$more = 1; // отображаем полностью всё содержимое поста
// 	the_title(); // эта функция выводит заголовок
// 	the_content(); // выводим контент
// endwhile;
?>
<!-- </div> -->

<!-- copy -->
<!-- post -->
<article id="post-<?php the_ID ?>" class="">
  <h3 class="article__title">
    <?php the_title(); ?>
  <span class="article__date">
    <?php the_date('d.m.Y') ?>
  </span>
  </h3>
  <!-- <?php the_post_thumbnail('full', 'class=article__img'); ?> -->
  <div class="col-sm-12">
    <?php the_content(); ?>
  </div>
  <footer class="article__footer">
    <div class="tags">
      <?php the_tags('<span>Теги:</span> '); ?>
    </div>
  </footer>
</article>