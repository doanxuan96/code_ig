<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Bài viết
			<small>Thêm</small>
		</h1>
	</div>
	<!-- /.col-lg-12 -->
	<div class="col-lg-7" style="padding-bottom:120px">
		<form method="POST" action="<?php echo admin_url('posts/add_post'); ?>" enctype="multipart/form-data">
			<div class="form-group">
				<label>Chọn danh mục</label>
				<select class="form-control" name="category">
					<?php foreach ($list_cat as $list) { ?>
						<option value="<?php echo $list->id ?>"><?php echo $list->name_cat ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label>Tiêu đề</label>
				<input class="form-control" name="title" placeholder="Nhập tiêu đề" />
			</div>
			<div class="form-group">
				<label>Tóm tắt</label>
				<textarea name="description" class="form-control" rows="3"></textarea>
			</div>
			<div class="form-group">
				<label>Nội dung</label>
				<textarea name="content" class="form-control" rows="3"></textarea>
			</div>
			<div class="form-group">
				<label>Hình ảnh</label>
				<input type="file" name="image" class="form-control">
			</div>
			<!-- <div class="form-group">
				<label>Nổi bật</label>
				<label class="radio-inline">
					<input name="NoiBat" value="0" checked="" type="radio">Không
				</label>
				<label class="radio-inline">
					<input name="NoiBat" value="1" type="radio">Có
				</label>
			</div> -->
			<button type="submit" class="btn btn-default">Thêm </button>
			<button type="reset" class="btn btn-default">Làm mới</button>
		</form>
		<?php
		//var_dump($tt);
		echo $this->session->flashdata('messenger');
		echo form_error('title');
		echo form_error('description');
		echo form_error('content');
		?>
	</div>
</div>
