<?php
/*
Template Name: Blog Page
*/
?>
<?php get_header(); ?>
<?php
	$obj = get_queried_object();
	$cat = $obj->term_id;

	echo $cat;
?>
<main class="blogPage">
	<div class="container">
		<div class="pageBlogHeader">
			<div class="blogSearch">
				<form action="<?php echo site_url(); ?>/blog/">
					<input type="search" placeholder="Search" name="search">
					<button type="submit"><i class="fas fa-search"></i></button>
				</form>
			</div>
			<div class="selectCategoriesBlog">
				<form action="<?php echo site_url(); ?>/blog/" method="get" name="categoryForm">
					<i class="fas fa-caret-down"></i>
					<select name="category" id="categoryChoice" class="form-control input-lg" onchange="categoryForm.submit();">
						<option value="">Filter blogs by category </option>
						<?php 
						$args = array(
							'order'      => 'ASC',
							'orderby'    => 'title',
							'exclude_tree' => 4

						);

						$categories = get_categories($args);
						$postCategories = array();
						foreach ($categories as $cat) {
							echo "<option value='".$cat -> slug."'>".$cat -> name."</option>";
						}
						?>
					</select>
				</form>
			</div>
			<div class="categoriesBlog">
				<span>Filter blogs by category: </span>
				<?php 
				$args = array(
					'order'      => 'ASC',
					'orderby'    => 'title',
					'exclude_tree' => 4

				);

				$categories = get_categories($args);
				$postCategories = array();
				foreach ($categories as $cat) {
					echo "<a href='".site_url()."/category/".$cat -> slug."'>".$cat -> name."</a>";
				}
				?>
			</div>
		</div>
	</div>
	<section class="blogFeed blogPageFeed">
		<div class="container">
			<div class="postFeed">
				<?php
				while ( have_posts() ) : the_post(); 
				$featured = get_the_post_thumbnail_url();
				?>
				<div class="postThumb" data-aos="flip-left">
						<a href="<?php the_permalink(); ?>"><img src="<?php echo $featured; ?>" alt="<?php the_title(); ?>"></a>
						<span class="timePostFeed"><?php the_time('F j, Y') ?></span>
						<h3><?php the_title(); ?></h3>
						<p><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>" class="link">Continue Reading ></a>
					</div>

				<?php endwhile; ?>
			</div>
			<div class="showMorePosts">
				<a href="#" >Load More <i class="fas fa-long-arrow-alt-down"></i></a>
			</div>
			<div class="ourSheeoRedBox">
				<span>Ready to get on the road?</span>
				<a href="<?php echo site_url();?>/find-my-car/" class="btn btn-blue">Find My Car</a>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>