<?php
/*
Template Name: Media Kit Page
*/
?>

<?php get_header(); ?>
    <div class="heroImage heroImage-mediaKit" style="background-image:url(<?php the_field('hero_image');?>)">
    <h1>Media Kit</h1>
    </div>
    <main class="mediaKitPage" >
        <section class="featuredLogos" data-aos="fade-up">
			<h2 class="sectionTitle">
				Featured on
			</h2>
			<div class="container">
				<ul class="featuredLogosMediaKit">
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
        
        <section class="mediaKitDownload">
            <div class="mediaKitDownloadTitle">
                <h3>
                    Available for download
                </h3>
            </div>
            <div class="downloadLinks">
                <div class="container">
                    <ul>
                        <?php
                            if( have_rows('download_links') ):
                                while ( have_rows('download_links') ) : the_row(); ?>
                                    <li class="downloadLink" data-aos="fade-up">
                                        <div class="downloadLinkImage" style="background-image: url('<?php the_sub_field('download_link_image'); ?>')">
                                            <div class="content"></div>
                                        </div>
										<h3><?php the_sub_field('download_link_title'); ?></h3>
										<?php if( get_sub_field('download_link') ): ?>
											<a href="<?php the_sub_field('download_link'); ?>" download class="btn btn-green">Click to download</a>
										<?php endif; ?>
                                        <?php if( get_sub_field('download_file') ): ?>
											<a href="<?php the_sub_field('download_file'); ?>" download class="btn btn-green">Click to download</a>
										<?php endif; ?>
                                    </li>
                                <?php endwhile;
                            endif;
                        ?>
                    </ul>
                </div>
            </div>
        </section>
        <section class="mediaContact">
            <div class="container">
                <div class="mediaContactWrapper" data-aos="fade-up">
                    <div class="mediaContactWrapperText">
                        <h4>Media Contact</h4>
                        <?php the_field('media_kit_text'); ?>
                        <a href="#" class="btn btn-green">Contact us</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
	<!-- <main class="aboutUsPage">
		<section class="ourApproach">
			<img class="homePattern" src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-pattern.png" alt="Pattern">
			<div class="container">
				<h2 class="sectionTitle">
					Featured on
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
	</main> -->

	
<?php get_footer(); ?>		