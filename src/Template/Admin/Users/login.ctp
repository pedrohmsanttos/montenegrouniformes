<div class="main-container">
	<div class="main-content">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="login-container">
					<div class="center">
						<h1>
							<span class="red">Montenegro</span>
							<span class="white" id="id-text2">Uniformes</span>
						</h1>
						<h4 class="blue" id="id-company-text">&copy; Admin</h4>
					</div>

					<div class="space-6"></div>

					<div class="position-relative">
						<div id="login-box" class="login-box visible widget-box no-border">
							<div class="widget-body">
								<div class="widget-main">
									<h5 class="header blue lighter bigger">
										<i class="ace-icon fa fa-coffee green"></i>
										Entre com seus dados de acesso
									</h5>

									<div class="space-6"></div>

									<?= $this->Flash->render() ?>
    								<?= $this->Form->create() ?>
										<fieldset>
											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input type="text" class="form-control" name="username" placeholder="Email" />
													<i class="ace-icon fa fa-user"></i>
												</span>
											</label>

											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input type="password" class="form-control" name="password" placeholder="Senha" />
													<i class="ace-icon fa fa-lock"></i>
												</span>
											</label>

											<div class="space"></div>

											<div class="clearfix">
												<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
													<i class="ace-icon fa fa-key"></i>
													<span class="bigger-110">Login</span>
												</button>
											</div>

											<div class="space-4"></div>
										</fieldset>
									</form>
								</div><!-- /.widget-main -->

								<div class="toolbar clearfix">
									<div>
										<a href="#" data-target="#forgot-box" class="forgot-password-link">
											<i class="ace-icon fa fa-arrow-left"></i>
											Esqueci minha senha
										</a>
									</div>

								</div>
							</div><!-- /.widget-body -->
						</div><!-- /.login-box -->

						<div id="forgot-box" class="forgot-box widget-box no-border">
							<div class="widget-body">
								<div class="widget-main">
									<h4 class="header red lighter bigger">
										<i class="ace-icon fa fa-key"></i>
										Recuperar Senha
									</h4>

									<div class="space-6"></div>
									<p>
										Entre com seu email para recuperar os dados de acesso
									</p>

									<form>
										<fieldset>
											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input type="email" class="form-control" placeholder="Email" />
													<i class="ace-icon fa fa-envelope"></i>
												</span>
											</label>

											<div class="clearfix">
												<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
													<i class="ace-icon fa fa-lightbulb-o"></i>
													<span class="bigger-110">Enviar</span>
												</button>
											</div>
										</fieldset>
									</form>
								</div><!-- /.widget-main -->

								<div class="toolbar center">
									<a href="#" data-target="#login-box" class="back-to-login-link">
										Voltar para o login
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</div>
							</div><!-- /.widget-body -->
						</div><!-- /.forgot-box -->

					</div><!-- /.position-relative -->

				</div>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.main-content -->
</div><!-- /.main-container -->