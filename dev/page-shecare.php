<?php
/*
Template Name: Shecare Page
*/
?>

<?php get_header(); ?>
	<div class="heroImage heroImage-aboutUs" style="background-image:url(<?php the_field('hero_image');?>)">
	</div>
	<main class="aboutUsPage">
		<section class="ourApproach shecareIntroText">
			<img class="homePattern" src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-pattern.png" alt="Pattern">
			<div class="container">
				<h2 class="sectionTitle">
					Story<span>& mission</span>
				</h2>
				<div class="ourApproachText" data-aos="fade-left">
					<p><?php the_field('intro_text'); ?></p>
				</div>
			</div>
		</section>
		<section class="ourPhilosophy shecareTestimonialSection">
			<div class="container">
                <div class="shecareTestimonialSectionText" data-aos="fade-right">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quote-shcare-page.png" alt="quotes">
                    <p>
                        <?php the_field('testimonial_copy'); ?>
                        <br><br>
                        <strong><?php the_field('testimonial_title'); ?></strong>
                    </p>
                </div>
                <div class="shecareTestimonialSectionImages" data-aos="fade-up">
                    <div class="shecareTestimonialSectionImagesPhoto" style="background-image: url('<?php the_field('testimonial_image_1'); ?>');" >
                        <div class="content"></div>
                    </div>
                    <div class="shecareTestimonialSectionImagesPhoto" style="background-image: url('<?php the_field('testimonial_image_2'); ?>');">
                        <div class="content"></div>
                    </div>
                    <div class="shecareTestimonialSectionImagesPhoto" style="background-image: url('<?php the_field('testimonial_image_3'); ?>');">
                        <div class="content"></div>
                    </div>
                </div>
            </div>
			<img class="homePattern homePatternInverted" src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-pattern-inverted.png" alt="Pattern">
		</section>
		<div class="ourSheeoImage howYouCanHelpImage" data-aos="fade-up"></div>
        <section class="howYouCanHelp">
			<div class="container">
				<h2 class="sectionTitle">
                    <span>how</span>
                    You Can Help
                </h2>
                <div class="howYouCanHelpGift" data-aos="fade-right">
                    <h3>Make a gift</h3>
                    <p><?php the_field('make_a_gift_intro_text'); ?></p>
                    <div class="howYouCanHelpTestimonial">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quote-shcare-page.png" alt="quotes">
                        <p>
                            <?php the_field('make_a_gift_testimonial_text'); ?>
                            <br><br>
                            <strong><?php the_field('make_a_gift_testimonial_title'); ?></strong>
                        </p>
                    </div><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="5R6M4WSPT3ZG6" />
                        <button type="submit" class="btn btn-blue">Donate via Paypal</button>
                    </form>
                    <p><?php the_field('make_a_gift_final_text'); ?></p>
                </div>
                <div class="howYouCanHelpSeparator" data-aos="fade-up">
                    <p>or</p>
                </div>
                <div class="howYouCanHelpDonation" data-aos="fade-left">
                    <h3>Donate a car</h3>
                    <div>
                        <p><?php the_field('donate_a_car_intro_text'); ?></p>
                        <div class="small">
                            <?php the_field('donate_a_car_intro_legal_terms'); ?>
                        </div>
                    </div>
                    <div class="howYouCanHelpTestimonial">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quote-shcare-page.png" alt="quotes">
                        <p>
                            <?php the_field('donte_a_car_testimonial_text'); ?>
                            <br><br>
                            <strong><?php the_field('donate_a_car_testimonial_title'); ?></strong>
                        </p>
                    </div>
                    <a href="<?php echo site_url('/contact-us/'); ?> " class="btn btn-blue">Contact us</a>
                </div>
			</div>
		</section>
        <div class="ourSheeoImage needHelpImage" data-aos="fade-up"></div>
        <section class="shecareNeedHelp">
            <img class="homePattern homePatternInverted" src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-pattern-inverted.png" alt="Pattern">
            <h2 class="sectionTitle">
                <span>Need</span>
                Help?
            </h2>
            <div class="container">
                <div class="shecareNeedHelpText" data-aos="fade-right">
                    <h3>
                        <?php the_field('need_help_subtitle'); ?>
                    </h3>
                    <?php the_field('need_help_text'); ?>
                </div>
                <div class="shecareNeedHelpExperience" data-aos="fade-left">
                    <img class="shecareNeedHelpExperienceLogo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/SheCar-logo-bug.png" alt="">
                    <h3>
                        <?php the_field('shecare_experience_title'); ?>
                    </h3>
                    <?php the_field('shecare_experience_copy'); ?>
                </div>
            </div>
        </section>
        <section class="shecareExecutiveDirector">
            <h2 class="sectionTitle">
                <span>Meet our</span>
                Executive Director
            </h2>
            <div class="container">
                <div class="shecareExecutiveDirectorImage" style="background-image: url('<?php the_field('executive_director_image'); ?>');" data-aos="fade-right">
                    <div class="content"></div>
                </div>
                <div class="shecareExecutiveDirectorSpeach" data-aos="fade-left">
                    <div class="shecareExecutiveDirectorSpeachWrapper">
                        <h3><?php the_field('executive_director_name'); ?></h3>
                        <?php the_field('executive_director_copy'); ?>
                    </div>
                    
                    <a href="#" class="shecareExecutiveDirectorSpeachMoreLess shecareExecutiveDirectorSpeachReadMore">Continue reading <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                    <a href="#" class="shecareExecutiveDirectorSpeachMoreLess shecareExecutiveDirectorSpeachReadLess">Read Less <i class="fa fa-caret-up" aria-hidden="true"></i></a>
                </div>
            </div>
        </section>
        <section class="shecareFaqs">
            <img class="homePattern" src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-pattern.png" alt="Pattern">
            <div class="container" data-aos="fade-up">
                <h3>
                    <span>FREQUENTLY ASKED QUESTIONS</span><br>about SheCARE
                </h3>
            </div>
            <div class="shecareFaqsWrapper">
                <?php
                    if( have_rows('faqs') ):
                        while ( have_rows('faqs') ) : the_row();?>
                            <div class="shecareFaq" data-aos="fade-up">
                                <div class="container">
                                    <div class="shecareFaqQuestion">
                                        <a href="#">
                                            <?php the_sub_field('faq_question'); ?> <i class="fa fa-caret-down" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="shecareFaqAnswer">
                                        <?php the_sub_field('faq_answer'); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                    endif;
                ?>
            </div>
            
        </section>
        <div class="ourSheeoRedBox" data-aos="fade-up">
            <span>Ready to get on the road?</span>
            <a href="<?php echo site_url();?>/find-my-car/" class="btn btn-blue">Find My Car</a>
        </div> 
	</main>

	
<?php get_footer(); ?>		