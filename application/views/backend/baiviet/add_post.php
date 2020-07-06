<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Bài viết
			<small>Thêm</small>
		</h1>
	</div>
	<!-- /.col-lg-12 -->
	<div class="col-lg-7" style="padding-bottom:120px">
		<form method="POST" action="<?php echo admin_url('baiviet/thembai'); ?>" enctype="multipart/form-data">
			<div class="form-group">
				<label>Chọn danh mục</label>
				<select class="form-control" name="DanhMuc">
					<?php foreach ($list_cat as $list) { ?>
						<option value="<?php echo $list->id ?>"><?php echo $list->name_cat ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label>Tiêu đề</label>
				<input class="form-control" name="TieuDe" placeholder="Nhập tiêu đề" />
			</div>
			<div class="form-group">
				<label>Tóm tắt</label>
				<textarea name="TomTat" class="form-control" rows="3"></textarea>
			</div>
			<div class="form-group">
				<label>Nội dung</label>
				<textarea name="NoiDung" class="form-control" rows="3"></textarea>
			</div>
			<div class="form-group">
				<label>Hình ảnh</label>
				<input type="file" name="Hinh" class="form-control">
			</div>
			<div class="form-group">
				<label>Nổi bật</label>
				<label class="radio-inline">
					<input name="NoiBat" value="0" checked="" type="radio">Không
				</label>
				<label class="radio-inline">
					<input name="NoiBat" value="1" type="radio">Có
				</label>
			</div>
			<button type="submit" class="btn btn-default">Thêm </button>
			<button type="reset" class="btn btn-default">Làm mới</button>
		</form>
		<?php
		//var_dump($tt);
		echo $this->session->flashdata('mess');
		echo form_error('TieuDe');
		echo form_error('TomTat');
		echo form_error('NoiDung');
		?>
	</div>
</div>
