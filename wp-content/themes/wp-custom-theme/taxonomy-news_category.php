<?php 
	get_header();
	$catData = get_queried_object();
?>
	
<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2><?php echo $catData->name; ?></h2>
						<ul class="bread-list">
							<li><a href="<?php echo site_url(); ?>">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active"><?php echo $catData->name; ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- End Breadcrumbs -->

	<div class="container">
		<div class="row">
			<?php
				$wpnew = array(
					'post_type'=>'news',
					'post_status'=>'publish',
					'tax_query'=>array(
						array(
							'taxonomy'=>'news_category', 
							'field'=>'term_id',
							'terms'=>$catData->term_id
						)
					),
				);

				$newsquery = new Wp_Query($wpnew);
				while($newsquery->have_posts()){
					$newsquery->the_post();
					$imgpath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
			?>
			<!-- Blog post -->
			<div class="col-8">
				<div class="blog-item mt-4 mb-4">
					<img src="<?php echo $imgpath[0]; ?>">
					<h2><?php the_title(); ?></h2>
					<p><?php the_excerpt(); ?></p>
					<p><?php echo get_the_date(); ?></p>
					<a href="<?php the_permalink(); ?>"><input type="button" value="Read More" name=""></a>
				</div>

				<?php //echo wp_pagenavi(); ?>
			</div>
		<?php } ?>
			<!-- End Blog -->
		</div>
	</div>


<?php get_footer(); ?>