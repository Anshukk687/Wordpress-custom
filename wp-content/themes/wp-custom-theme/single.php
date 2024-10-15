<?php get_header(); ?>

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
		<div class="row">
			<?php get_sidebar(); ?>
			<div class="col-8">
				<div class="blog-item mt-4 mb-4">
					<h1><?php the_title(); ?></h1>
					<?php 
						$imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
					?>
					<img src="<?php echo $imagepath[0]; ?>" width="100%;">
					<p><?php echo get_the_date(); ?></p>
					<p><?php the_content(); ?></p>

					<?php //comment_form(); ?>

					<?php comments_template(); ?>
				</div>
			</div>
			<?php echo wp_pagenavi(); ?>
		</div>
	</div>
<!-- End Blog -->

<?php get_footer(); ?>