<?php
/*
Template Name: Blog Page
*/
?>
<?php
if(isset($_GET['search'])){
	$search = $_GET['search'];
}
if(isset($_GET['category'])){
	$catChosen = $_GET['category'];
}
?>
<?php get_header(); ?>
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
				$args = array(
					'post_type'       => array( 'post' ),
					's'               => $search,
					'posts_per_page'  => -1,
					'category_name'	  => $catChosen,
				);
				$query = new WP_Query( $args );
				if ( $query->have_posts() ) {
					$count=0;
					while ( $query->have_posts() ) {
						$query->the_post(); 
						$featured = get_the_post_thumbnail_url();
						$count++;
				?>
				<div class="postThumb" data-aos="flip-left">
					<?php
						if($count <= 2){ ?>
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'blog-big' ); ?>	
							</a>
						<?php }else{ ?>
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'blog-home' ); ?>	
							</a>
						<?php }
					?>
					<span class="timePostFeed"><?php the_time('F j, Y') ?></span>
					<h3><?php the_title(); ?></h3>
					<p><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>" class="link">Continue Reading ></a>
				</div>
				<?php }
				} else{  ?>
					<div class="emptyQuery">
						<h3>No Posts Found!</h3>	
					</div>
				<?php }
				wp_reset_postdata();
				?>
			</div>
			<div class="showMorePosts">
				<a href="#" >Load More <i class="fas fa-long-arrow-alt-down"></i></a>
			</div>
			<div class="ourSheeoRedBox" data-aos="fade-up">
				<span>Ready to get on the road?</span>
				<a href="<?php echo site_url();?>/find-my-car/" class="btn btn-blue">Find My Car</a>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>