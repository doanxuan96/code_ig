<!DOCTYPE html>
<html>
<?php $this->load->view('fontend/partials/head'); ?>
<body>
	<?php $this->load->view('fontend/partials/header'); ?>
	<div class="banner-top">
		<img src="<?php echo public_url('fontend/') ?>images/thumbbanner-1536x342.jpg" alt="">
	</div>
	<!-- Content -->
	<div id="content" style="padding-top: 30px;padding-bottom: 30px;">
		<div class="container">
			<div class="row">
				<!-- main contenr -->
				<div id="primary" class="content-area col-md-12">
					<main id="main" class="site-main">
						<div class="row dang-ky-dang-nhap">
							<div class="col-md-4 col-sm-3"></div>
							<div class="col-md-4 col-sm-6 dang-ky">
								<div class="fom-dang-ky">
									<form action="" method="POST">
										<div class="form-group">
											<label for="">Username</label><?php echo form_error('user_reg') ?>
											<input type="text" class="form-control" id="" placeholder="" name="user_reg">
										</div>
										<div class="form-group">
											<label for="">E-mail Address</label><?php echo form_error('email') ?>
											<input type="email" class="form-control" id="" placeholder="" name="email">
										</div>
										<div class="form-group">
											<label for="">Password</label><?php echo form_error('password_reg') ?>
											<input type="password" class="form-control" id="" placeholder="" name="password_reg">
										</div>
										<div class="form-group">
											<label for="">Confirm Password</label><?php echo form_error('re_password_reg') ?>
											<input type="password" class="form-control" id="" placeholder="" name="re_password_reg">
										</div>
										<div class="submit-login">
											
											<button type="submit" class="btn btn-default">Register</button>
											<a href="<?php echo admin_url('login') ?>">Login</a>
										</div>
									</form>
								</div>
								<?php echo $this->session->flashdata('mess'); ?>
							</div>
							<div class="col-md-4 col-sm-3"></div>
						</div>
					</main>
				</div> <!-- end -->
			</div>
		</div>
	</div> <!-- end -->
	<!-- slider cảm nhận -->
	<div class="pst-cam-nha" style="background: url('<?php echo public_url('fontend/')?>images/Banner1.jpg');">
		<div class="container">
			<div class="slider-pst-cn">
				<div class="sliders-psst">
					<div class="item">
						<div class="row">
							<div class="col-sm-4">
								<img src="<?php echo public_url('fontend/')?>images/artem-beliaikin-j5almO1E8rU-unsplash-small.jpg" alt="">
							</div>
							<div class="col-sm-8">
								<div class="bounce">
									<span>"</span>
									<div class="commenr">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. In est sem, ultrices ornare molestie sit amet, placerat vel arcu. Phasellus quis massa id sem pretium dictum. Donec sed sollicitudin est, sit amet eleifend ipsum. Vivamus nec pretium turpis.
									</div>
									<h4 class="">Kimberly Mason</h4>
									<p class="chuc-vu">Customer Service, Google</p>
								</div>
							</div>
						</div>

					</div>
					<div class="item">
						<div class="row">
							<div class="col-sm-4">
								<img src="<?php echo public_url('fontend/')?>images/artem-beliaikin-j5almO1E8rU-unsplash-small.jpg" alt="">
							</div>
							<div class="col-sm-8">
								<div class="bounce">
									<span>"</span>
									<div class="commenr">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. In est sem, ultrices ornare molestie sit amet, placerat vel arcu. Phasellus quis massa id sem pretium dictum. Donec sed sollicitudin est, sit amet eleifend ipsum. Vivamus nec pretium turpis.
									</div>
									<h4 class="">Kimberly Mason</h4>
									<p class="chuc-vu">Customer Service, Google</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('fontend/partials/footer'); ?>
</body>
<?php $this->load->view('fontend/partials/script'); ?>
</html>