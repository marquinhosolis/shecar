<?php
/*
Template Name: Page Initiatives
*/
?>

<?php get_header(); ?>
	<div class="heroImage heroImage-initiatives" style="background-position: center center; background-image:url(<?php the_field('hero_image'); ?>)">
		<div class="container">
			<h1>
				<strong>Community</strong><br>
				<span></span>	
			</h1>
		</div>
	</div>
	<main class="pageInitiatives">
		<div class="container">
			<div class="initiativesBoxWrapper">
				<div class="initiativesBox" data-aos="fade-right" data-aos-duration="300">
					<div class="initiativesBoxHeader">
						<h2><i class="fas fa-heart"></i><br>SheCARE</h2>
					</div>
					<div class="initiativesBoxBody">
						<?php the_field('she_care') ?>
					</div>
				</div>
				<div class="initiativesBox" data-aos="fade-right" data-aos-duration="700">
					<div class="initiativesBoxHeader">
						<h2><i class="fas fa-users"></i><br>SheCLUB</h2>
					</div>
					<div class="initiativesBoxBody">
						<?php the_field('she_club') ?>
					</div>
				</div>
				<div class="initiativesBox" data-aos="fade-right" data-aos-duration="1100">
					<div class="initiativesBoxHeader">
						<h2><i class="fas fa-star"></i><br>Divas & Dudes</h2>
					</div>
					<div class="initiativesBoxBody">
						<?php the_field('shecar_divas') ?>
					</div>
				</div>	
			</div>
		</div>
		<div class="ourSheeoRedBox" data-aos="fade-up">
			<span>Want to learn more?</span>
			<a href="<?php echo site_url();?>/contact-us/" class="btn btn-blue">Contact Us</a>
		</div>
	</main>
<?php get_footer(); ?>		