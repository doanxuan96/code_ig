<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Edit User 
		</h1>
	</div>
	<div class="col-lg-12" style="padding-bottom:20px">
		<form method="POST">
			<div class="form-group">
				<label>Tên tài khoản </label>
				<input class="form-control" name="username" placeholder="Nhập tên tài khoản" value="<?php echo $row->user_name ?>" />
			</div>
			<div class="form-group">
				<label>Mật khẩu </label>
				<input class="form-control" type="password" name="password" placeholder="Nhập mật khẩu" />
			</div>
			<div class="form-group">
				<label>Nhập lại mật khẩu </label>
				<input class="form-control" type="password" name="re_password" placeholder="Nhập lại mật khẩu" />
			</div>
			<div class="form-group">
				<label>Email </label>
				<input class="form-control" name="email" placeholder="Nhập email" value="<?php echo $row->gmail ?>" />
			</div>
			<button type="submit" class="btn btn-default">Thay đổi</button>
		</form>
		<?php
		echo form_error('username');
		echo form_error('password');
		echo form_error('re_password');
		echo form_error('email');
		echo $this->session->flashdata('messenger');
		?>
	</div>
</div>