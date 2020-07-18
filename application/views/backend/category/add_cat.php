<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Danh mục 
		</h1>
	</div>
	<div class="col-lg-12" style="padding-bottom:20px">
		<form method="POST">
			<div class="form-group">
				<label>Tên danh mục </label>
				<input class="form-control" name="name_category" placeholder="Nhập tên danh mục" />
			</div>
			<button type="submit" class="btn btn-default">Thêm </button>
			<button type="reset" class="btn btn-default">Làm mới</button>
		</form>
	</div>
	<?php echo $this->session->flashdata('messenger'); ?>
	<?php echo form_error('name_category') ?>
</div>