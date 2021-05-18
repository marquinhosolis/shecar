<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
	<div class="heroImage heroImage-home" style="background-image:url(<?php the_field('hero_image');?>)">
		<div class="container">
			<h1 data-aos="fade-left">
				<strong>Clearly better car buying</strong><br> just for you<br>
				<a href="<?php echo site_url();?>/find-my-car/" class="btn btn-green">Shop, buy, ship anywhere in the United States</a>
			</h1>
		</div>
	</div>
	<main class="frontPage">
		<section class="featuredLogos">
			<h2 class="sectionTitle">
				Featured on
			</h2>
			<div class="container">
				<ul class="featuredLogosCaroussel">
					<?php
						if( have_rows('featured_on_section') ):
							while ( have_rows('featured_on_section') ) : the_row(); ?>
								<li>
									<a href="<?php the_sub_field('featured_on_link'); ?>" target="_blank">
										<img src="<?php the_sub_field('featured_on_image'); ?>">
									</a>
								</li>
							<?php endwhile;
						endif;
					?>
				</ul>
			</div>
		</section>
		<section class="whyHome">
			<img class="homePattern" src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-pattern.png" alt="Pattern">
			<div class="container">
				<h2 class="sectionTitle">
					Why
					<span style="text-transform: capitalize;">SheCar<sup>®</sup>?</span>
				</h2>
				<div class="whyHomeText" data-aos="fade-up">
					<?php the_field('why_shecar_text'); ?>
					<a href="<?php echo site_url();?>/about-us/" class="btn btn-blue">Learn More About Us</a>
				</div>
			</div>
			<img class="homePattern homePatternInverted" src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-pattern-inverted.png" alt="Pattern">
		</section>
		<div class="whyHomeAfter" style="background-image: url(<?php the_field('why_shecar_after_image'); ?>);"></div>
		<section class="howWorksHome">
			<div class="container">
				<h2 class="sectionTitle">
					How <br>
					<span>does it work?</span>
				</h2>
				<div class="howWorksHomeText">
					<div class="step" data-aos="fade-right" data-aos-duration="300">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/get-your-financing-icon.png" alt="Step 1">
						<h3><span>Step 1.</span><br><?php the_field('step_1_subtitle'); ?></h3>
						<p><?php the_field('step1_text'); ?></p>
					</div>
					<div class="step" data-aos="fade-right" data-aos-duration="700">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/select-your-car-online.png" alt="Step 2">
						<h3><span>Step 2.</span><br><?php the_field('step_2_subtitle'); ?></h3>
						<p><?php the_field('step2_text'); ?></p>
					</div>
					<div class="step" data-aos="fade-right" data-aos-duration="1100">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bid-at-scheduled-auction.png" alt="Step 3">
						<h3><span>Step 3.</span><br><?php the_field('step_3_subtitle'); ?></h3>
						<p><?php the_field('step3_text'); ?></p>
					</div>
					<div class="step" data-aos="fade-right" data-aos-duration="1500">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/receive-your-car-at-home.png" alt="Step 4">
						<h3><span>Step 4.</span><br><?php the_field('step_4_subtitle'); ?></h3>
						<p><?php the_field('step4_text'); ?></p>
					</div>
				</div>
				<a href="<?php echo site_url();?>/contact-us/" class="btn btn-blue">Book a Demo</a>
			</div>
		</section>
		<section class="blogFeed featuredBlogHome">
			<div class="container">
				<h2><strong>Featured</strong> Blogs</h2>
				<div class="postFeed">
					<?php 
						$args = array(
							'posts_per_page'         => '3',
						);
						$query = new WP_Query( $args );
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post(); 
								$featured = get_the_post_thumbnail_url();
							?>
								<div class="postThumb" data-aos="zoom-in-down">
									<?php the_post_thumbnail( 'blog-home' ); ?>	
									<!--<a href="<?php the_permalink(); ?>"><img src="<?php echo $featured; ?>" alt="<?php the_title(); ?>"></a>-->
									<h3><?php the_title(); ?></h3>
									<p><?php the_excerpt(); ?></p>
									<a href="<?php the_permalink(); ?>" class="link">Continue Reading ></a>
								</div>
							<?php }
						} 
						wp_reset_postdata();
					?>
				</div>
			</div>
		</section>
		<section class="testimonialsHome" id="ovations">
			<h2 class="sectionTitle">
				Ovations
			</h2>
			<div class="container">
				<div class="flexslider">
					<ul class="slides">
						<?php
						if( have_rows('testimonials') ):
							while ( have_rows('testimonials') ) : the_row();?>
							<li>
								<div class="testimonial">
									<div class="testimonialPhoto">
										<img src="<?php the_sub_field('testimonial_photo'); ?>" alt="<?php the_sub_field('testimonial_name'); ?>"> 
									</div>
									<div class="testimonialText">
										<p><?php the_sub_field('testimonial_text_'); ?></p>
										<p class="testimonialName">- <?php the_sub_field('testimonial_name'); ?></p>
									</div>
								</div>
							</li>
						<?php
							endwhile;
						endif;
						?>
					</ul>
				</div>
			</div>
		</section>
	
	<div class="aboveFooter"></div>
	
</main>
<?php get_footer(); ?>		