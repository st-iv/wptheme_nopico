<?php get_header() ?>
<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	get_template_part( 'template-parts/content', 'single');
	endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>
</div>
<?php get_footer() ?>