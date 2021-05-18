<?php get_header(); ?>
<main class="singleBlog">
	<div class="container">
		<div class="singlePostThumbnail" data-aos="fade-down-right">
			<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
		</div>
		<div class="singlePostWrapper" data-aos="fade-up">
			<div class="singlePostTime">
				<?php the_time('F j, Y') ?>
			</div>
			<div class="singlePostTitle">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="singlePostContent">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
				<?php endif; ?>
				<div class="singlePostLinks">
					<div class="backBlogLink">
						<a href="<?php echo site_url(); ?>/blog/"> <?php echo "< back to blog"; ?></a>
					</div>
					<div class="socialLinks">
						<a href="#"><i class="fas fa-share"></i></a>
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
						<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=&source=<?php the_post_thumbnail_url('full'); ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
						<a href="https://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank"><i class="fab fa-twitter-square"></i></a>
						<a href="https://pinterest.com/pin/create/button/?url=&media=<?php the_post_thumbnail_url('full'); ?>&description=<?php the_title(); ?>" target="_blank"><i class="fab fa-pinterest-square"></i></a>
					</div>
					<div class="nextPrevLinks">
						<?php previous_post_link( '%link','< Previous' ) ?>
						<?php next_post_link( '%link','Next >' ) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ourSheeoRedBox" data-aos="fade-up">
		<span>Ready to get on the road?</span>
		<a href="<?php echo site_url();?>/find-my-car/" class="btn btn-blue">Find My Car</a>
	</div>
</main>
<?php get_footer(); ?>