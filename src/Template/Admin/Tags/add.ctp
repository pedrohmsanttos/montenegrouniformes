<?php
/**
 * @var \App\View\AppView $this
 */
?>

<div class="main-content-inner">
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Tags</a>
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
                Tags
                <small>
                    <i class="ace-icon fa fa-angle-double-right"></i>
                    Adicionar
                </small>
            </h1>
        </div><!-- /.page-header -->
        
        <div class="row">
            <div class="col-xs-12">
                <?= $this->Form->create($tag, ['class' => 'form-horizontal', 'role' => 'form']) ?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Nome</label>
                        <div class="col-sm-9">
                            <?= $this->Form->control('name', ['class' => 'col-xs-10 col-sm-5', 'label' => false, 'placeholder' => 'Nome']) ?>
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
