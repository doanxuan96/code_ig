<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Bài viết
                <small>Danh sách</small>
            </h1>
        </div>
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Tóm tắt</th>
                    <th>Thể loại</th>
                    <th>Nội dung</th>
                    <!-- <th>Nổi bật</th> -->
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($list as $item) { ?>
                    <tr align="center">
                        <td><?php echo $item->id ?></td>
                        <td><?php echo $item->title ?></td>
                        <td><?php echo $item->description ?></td>
                        <td>
                            <?php
                            $this->load->model('category_model');
                            $id_cat = $item->id_category;
                            $this->db->SELECT('name_cat')->from('category_post')->where('id',$id_cat);
                            $query = $this->db->get()->row();
                            echo $query->name_cat;
                             ?>
                        </td>
                        <td><?php echo $item->content ?></td>
                        <!-- <td><?php echo $item->noibat ?></td> -->
                        <td width="50px" class="center"><a href="<?php echo admin_url('posts/delete_post/'.$item->id) ?>"> Delete</a></td>
                        <td width="50px" class="center"><a href="<?php echo admin_url('posts/edit_post/'.$item->id) ?>">Edit</a></td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
        <?php 
           echo $this->session->flashdata('messenger');
         ?>
    </div>
    <!-- /.row -->
</div>