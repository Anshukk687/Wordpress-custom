<?php
	/*Template Name:Anshu*/
	get_header();

	$paged = get_query_var('paged') ? get_query_var('paged') : 1;

	$searchData='';
	if(isset($_GET['title']) && $_GET['title'] != "") { 
		$searchData = $_GET['title'];
	}
?>

<style type="text/css">
	.wp-pagenavi {
    	margin-top: 10px;
	}	
</style>

<!-- Start News section -->
		<div class="container">
			<div class="course-text">
				<h3 class="text-center mt-3"><b>Latest News</b></h3>
			</div>
			<div class="row">
				<form method="get">
					<?php if(isset($_GET['title']) && $_GET['title'] != "") { ?>
					    <input type="text" name="title" placeholder="Search By Name" value="<?php echo htmlspecialchars($_GET['title']); ?>" style="padding: 12px;">
					<?php } else { ?>
					    <input type="text" name="title" placeholder="Search By Name" style="padding: 12px;">
					<?php } ?>

					<input type="hidden" name="paged" value="<?php echo $paged; ?>">
					<input type="submit" name="" value="Search" style="padding: 17px;">
				</form>
			</div>
			<div class="row mt-4">
				<?php
					$wpnew = array(
						'post_type'=>'news',
						'post_status'=>'publish',
						's'=>$searchData,
						'posts_per_page'=>3,
						'paged'=>$paged
					);

					$newsquery = new Wp_Query($wpnew);
					while($newsquery->have_posts()){
						$newsquery->the_post();
						$imgpath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
				?>
				<div class="course-box col-4">
					<div class="blog-item">
						<img src="<?php echo $imgpath[0]; ?>">
						<p><?php the_title(); ?></p>
						<p><?php echo get_the_date(); ?></p>
						<p><b>Publish:-  </b><?php the_field('news_date', get_the_id()); ?></p>
						<a href=""><input type="button" value="Read more" name=""></a>
					</div>
				</div>
				<?php } ?>
				<?php wp_pagenavi(array('query'=>$newsquery)); ?>
			</div>
		</div>
		<!-- End News section -->

<?php get_footer(); ?>