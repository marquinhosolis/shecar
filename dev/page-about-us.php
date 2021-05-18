<?php
/*
Template Name: About Us Page
*/
?>

<?php get_header(); ?>
	<div class="heroImage heroImage-aboutUs" style="background-image:url(<?php the_field('hero_image');?>)">
	</div>
	<main class="aboutUsPage">
		<section class="ourApproach">
			<img class="homePattern" src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-pattern.png" alt="Pattern">
			<div class="container">
				<h2 class="sectionTitle">
					Our 
					<span>APPROACH</span>
				</h2>
				<div class="ourApproachText" data-aos="fade-left">
					<p><?php the_field('our_approach'); ?></p>
				</div>
			</div>
		</section>
		<section class="ourApproachAfter" style="background-image: url(<?php the_field('our_approach_after_image'); ?>);">
		</section>
		<section class="ourPhilosophy">
			<div class="container">
				<h2 class="sectionTitle">
					Our <br>
					<span>Philosophy</span>
				</h2>
				<div class="ourPhilosophyText" data-aos="fade-right">
					<p><?php the_field('our_philosophy'); ?></p>
				</div>
			</div>
			<img class="homePattern homePatternInverted" src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-pattern-inverted.png" alt="Pattern">
		</section>
		<div class="ourSheeoImage"></div>
		<section class="ourSheeoText">
			
			<div class="container">
				<div class="container">
					<h2 class="sectionTitle">
						Our <br>
						<span>She.E.O.</span>
					</h2>
					<div class="ourSheeoText" data-aos="fade-left">
						<p><?php the_field('our_sheeo'); ?></p>
					</div>
				</div>
				<div class="ourSheeoRedBox" data-aos="fade-up">
					<span>Ready to get on the road?</span>
					<a href="<?php echo site_url();?>/find-my-car/" class="btn btn-blue">Find My Car</a>
				</div> 
			</div>
		</section>
	</main>

	
<?php get_footer(); ?>		