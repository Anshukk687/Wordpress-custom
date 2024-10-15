<?php 
	get_header(); 
	the_post();
?>

<style>
	.preloader{
		display: none;
	}
</style>

<div class="container">
	<div class="middle-right">
		<div class="page-status mt-3">
			<h3 class="text-center"><b><?php the_title() ?></b></h3>
			<h5 class="text-right"><a href="<?php echo site_url(); ?>">Home/</a><?php the_title() ?></h5>
		</div>
	</div>
	<div class="about-content">
		<?php echo the_content() ?>
		<?php the_excerpt(); ?>
		<?php the_post_thumbnail('medium'); ?>

		<?php
			/*Use this for getting the path*/
			//$imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
			//print_r($imagepath);
		?>
	</div>
</div>

<?php get_footer(); ?>