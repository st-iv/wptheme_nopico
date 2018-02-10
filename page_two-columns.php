<?php
    /**
    * Template Name: Front Page
    */
?>
<?php get_header(); ?>
<main class="content">
<div class="container articles">
<!-- показ постов -->
        <?php
        $temp = $wp_query; $wp_query= null;
        // изенить количество постов на странице
        $wp_query = new WP_Query(); $wp_query->query('showposts=10' . '&paged='.$paged);
        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>


 <article class="article">
        <h2 class="article__title">
            <a href="<?php the_permalink(); ?>" title="Подробнее ...">
                <?php the_title(); ?>
            </a>
        </h2>
        <span class="article__date">
            <?php the_date('d.m.Y') ?>
        </span>
        <div class="col-sm-12">
          <?php the_post_thumbnail('full', 'class=article__img'); ?>
          </div>
        <div class="col-sm-12">
            <?php the_excerpt(); ?>
        </div>
  </article>

  
        <?php endwhile; ?>

        <?php if ($paged > 1) { ?>
 
        <div id="nav-posts">
            <div class="post__prev"><?php previous_posts_link('< Назад'); ?></div>
            <div class="post__next">
                <?php next_posts_link('Далее >'); ?>
                </div>
        </div>
 
        <?php } else { ?>
 
        <div id="nav-posts">
            <div class="post__next"><?php next_posts_link('Далее >'); ?></div>
        </div>
 
        <?php } ?>
 
        <?php wp_reset_postdata(); ?>
 
    
 </div>
<!--    <div class="col-sm-12">
  <?php wp_pagination()?>
  </div> -->
</main>
<?php get_footer(); ?>