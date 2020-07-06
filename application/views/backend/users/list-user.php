<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Danh sách tài khoản
		</h1>
	</div>
	<div class="col-lg-12" style="padding-bottom:20px">
		<div class="content-dm">
			<table class="table table-bordered">
				<tbody>
					<tr class="bg-info">
						<td>id</td>
						<td>Tên tài khoản</td>
						<td>Mật khẩu</td>
						<td>Email</td>
						<td><a style="color:#fff;" href="">Edit</a></td>
						<td><a style="color:#fff;" href="">Delete</a></td>
					</tr>
					<?php foreach ($list as $row) { ?>
						<tr>
							<td><?php echo $row->id ?></td>
							<td><?php echo $row->user_name ?></td>
							<td><?php echo $row->password ?></td>
							<td><?php echo $row->gmail ?></td>
							<td><a href="<?php echo admin_url('user/edituser/'.$row->id) ?>">Edit</a></td>
							<td><a href="<?php echo admin_url('user/deleteuser/'.$row->id) ?>">Delete</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php echo $this->session->flashdata('mess'); ?>
		</div>
	</div>
</div>