<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>


<div class="main-content-inner">
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="#">Home</a>
            </li>
            <li class="active">Usuários</li>
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
                    <a class="btn btn-sm btn-success" href="tags/add">
                        <i class="ace-icon fa fa-plus bigger-110"></i>
                        <span class="bigger-110 no-text-shadow">Novo</span>
                    </a>
                </small>
            </h1>
        </div><!-- /.page-header -->
        
        <div class="row">
            <div class="col-xs-12">
                <?= $this->Flash->render() ?>
                    <table id="simple-table" class="table  table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="detail-col">#</th>
                                <th>Nome</th>
                                <th>
                                    <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                    Criado
                                </th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($tags as $tag): ?>
                                <tr>
                                    <td><?= $this->Number->format($tag->id) ?></td>
                                    <td><?= h($tag->name) ?></td>
                                    <td><?= h($tag->created) ?></td>
                                    <td class="">
                                        <div class="hidden-sm hidden-xs btn-group">
                                            <a class="btn btn-xs btn-warning" href="tags/edit/<?= $tag->id ?>">
                                                <i class="ace-icon fa fa-pencil bigger-120"></i>
                                            </a>

                                            <a class="btn btn-xs btn-danger" href="tags/delete/<?= $tag->id ?>">
                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                            </a>
                                        </div>
                                        
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>   
                <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div>

