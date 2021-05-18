<?php
/*
Template Name: Contact Us Page
*/
?>
<?php get_header(); ?>
<main class="contactUsPage">
	<div class="contactUsImage">
		<h2 class="sectionTitle" data-aos="fade-right">
			Contact Us<br>
			<span>for more info</span>
		</h2>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact-us-image.jpg" alt="Contact Us Image">
	</div>
	<div class="contactUsForm" data-aos="fade-left">
		<div class="phoneTablet">
			<span>P: <a href="tel:407.234.0080">407.234.0080</a></span>
			<span>F: <a href="tel:407.351.1771">407.351.1771</a></span>
		</div>
		<div class="form" data-aos="fade-up">
			<h3><strong>Let’s Get Rolling.</strong> Welcome to SheCar®, home of a whole new way for consumers to save thousands of dollars by buying like a dealer. It’s open and transparent car-buying, just for you!</h3>
			<?php echo do_shortcode( '[formidable id=2]' ); ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>