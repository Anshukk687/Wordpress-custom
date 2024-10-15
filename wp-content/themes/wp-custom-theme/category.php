<?php 
	get_header();
?>
	
<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Blog</h2>
						<ul class="bread-list">
							<li><a href="index.html">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Blog</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- End Breadcrumbs -->

<!-- Blog post -->
	<div class="container">
		<?php
			while(have_posts()){
				the_post();
				$imgpath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
		?>
		<div class="blog-item mt-4 mb-4">
			<img src="<?php echo $imgpath[0]; ?>">
			<h2><?php the_title(); ?></h2>
			<p><?php the_excerpt(); ?></p>
			<p><?php echo get_the_date(); ?></p>
			<a href="<?php the_permalink(); ?>"><input type="button" value="Read More" name=""></a>
		</div>
		<?php } ?>

		<?php echo wp_pagenavi(); ?>
	</div>
<!-- End Blog -->



		
<?php get_footer(); ?>