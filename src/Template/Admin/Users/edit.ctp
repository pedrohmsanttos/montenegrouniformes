<?php
/**
 * @var \App\View\AppView $this
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('username');
            echo $this->Form->control('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div> -->


<div class="main-content-inner">
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Usuários</a>
            </li>
            <li class="active">Adicionar</li>
        </ul><!-- /.breadcrumb -->

        <div class="nav-search" id="nav-search">
            <form class="form-search">
                <span class="input-icon">
                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                </span>
            </form>
        </div><!-- /.nav-search -->
    </div>

    <div class="page-content">

        <!-- PAGE CONTENT BEGINS -->
        <div class="page-header">
            <h1>
                Usuários
                <small>
                    <i class="ace-icon fa fa-angle-double-right"></i>
                    Editar
                </small>
            </h1>
        </div><!-- /.page-header -->
        
        <div class="row">
            <div class="col-xs-12">
                <?= $this->Form->create($user, ['class' => 'form-horizontal', 'role' => 'form']) ?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Nome</label>
                        <div class="col-sm-9">
                            <?= $this->Form->control('name', ['class' => 'col-xs-10 col-sm-5', 'label' => false]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Email</label>
                        <div class="col-sm-9">
                            <?= $this->Form->control('username', ['class' => 'col-xs-10 col-sm-5', 'label' => false]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Senha</label>
                        <div class="col-sm-9">
                            <input type="password" id="password" name="password" placeholder="Senha" class="col-xs-10 col-sm-5">
                        </div>
                    </div>

                    <div class="clearfix form-actions">
                        <div class="col-md-offset-3 col-md-9">
                            <button class="btn btn-info" type="submit">
                                <i class="ace-icon fa fa-check bigger-110"></i>
                                Enviar
                            </button>
                        </div>
                    </div>
                <?= $this->Form->end() ?>

                <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div>


