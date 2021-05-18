<?php
/*
Template Name: Find My Car Page
*/
?>
<?php get_header(); ?>
<main class="findMyCarPage">
	<div class="container">
		<div class="pageTitle">
			<h1><?php the_title(); ?></h1>
			
		</div>
	</div>
	<img class="patternFindMyCar" src="<?php echo get_stylesheet_directory_uri(); ?>/images/featured-blogs-pattern-bg.png" alt="Pattern">
	<div class="featuredBox">
		<h2><?php the_field('featured_box_title'); ?></h2>
		<p><?php the_field('featured_box_text'); ?></p>
	</div>
	<div class="findMyCarForm">
		<?php echo do_shortcode( '[formidable id=6]' ); ?>
	</div>
</main>
<?php get_footer(); ?>