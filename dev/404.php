<?php get_header(); ?>
<main class="page404">
	<div class="container">
		<div class="text404">
			<h1>404</h1>
			<h2>Sorry, it looks like we<br>couldn’t find that page.</h2>
			<a href="<?php echo site_url();?>" class="btn btn-green">Back to Home</a>
		</div>
		<div class="img404">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/404-image.png" alt="traffic light">
		</div>
	</div>
</main>
<?php get_footer(); ?>


