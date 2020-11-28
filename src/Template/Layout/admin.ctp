<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Montenegro Uniformes | Admin - <?= $title ?></title>

		<meta name="author" content="phmsanttos@gmail.com" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />


		<?= $this->Html->css('admin/bootstrap.min.css') ?>
		<?= $this->Html->css('font-awesome/4.5.0/css/font-awesome.min.css') ?>
		<?= $this->Html->css('admin/fonts.googleapis.com.css') ?>
		<?= $this->Html->css('admin/ace.min.css') ?>
		<?= $this->Html->css('admin/ace-rtl.min.css') ?>
		<?= $this->Html->css('admin/ace-skins.min.css') ?>
		<?= $this->Html->css('admin/ace-rtl.min.css') ?>
		<?= $this->Html->css('admin/chosen.min.css') ?>


		<?= $this->Html->script('admin/jquery-2.1.4.min.js') ?>
		<?= $this->Html->script('admin/bootstrap.min.js') ?>
		<?= $this->Html->script('admin/ace.min.js') ?>
		<?= $this->Html->script('admin/ace-extra.min.js') ?>
		<?= $this->Html->script('admin/ace-elements.min.js') ?>

		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		

	</head>

	<body class="no-skin">

		<?= $this->element('navbar_admin'); ?>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

		<?= $this->element('sidebar_admin'); ?>
			

			<div class="main-content">
				<?= $this->fetch('content') ?>
			</div><!-- /.main-content -->

			<?= $this->element('footer_admin'); ?>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		
	</body>
</html>
