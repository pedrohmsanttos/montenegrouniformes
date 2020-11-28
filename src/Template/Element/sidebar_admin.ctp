
<?php $controller = $this->request->controller; ?>

<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
	<ul class="nav nav-list">
		<li class="">
			<a href="index.html">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> Dashboard </span>
			</a>

			<b class="arrow"></b>
		</li>
		
		<li class="<?php echo (strtoupper($controller) == "USERS") ? "active" : "" ?>">
			<?= $this->Html->link(
			    '<i class="menu-icon fa fa-users"></i><span class="menu-text"> Usuários </span>',
			    ['controller' => 'users', 'action' => 'index',],
			    ['escape' => false, 'title' => __('Usuários'), 'class' => '']
			) ?>
			<b class="arrow"></b>
		</li>

		<li class="<?php echo (strtoupper($controller) == "TAGS") ? "active" : "" ?>">
			<?= $this->Html->link(
			    '<i class="menu-icon fa fa-tag"></i><span class="menu-text">Tags</span>',
			    ['controller' => 'tags', 'action' => 'index',],
			    ['escape' => false, 'title' => __('Tags'), 'class' => '']
			) ?>
			<b class="arrow"></b>
		</li>

		<li class="<?php echo (strtoupper($controller) == "CATEGORIES") ? "active" : "" ?>">
			<?= $this->Html->link(
			    '<i class="menu-icon fa fa-list"></i><span class="menu-text"> Categorias </span>',
			    ['controller' => 'categories', 'action' => 'index',],
			    ['escape' => false, 'title' => __('Categorias'), 'class' => '']
			) ?>
			<b class="arrow"></b>
		</li>

		<li class="<?php echo (strtoupper($controller) == "POSTS") ? "active" : "" ?>">
			<?= $this->Html->link(
			    '<i class="menu-icon fa fa-pencil-square-o"></i><span class="menu-text"> Posts </span>',
			    ['controller' => 'posts', 'action' => 'index',],
			    ['escape' => false, 'title' => __('Posts'), 'class' => '']
			) ?>
			<b class="arrow"></b>
		</li>

		
		
	</ul><!-- /.nav-list -->

	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>
</div>