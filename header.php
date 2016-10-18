<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- SEO TAGS -->
		<title><?php $loc = "Seattle, Washington"; if ( is_front_page() ) { bloginfo('description'); echo " | $loc";}else{ the_title(); echo " | $loc";} ?></title>
		<meta name="description" content="<?php if ( is_single() ) { wp_title(); echo " | "; bloginfo('description'); } else { bloginfo('name'); echo " | "; bloginfo('description'); } ?>" />
		<meta name="keywords" content="<?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) {echo $tag->name.','; } } ?>" />
		<!-- ENDS SEO TAGS -->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="wrapper">