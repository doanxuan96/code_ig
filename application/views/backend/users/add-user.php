<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"> Thêm tài khoản
		</h1>
	</div>
	<!-- /.col-lg-12 -->
	<div class="col-lg-7" style="padding-bottom:120px">
		<form method="POST" action="">
			<div class="form-group">
				<label>Tên tài khoản</label>
				<input class="form-control" name="username" placeholder="Nhập tên tài khoản" />
			</div>
			<div class="form-group">
				<label>Mật khẩu</label>
				<input class="form-control" type="password" name="password" placeholder="Nhập mật khẩu" />
			</div>
			<div class="form-group">
				<label>Mật khẩu</label>
				<input class="form-control" type="password" name="re_password" placeholder="Nhập lại mật khẩu" />
			</div>
			<div class="form-group">
				<label>Email</label>
				<input class="form-control" name="mail" placeholder="Nhập email" />
			</div>
			<button type="submit" class="btn btn-default">Thêm </button>
			<button type="reset" class="btn btn-default">Làm mới</button>
		</form>
		<?php
		//var_dump($tt);
		echo $this->session->flashdata('mess');
		echo form_error('username');
		echo form_error('password');
		echo form_error('re_password');
		echo form_error('mail');
		?>
	</div>
</div>
