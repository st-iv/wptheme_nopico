<!-- post -->
<article class="article">
  <h3 class="article__title">
  <a href="<?php the_permalink(); ?>">
    <?php the_title(); ?>
  </a>
  <span class="article__date">
    <?php the_date('d.m.Y') ?>
  </span>
  </h3>
  <?php the_post_thumbnail('full', 'class=article__img'); ?>
  <div class="col-sm-12">
    <?php the_excerpt(); ?>
  </div>
  <a class="send_btn article__more" href="<?php the_permalink(); ?>">
    Продолжить чтение
  </a>
  <footer class="article__footer">
    <div class="tags">
      <?php the_tags('Метки: ',' > '); ?>
    </div>
  </footer>
</article>