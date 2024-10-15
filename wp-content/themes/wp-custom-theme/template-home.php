<?php
	/*Template Name:home*/
	get_header();
?>

<style>
	.preloader{
		display: none;
	}
	.icon-digi img {
	    height: 100px !important;
	    width: 100px;
	}
</style>

<?php
	$slider_1 = get_field('slider_1');
	$slider_2 = get_field('slider_2');
	$slider_3 = get_field('slider_3');
	$title = get_field('title');
	$description = get_field('description');
	$app_link = get_field('appointment_link');
	$app_text = get_field('appointment_text');
	$contact_link = get_field('contact_link');
	$contact_text = get_field('contact_text');
?>

<!-- Slider Area -->
		<section class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('<?php echo esc_html($slider_1); ?>')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1><?php echo $title; ?></h1>
									<p><?php echo $description; ?></p>
									<div class="button">
										<a href="<?php echo $app_link; ?>" class="btn"><?php echo $app_text; ?></a>
										<a href="<?php echo $contact_link; ?>" class="btn primary"><?php echo $contact_text; ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('<?php echo esc_html($slider_2); ?>')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1><?php echo $title; ?></h1>
									<p><?php echo $description; ?></p>
									<div class="button">
										<a href="<?php echo $app_link; ?>" class="btn"><?php echo $app_text; ?></a>
										<a href="<?php echo $contact_link; ?>" class="btn primary"><?php echo $contact_text; ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Start End Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('<?php echo esc_html($slider_3); ?>')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1><?php echo $title; ?></h1>
									<p><?php echo $description; ?></p>
									<div class="button">
										<a href="<?php echo $app_link; ?>" class="btn"><?php echo $app_text; ?></a>
										<a href="<?php echo $contact_link; ?>" class="btn primary"><?php echo $contact_text; ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
			</div>
		</section>
		<!--/ End Slider Area -->
		
		<?php
			$title_1 = get_field('title_1');
			$title_2 = get_field('title_2');
			$title_3 = get_field('title_3');
			$description_1 = get_field('description_1');
			$description_2 = get_field('description_2');
			$description_3 = get_field('description_3');
			$author_1 = get_field('author_1');
			$author_2 = get_field('author_2');
			$author_3 = get_field('author_3');
			$author_3 = get_field('author_3');
			$learn_more = get_field('learn_more');
		?>
		<!-- Start Schedule Area -->
		<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="fa fa-ambulance"></i>
									</div>
									<div class="single-content">
										<span><?php echo $author_1; ?></span>
										<h4><?php echo $title_1; ?></h4>
										<p><?php echo $description_1; ?></p>
										<a href="#"><?php echo $learn_more; ?><i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- single-schedule -->
							<div class="single-schedule middle">
								<div class="inner">
									<div class="icon">
										<i class="icofont-prescription"></i>
									</div>
									<div class="single-content">
										<span><?php echo $author_2; ?></span>
										<h4><?php echo $title_2; ?></h4>
										<p><?php echo $description_2; ?></p>
										<a href="#"><?php echo $learn_more; ?><i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12">
							<!-- single-schedule -->
							<div class="single-schedule last">
								<div class="inner">
									<div class="icon">
										<i class="icofont-ui-clock"></i>
									</div>
									<div class="single-content">
										<span><?php echo $author_3; ?></span>
										<h4><?php echo $title_3; ?></h4>
										<p><?php echo $description_3; ?></p>
										<a href="#"><?php echo $learn_more; ?><i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/End Start schedule Area -->

		<?php
			$heading = get_field('heading');
			$image = get_field('image');
			$second_des = get_field('second_des');
			$heading_1 = get_field('heading_1');
			$heading_2 = get_field('heading_2');
			$heading_3 = get_field('heading_3');
			$second_1 = get_field('second_1');
			$second_2 = get_field('second_2');
			$second_3 = get_field('second_3');
		?>

		<!-- Start Feautes -->
		<section class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2><?php echo $heading; ?></h2>
							<img src="<?php echo esc_html($image); ?>" alt="#">
							<p><?php echo $second_des; ?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont icofont-ambulance-cross"></i>
							</div>
							<h3><?php echo $heading_1; ?></h3>
							<p><?php echo $second_1; ?></p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont icofont-medical-sign-alt"></i>
							</div>
							<h3><?php echo $heading_2; ?></h3>
							<p><?php echo $second_2; ?></p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features last">
							<div class="signle-icon">
								<i class="icofont icofont-stethoscope"></i>
							</div>
							<h3><?php echo $heading_3; ?></h3>
							<p><?php echo $second_3; ?></p>
						</div>
						<!-- End Single features -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Feautes -->
		
		<!-- Start Fun-facts -->
		<div id="fun-facts" class="fun-facts section overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-home"></i>
							<div class="content">
								<span class="counter">3468</span>
								<p>Hospital Rooms</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-user-alt-3"></i>
							<div class="content">
								<span class="counter">557</span>
								<p>Specialist Doctors</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont-simple-smile"></i>
							<div class="content">
								<span class="counter">4379</span>
								<p>Happy Patients</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-table"></i>
							<div class="content">
								<span class="counter">32</span>
								<p>Years of Experience</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Fun-facts -->
		
		<?php
			$third_heading = get_field('third_heading');
			$third_image = get_field('third_image');
			$third_description = get_field('third_description');
			$left_heading = get_field('left_heading');
			$left_des = get_field('left_des');
			$li_1 = get_field('li_1');
			$li_2 = get_field('li_2');
			$li_3 = get_field('li_3');
			$li_4 = get_field('li_4');
			$li_5 = get_field('li_5');
			$li_6 = get_field('li_6');
		?>

		<!-- Start Why choose -->
		<section class="why-choose section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2><?php echo $third_heading; ?></h2>
							<img src="<?php echo esc_html($third_image); ?>" alt="#">
							<p><?php echo $third_description; ?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3><?php echo $left_heading; ?></h3>
							<p><?php echo $left_des; ?></p>
							<div class="row">
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i><?php echo $li_1; ?></li>
										<li><i class="fa fa-caret-right"></i><?php echo $li_2; ?></li>
										<li><i class="fa fa-caret-right"></i><?php echo $li_3; ?></li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i><?php echo $li_4; ?> </li>
										<li><i class="fa fa-caret-right"></i><?php echo $li_5; ?></li>
										<li><i class="fa fa-caret-right"></i><?php echo $li_6; ?></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Choose Left -->
					</div>
					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="choose-right">
							<div class="video-image">
								<!-- Video Animation -->
								<div class="promo-video">
									<div class="waves-block">
										<div class="waves wave-1"></div>
										<div class="waves wave-2"></div>
										<div class="waves wave-3"></div>
									</div>
								</div>
								<!--/ End Video Animation -->
								<a href="https://www.youtube.com/watch?v=RFVXy6CRVR4" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
							</div>
						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Why choose -->

		<?php
			$four_heading = get_field('four_heading');
			$four_description = get_field('four_description');
			$four_link_contact = get_field('four_link_contact');
			$four_contact_text = get_field('four_contact_text');
			$four_learn = get_field('four_learn');
		?>
		
		<!-- Start Call to action -->
		<section class="call-action overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<h2><?php echo $four_heading; ?></h2>
							<p><?php echo $four_description; ?></p>
							<div class="button">
								<a href="<?php echo $four_link_contact; ?>" class="btn"><?php echo $four_contact_text; ?></a>
								<a href="#" class="btn second"><?php echo $four_learn; ?><i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->

		<!-- Start Course section -->
		<?php
			$cat = get_categories(array('taxonomy'=>'category'));
		?>
		
		<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Course</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6" style="display: flex;">
						<?php 
							foreach ($cat as $value) {
						?>
						<div class="single-news mr-4">
							<div class="news-head">
								<img src="<?php bloginfo('template_directory') ?>/img/client1.png" title="digital-marketing" style="background-color: #1a76d1;">
							</div>
							<div class="news-body">
								<div class="news-content">
									<a href="<?php echo get_category_link($value->term_id); ?>"><h5><?php echo $value->name; ?> (<?php echo $value->count; ?>) </h5></a>
								</div>
							</div>
						</div>		
						<?php } ?>
					</div>
				</div>
			</div>
		</section>
		<!-- End Course section -->

		<!-- Start news category section -->
		<div class="container">
			<div class="course-text">
				<h3 class="text-center mt-3"><b>Latest News Category</b></h3>
			</div>
			<div class="row">
				<div class="col-8">
					<div class="course-box">
						<div class="course-box-right" style="display: flex;">
							<?php 
								$newsCat = get_terms(['taxonomy'=>'news_category','hide_empty'=>false, 'orderby'=>'name', 'order'=>'Asc', 'number'=>3, 'parent'=>0]);
								foreach($newsCat as $cat) {
    								$meta_image = get_wp_term_image($cat->term_id); 
							?>
							<div class="icon-digi mb-3 mr-4">
								<?php if($meta_image != ""){ ?>
									<img src="<?php echo $meta_image; ?>" title="digital-marketing" style="width: 100px;">
								<?php } else { ?>
									<img src="<?php bloginfo('template_directory'); ?>/img/favicon.png" title="digital-marketing">
								<?php } ?>
								<a href="<?php echo get_category_link($cat->term_id); ?>"><h5><?php echo $cat->name; ?> </h5></a>
							</div>
						<?php } ?>
						</div>
					</div>		
				</div>
			</div>
		</div>
		<!-- End news category section -->
		
		<?php
			$five_heading = get_field('five_heading');
			$five_img = get_field('five_img');
			$five_des = get_field('five_des');
			$slide_img_1 = get_field('slide_img_1');
			$slide_img_2 = get_field('slide_img_2');
			$slide_img_3 = get_field('slide_img_3');
			$slide_img_4 = get_field('slide_img_4');
		?>

		<!-- Start portfolio -->
		<section class="portfolio section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2><?php echo $five_heading; ?></h2>
							<img src="<?php echo esc_html($five_img); ?>" alt="#">
							<p><?php echo $five_des; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="owl-carousel portfolio-slider">
							<div class="single-pf">
								<img src="<?php echo esc_html($slide_img_1); ?>" alt="#">
								<a href="#" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="<?php echo esc_html($slide_img_2); ?>" alt="#">
								<a href="#" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="<?php echo esc_html($slide_img_3); ?>" alt="#">
								<a href="#" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="<?php echo esc_html($slide_img_4); ?>" alt="#">
								<a href="#" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="<?php echo esc_html($slide_img_1); ?>" alt="#">
								<a href="#" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="<?php echo esc_html($slide_img_2); ?>" alt="#">
								<a href="#" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="<?php echo esc_html($slide_img_3); ?>" alt="#">
								<a href="#" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="<?php echo esc_html($slide_img_4); ?>" alt="#">
								<a href="#" class="btn">View Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End portfolio -->

		<?php
			$six_heading = get_field('six_heading');
			$six_img = get_field('six_img');
			$six_des = get_field('six_des');
			$six_head_1 = get_field('six_head_1');
			$six_head_2 = get_field('six_head_2');
			$six_head_3 = get_field('six_head_3');
			$six_head_4 = get_field('six_head_4');
			$six_head_5 = get_field('six_head_5');
			$six_head_6 = get_field('six_head_6');
			$six_description = get_field('six_description');
		?>

		<!-- Start service -->
		<section class="services section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2><?php echo $six_heading; ?></h2>
							<img src="<?php echo $six_img; ?>" alt="#">
							<p><?php echo $six_des; ?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-prescription"></i>
							<h4><a href="#"><?php echo $six_head_1; ?></a></h4>
							<p><?php echo $six_description; ?></p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-tooth"></i>
							<h4><a href="#"><?php echo $six_head_2; ?></a></h4>
							<p><?php echo $six_description; ?></p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-heart-alt"></i>
							<h4><a href="#"><?php echo $six_head_3; ?></a></h4>
							<p><?php echo $six_description; ?></p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-listening"></i>
							<h4><a href="#"><?php echo $six_head_4; ?></a></h4>
							<p><?php echo $six_description; ?></p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-eye-alt"></i>
							<h4><a href="#"><?php echo $six_head_5; ?></a></h4>
							<p><?php echo $six_description; ?></p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-blood"></i>
							<h4><a href="#"><?php echo $six_head_6; ?></a></h4>
							<p><?php echo $six_description; ?></p>	
						</div>
						<!-- End Single Service -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End service -->
		
		<?php
			$seven_heading = get_field('seven_heading');
			$seven_img = get_field('seven_img');
			$seven_des = get_field('seven_des');
		?>

		<!-- Start Blog Area -->
		<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2><?php echo $seven_heading; ?></h2>
							<img src="<?php echo esc_html($seven_img); ?>" alt="#">
							<p><?php echo $second_des; ?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<?php
						$wpnew = array(
							'post_type'=>'news',
							'post_status'=>'publish'
						);

						$newsquery = new Wp_Query($wpnew);
						while($newsquery->have_posts()){
							$newsquery->the_post();
							$imgpath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'small');
					?>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="<?php echo $imgpath[0]; ?>" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date"><?php the_field('news_date', get_the_id()); ?><?php //echo get_the_date(); ?></div>
									<h2><a href="#"><?php the_title(); ?></a></h2>
									<p class="text"><?php the_excerpt(); ?><?php //the_content(); ?></p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
					<?php } ?>
				</div>
			</div>
		</section>
		<!-- End Blog Area -->
		
		<!-- Start clients -->
		<div class="clients overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="owl-carousel clients-slider">
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri(); ?>/img/client1.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri(); ?>/img/client2.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri(); ?>/img/client3.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri(); ?>/img/client4.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri(); ?>/img/client5.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri(); ?>/img/client1.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri(); ?>/img/client2.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri(); ?>/img/client3.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri(); ?>/img/client4.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Ens clients -->
		
		<!-- Start Category wise get post -->
		
		<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Categories showing according to post</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<?php 
						$newsCat = get_terms(['taxonomy'=>'news_category','hide_empty'=>false, 'orderby'=>'name', 'order'=>'Asc', 'number'=>3, 'parent'=>0]);
						foreach($newsCat as $cat) {
							$meta_image = get_wp_term_image($cat->term_id); 
					?>
					<div class="col-lg-4 col-md-6 col-12">
						<div class="course-box">
							<div class="course-box-right">
								<div class="icon-digi mb-3">
									<?php if($meta_image != ""){ ?>
										<img src="<?php echo $meta_image; ?>" title="digital-marketing" style="width: 100px;">
									<?php } else { ?>
										<img src="<?php bloginfo('template_directory'); ?>/img/favicon.png" title="digital-marketing" style="width: 70px;">
									<?php } ?>
									<a href="<?php echo get_category_link($cat->term_id); ?>"><h5><?php echo $cat->name; ?> </h5></a>
								</div>

								<div class="col-12" id="category">
								<?php
									$wpnew = array(
										'post_type'=>'news',
										'post_status'=>'publish',
										'tax_query'=>array(
											array(
												'taxonomy'=>'news_category', 
												'field'=>'term_id',
												'terms'=>$cat->term_id
											)
										),
									);

									$newsquery = new Wp_Query($wpnew);
									while($newsquery->have_posts()){
										$newsquery->the_post();
										$imgpath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
								?>
									<!-- Blog post -->
									<div class="blog-item mt-4 mb-4">
										<img src="<?php echo $imgpath[0]; ?>">
										<b><h6><?php the_title(); ?></h6></b>
										<p><?php the_excerpt(); ?></p>
										<p><?php echo get_the_date(); ?></p>
										<a href="<?php the_permalink(); ?>"><input type="button" value="Read More" name=""></a>
									</div>

									<?php //echo wp_pagenavi(); ?>
								<?php } ?>
								</div>
							</div>
						</div>		
					</div>
					<?php } ?>
				</div>
			</div>
		</section>
		<!-- End Category wise get post -->

		<!-- Start Blog Area -->
		<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Latest News</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<?php
						$wpnew = array(
							'post_type'=>'news',
							'post_status'=>'publish'
						);

						$newsquery = new Wp_Query($wpnew);
						while($newsquery->have_posts()){
							$newsquery->the_post();
							$imgpath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'small');
					?>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="<?php echo $imgpath[0]; ?>" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date"><?php the_field('news_date', get_the_id()); ?></div>
									<p><b>Publish: </b><?php echo get_the_date(); ?></p>
									<h2><a href="#"><?php the_title(); ?></a></h2>
									<p class="text"><?php the_excerpt(); ?><?php //the_content(); ?></p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
					<?php } ?>
				</div>
			</div>
		</section>
		<!-- End Blog Area -->

		<!-- Start Appointment -->
		<section class="appointment">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Are Always Ready to Help You. Book An Appointment</h2>
							<img src="<?php echo get_template_directory_uri(); ?>/img/section-img.png" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 col-12">
						<form class="form" action="#">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="name" type="text" placeholder="Name">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="email" type="email" placeholder="Email">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="phone" type="text" placeholder="Phone">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<div class="nice-select form-control wide" tabindex="0"><span class="current">Department</span>
											<ul class="list">
												<li data-value="1" class="option selected ">Department</li>
												<li data-value="2" class="option">Cardiac Clinic</li>
												<li data-value="3" class="option">Neurology</li>
												<li data-value="4" class="option">Dentistry</li>
												<li data-value="5" class="option">Gastroenterology</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<div class="nice-select form-control wide" tabindex="0"><span class="current">Doctor</span>
											<ul class="list">
												<li data-value="1" class="option selected ">Doctor</li>
												<li data-value="2" class="option">Dr. Akther Hossain</li>
												<li data-value="3" class="option">Dr. Dery Alex</li>
												<li data-value="4" class="option">Dr. Jovis Karon</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input type="text" placeholder="Date" id="datepicker">
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<textarea name="message" placeholder="Write Your Message Here....."></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-5 col-md-4 col-12">
									<div class="form-group">
										<div class="button">
											<button type="submit" class="btn">Book An Appointment</button>
										</div>
									</div>
								</div>
								<div class="col-lg-7 col-md-8 col-12">
									<p>( We will be confirm by an Text Message )</p>
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg-6 col-md-12 ">
						<div class="appointment-image">
							<img src="<?php echo get_template_directory_uri(); ?>/img/contact-img.png" alt="#">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Appointment -->


<?php get_footer(); ?>