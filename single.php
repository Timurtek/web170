<?php get_header(); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<?php the_content(); // Dynamic Content ?>
	<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>
