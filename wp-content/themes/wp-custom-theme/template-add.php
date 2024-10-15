<?php
	/*Template Name:Add News*/

	get_header();

	if(isset($_POST['savenews'])){
		$id = wp_insert_post(
			array(
				'post_type'=>'news',
				'post_status'=>'draft',
				'post_title'=>$_POST['ntitle'],
				'post_content'=>$_POST['ndes']
			)
		);

		wp_set_object_terms($id, $_POST['newscat'], 'news_category');
	}
?>

	<!-- Start News section -->
		<div class="container">
			<div class="course-text">
				<h3 class="text-center mt-3"><b>Add News</b></h3>
			</div>
			<div class="row">
				<div class="col-lg-6">
						<div class="contact-us-form">
							<form class="form" method="post">
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label><b>News Title</b></label><br>
											<input type="text" name="ntitle" placeholder="News Title" required="">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label><b>News Category</b></label>
											<select name="newscat">
												<option>Select News Category</option>
												<?php
													$newscat = get_terms(['taxonomy'=>'news_category','hide_empty'=>false,'orderby'=>'name','order'=>'DESC','parent'=>0]);
													foreach($newscat as $newsCatData){

												?>
												<option value="<?php echo $newsCatData->name; ?>"><?php echo $newsCatData->name; ?></option>
											<?php } ?>
											</select>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label><b>News Description</b></label>
											<textarea name="ndes" placeholder="Your Message" required=""></textarea>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group login-btn">
											<button class="btn" name="savenews">Send</button>
										</div>
									</div>
								</div>
							</form>
							<!--/ End Form -->
						</div>
					</div>
			</div>
		</div>


<?php get_footer(); ?>