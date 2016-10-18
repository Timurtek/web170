<?php 
/**
 * Template Name: Front Page
 */
get_header(); ?>

<!-- Display Page Featured Image if it exists -->
<?php if ( has_post_thumbnail() ) { ?>
<div class="featured-image">
	<h3>Featured Image of the Page</h3>
	<div class="image">
		<?php the_post_thumbnail('medium'); ?>
	</div>
</div>
<?php } ?> 
<!-- feature image ends -->

<!-- Custom Fields -->
<?php 
//Check if there is a facebook link
if (get_post_meta( get_the_ID(), 'facebook_link', true)){ 
	echo '<div class="row" style="padding:30px 0;font-size:110%;">'.get_post_meta( get_the_ID(), 'facebook_link', true).'</div>';
} ?>
<!-- End Custom Fields -->


<!-- sidebar-front-page -->
<?php if ( is_active_sidebar( 'sidebar-front-page' ) ) : ?>
	<div class="sidebar-front-page">
		<?php dynamic_sidebar( 'sidebar-front-page' ); ?>
	</div>
<?php endif; ?>
<!-- ends sidebar-front-page -->


<!-- Start Loop -->
<!-- While Loop Content-->
<div class="loop-content row">
<?php 
	if ( have_posts() ) : while( have_posts() ) : the_post(); 
	the_content();  //content of the page goes here
	endwhile; 
	endif; 
?>
</div>
<!-- End While Loop 4 Content-->

<!-- While | Query Loop | Shows Latest Posts -->
<div class="latest-posts row" style="margin-top:40px;">
<h3>Latest Posts</h3>
<?php query_posts('showposts=10'); ?>
<?php while (have_posts()) : the_post(); ?>
	<div class="loop-item">
		<div class="post-image">
			<?php the_post_thumbnail(); ?>
		</div>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</div>
<?php endwhile; ?>
</div>
<!-- End Query Loop -->
<div class="clearfix"></div>

<!-- While | Query Loop | Shows Latest Posts from Blog Category Slug w/ excerpt, date | This one is my favorite technique for loops -->

<div class="latest-posts-cat-slug row" style="margin-top:40px;">
<h3>Latest Posts from Blog Category</h3>
<?php query_posts( array ( 'category_name' => 'blog' ) ); ?>
<?php while (have_posts()) : the_post(); ?>
	<div class="loop-item">
		<div class="post-image">
			<?php the_post_thumbnail(); ?>
		</div>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<!-- Excerpt of the post -->
		<p><?php the_excerpt(); ?></p>
		<!-- Date of the Post -->
		<p><small><?php the_time('F j, Y'); ?></small></p>
	</div>
<?php endwhile; ?>
</div>
<!-- End Query Loop -->
<div class="clearfix"></div>

<?php get_footer(); ?>
