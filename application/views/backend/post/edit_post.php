<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Bài viết
			<small>Sửa</small>
		</h1>
	</div>
	<!-- /.col-lg-12 -->
	<div class="col-lg-7" style="padding-bottom:120px">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Chọn danh mục</label>
				<select class="form-control" name="DanhMuc">

					<?php foreach ($list_cat as $list) { ?>
						<?php 
							if ($get_post->id_danhmuc == $list->id) { ?>
								<option selected="selected" value="<?php echo $list->id ?>"><?php echo $list->name_cat ?></option>
							<?php } else { ?>
								<option value="<?php echo $list->id ?>"><?php echo $list->name_cat ?></option>
						<?php	} ?>
						
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label>Tiêu đề</label>
				<input class="form-control" name="TieuDe" placeholder="Nhập tiêu đề" value="<?php echo $get_post->tieude ?>"/>
			</div>
			<div class="form-group">
				<label>Tóm tắt</label>
				<textarea name="TomTat" class="form-control" rows="3"><?php echo $get_post->tomtat ?></textarea>
			</div>
			<div class="form-group">
				<label>Nội dung</label>
				<textarea name="NoiDung" class="form-control" rows="3"><?php echo $get_post->noidung ?></textarea>
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
			<button type="submit" class="btn btn-default">Update</button>
		</form>
		<?php
		echo $this->session->flashdata('messenger');
		echo form_error('TieuDe');
		echo form_error('TomTat');
		echo form_error('NoiDung');
		?>
	</div>
</div>


