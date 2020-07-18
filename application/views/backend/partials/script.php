<script src="<?php echo public_url('backend/') ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo public_url('backend/') ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo public_url('backend/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo public_url('backend/') ?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo public_url('backend/') ?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo public_url('backend/') ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo public_url('backend/') ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo public_url('backend/') ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo public_url('backend/') ?>plugins/moment/moment.min.js"></script>
<script src="<?php echo public_url('backend/') ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo public_url('backend/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo public_url('backend/') ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo public_url('backend/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo public_url('backend/') ?>dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo public_url('backend/') ?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo public_url('backend/') ?>dist/js/demo.js"></script>
<script type="text/javascript" src="<?php echo public_url('ckeditor/') ?>ckeditor.js"></script>
<script type="text/javascript">
	jQuery(function() {

		//nội dung bài viết
		if(CKEDITOR.instances['content']) {
			CKEDITOR.remove(CKEDITOR.instances['content']);
		}
		CKEDITOR.config.width = 700;
		CKEDITOR.config.height = 150;
		CKEDITOR.replace('content',{});

		// tóm tắt bài viết
		if(CKEDITOR.instances['description']) {
			CKEDITOR.remove(CKEDITOR.instances['description']);
		}
		CKEDITOR.config.width = 700;
		CKEDITOR.config.height = 150;
		CKEDITOR.replace('description',{});
	});
</script>