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
				<select class="form-control" name="category">

					<?php foreach ($list_cat as $list) { ?>
						<?php 
							if ($get_post->id_category == $list->id) { ?>
								<option selected="selected" value="<?php echo $list->id ?>"><?php echo $list->name_cat ?></option>
							<?php } else { ?>
								<option value="<?php echo $list->id ?>"><?php echo $list->name_cat ?></option>
						<?php	} ?>
						
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label>Tiêu đề</label>
				<input class="form-control" name="title" placeholder="Nhập tiêu đề" value="<?php echo $get_post->title ?>"/>
			</div>
			<div class="form-group">
				<label>Tóm tắt</label>
				<textarea name="description" class="form-control" rows="3"><?php echo $get_post->description ?></textarea>
			</div>
			<div class="form-group">
				<label>Nội dung</label>
				<textarea name="content" class="form-control" rows="3"><?php echo $get_post->content ?></textarea>
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
			<button type="submit" class="btn btn-default">Update</button>
		</form>
		<?php
		echo $this->session->flashdata('messenger');
		echo form_error('title');
		echo form_error('description');
		echo form_error('content');
		?>
	</div>
</div>


