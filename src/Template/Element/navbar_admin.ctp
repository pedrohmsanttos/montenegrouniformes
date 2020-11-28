<div id="navbar" class="navbar navbar-default          ace-save-state">
	<div class="navbar-container ace-save-state" id="navbar-container">
		<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
			<span class="sr-only">Toggle sidebar</span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>
		</button>

		<div class="navbar-header pull-left">
			<a href="index.html" class="navbar-brand">
				<small>
					<i class="fa fa-gear fa-spin"></i>
					<strong>Montenegro</strong> Uniformes
				</small>
			</a>
		</div>

		<div class="navbar-buttons navbar-header pull-right" role="navigation">
			<ul class="nav ace-nav">
				
				<li class="green">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
						<span class="badge badge-success">5</span>
					</a>
				</li>

				<li class="light-blue dropdown-modal">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
						<img class="nav-user-photo" src="<?= $this->request->webroot ?>img/admin/avatars/user.jpg" alt=" " />
						<span class="user-info">
							<small>Welcome,</small>
							Jason
						</span>

						<i class="ace-icon fa fa-caret-down"></i>
					</a>

					<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
						<li class="divider"></li>

						<li>
							<?= $this->Html->link(
							    '<i class="ace-icon fa fa-power-off"></i>Logout',
							    ['controller' => 'users', 'action' => 'logout',],
							    ['escape' => false, 'title' => __('Logout'), 'class' => '']
							) ?>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div><!-- /.navbar-container -->
</div>