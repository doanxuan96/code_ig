<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Danh sách 
			<small>Comment</small>
		</h1>
	</div>
	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			<tr align="center">
				<th>ID</th>
				<th>Tên người dùng</th>
				<th>Nội dung</th>
				<th>Ẩn/hiện</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($cmt as $value) { ?>
				<tr class="odd gradeX" align="center">
					<td><?php echo $value->id ?></td>
					<td>
						<?php
						$_id = $value->idUser;
						$this->db->SELECT('user_name')->from('users')->where('id',$_id);
						$query = $this->db->get()->row();
						echo $user = $query->user_name;
						//var_dump($query);
						?>
					</td>
					<td><?php echo $value->noidung ?></td>
					<td>
						<label class="switch">
							<input type="checkbox" checked="">
							<span class="slider round"></span>
						</label>
					</td>
					<td class="center"><a href="<?php echo admin_url('comments/delete_cmt/'.$value->id) ?>">Delete</a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<?php echo $this->session->flashdata('messenger'); ?>
</div>