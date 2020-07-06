<header id="header" class="header">
		<!-- Header-main content -->
		<div class="header-main clearfix" style="background: url('<?php echo public_url('fontend/') ?>images/world-map.jpg') no-repeat; background-position-y: center; background-size: contain; background-position-x: 30%;">
            <?php $this->load->view('fontend/partials/top-bar'); ?>
			<div class="container">
				<div class="header-inner">
					<div class="menu-icon pull-left">
						<div class="menu-open">
								<div class="icon-click">
									<i class="fa fa-bars"></i>
								</div>
						</div>
					</div>
					<div class="logo-header">
						<a href="" title="Trang chủ" rel="home">
							<h1 class="text-logo">
								<img src="<?php echo public_url('fontend/') ?>images/Logo.png" alt="">
							</h1>
						</a>
					</div>
					<div class="flex-right">
						<div class="uppercase">
							<div class="social-icons follow-icons">
								<a href="#" target="_blank"   class="icon facebook" title="facebook">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a>
								<a href="#" target="_blank"  class="icon instagram " title="instagram">
									<i class="fa fa-instagram" aria-hidden="true"></i>
								</a>
								<a href="#" target="_blank"  class="icon twitter"  title="twitter">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</a>
							</div>
							<div class="header-search-form">
								<div class="searchform-wrapper">
									<form action="">
										<div class="flex-row">
											<input type="hidden" id="" name="">
											<div class="flex-col flex-grow">
												<input type="search" class="search-field" name="" value="" id="" placeholder="Search…">
											</div >
											<div class="flex-col">
												<button type="submit" class="submit-button" aria-label="Submit">
													<i class="fa fa-search" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- end header content-->
		<?php $this->load->view('fontend/partials/header-bottom'); ?>
		<?php $this->load->view('fontend/partials/menu-mobile'); ?>

	</header> <!-- end -->