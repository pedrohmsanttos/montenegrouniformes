<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Montenegro Uniformes | Admin - Login</title>

		<meta name="description" content="" />
		<meta name="author" content="phmsanttos@gmail.com" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<?= $this->Html->css('admin/bootstrap.min.css') ?>
		<?= $this->Html->css('font-awesome/4.5.0/css/font-awesome.min.css') ?>
		<?= $this->Html->css('admin/fonts.googleapis.com.css') ?>
		<?= $this->Html->css('admin/ace.min.css') ?>
		<?= $this->Html->css('admin/ace-rtl.min.css') ?>

		<?= $this->Html->script('admin/jquery-2.1.4.min.js') ?>

		

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
		</script>
		
	</head>

	<body class="login-layout">
		<?= $this->fetch('content') ?>
	</body>
</html>
