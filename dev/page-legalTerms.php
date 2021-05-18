<?php
/*
Template Name: Legal Terms Page
*/
?>
<?php get_header(); ?>
<main class="legalTerms">
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<div class="legalContent">
			<?php
			while ( have_posts() ) : the_post(); ?> 
				<div class="entry-content-page">
					<?php the_content(); ?> 
				</div>
			<?php
			endwhile; 
			wp_reset_query(); 
			?>
		</div>
	</div>
</main>
<?php get_footer(); ?>