<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Edit Danh mục 
		</h1>
	</div>
	<div class="col-lg-12" style="padding-bottom:20px">
		<form method="POST">
			<div class="form-group">
				<label>Tên danh mục </label>
				<input class="form-control" name="tendanhmuc" placeholder="Nhập tên danh mục" value="<?php echo $row->name_cat ?>" />
			</div>
			<button type="submit" class="btn btn-default">Thay đổi</button>
		</form>
		<?php
		echo form_error('tendanhmuc');
		echo $this->session->flashdata('mess');
		?>
	</div>
</div>