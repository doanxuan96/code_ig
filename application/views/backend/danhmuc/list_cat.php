<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Danh sách danh mục 
		</h1>
	</div>
	<div class="col-lg-12" style="padding-bottom:20px">
		<div class="content-dm">
			<table class="table table-bordered">
				<tbody>
					<tr class="bg-info">
						<td>id</td>
						<td>Title</td>
						<td><a style="color:#fff;" href="">Edit</a></td>
						<td><a style="color:#fff;" href="">Delete</a></td>
					</tr>
					<?php foreach ($list as $row) { ?>
						<tr>
							<td><?php echo $row->id ?></td>
							<td><?php echo $row->name_cat ?></td>
							<td><a href="<?php echo admin_url('category/edit_category/'.$row->id) ?>">Edit</a></td>
							<td><a href="<?php echo admin_url('category/delete_category/'.$row->id) ?>">Delete</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php echo $this->session->flashdata('mess'); ?>
		</div>
	</div>
</div>