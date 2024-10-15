<?php
	/*Template Name:Contact us*/

	get_header();
?>

<style>
	.preloader{
		display: none;
	}
</style>

<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Contact Us</h2>
						<ul class="bread-list">
							<li><a href="index.html">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Contact Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- End Breadcrumbs -->

<!-- Start Contact Us -->
	<section class="contact-us section">
		<div class="container">
			<div class="inner">
				<div class="row"> 
					<div class="col-lg-6">
						<div class="contact-us-left">
							<!--Start Google-map -->
							<div id="myMap">
								<iframe src="<?php the_field('map_link',18); ?>" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
							<!--/End Google-map -->
						</div>
					</div>
					<div class="col-lg-6">
						<div class="contact-us-form">
							<h2>Contact With Us</h2>
							<p>If you have any questions please fell free to contact with us.</p>
							<!-- Form -->
							<form class="form" method="post" action="mail/mail.php">
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<input type="text" name="name" placeholder="Name" required="">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<input type="email" name="email" placeholder="Email" required="">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<input type="text" name="phone" placeholder="Phone" required="">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<input type="text" name="subject" placeholder="Subject" required="">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<textarea name="message" placeholder="Your Message" required=""></textarea>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group login-btn">
											<button class="btn" type="submit">Send</button>
										</div>
										<div class="checkbox">
											<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Do you want to subscribe our Newsletter ?</label>
										</div>
									</div>
								</div>
							</form>
							<!--/ End Form -->
						</div>
					</div>
				</div>
			</div>
			<div class="contact-info">
				<div class="row">
					<!-- single-info -->
					<div class="col-lg-4 col-12 ">
						<div class="single-info">
							<i class="icofont icofont-ui-call"></i>
							<div class="content">
								<h3><?php the_field('phone_number_1',18); ?></h3>
								<p><a href="mailto:<?php the_field('email',18); ?>"><?php the_field('email',18); ?></a></p>
							</div>
						</div>
					</div>
					<!--/End single-info -->
					<!-- single-info -->
					<div class="col-lg-4 col-12 ">
						<div class="single-info">
							<i class="icofont-google-map"></i>
							<div class="content">
								<h3><?php the_field('address',18); ?></h3>
							</div>
						</div>
					</div>
					<!--/End single-info -->
					<!-- single-info -->
					<div class="col-lg-4 col-12 ">
						<div class="single-info">
							<i class="icofont-link"></i>
							<div class="content">
								<h3><?php the_field('website_link',18); ?></h3>
							</div>
						</div>
					</div>
					<!--/End single-info -->
				</div>
			</div>
		</div>
	</section>
<!--/ End Contact Us -->


<?php get_footer(); ?>