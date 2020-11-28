<div class="main-content-inner">
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="#">Home</a>
            </li>
            <li class="active">Posts</li>
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
                Posts
                <small>
                    <a class="btn btn-sm btn-success" href="posts/add">
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
                                <th>Título</th>
                                <th>
                                    <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                    Criado
                                </th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($posts as $post): ?>
                                <tr>
                                    <td><?= $this->Number->format($post->id) ?></td>
                                    <td><?= h($post->title) ?></td>
                                    <td><?= h($post->created) ?></td>
                                    <td class="">
                                        <div class="hidden-sm hidden-xs btn-group">
                                            <a class="btn btn-xs btn-warning" href="posts/edit/<?= $post->id ?>">
                                                <i class="ace-icon fa fa-pencil bigger-120"></i>
                                            </a>

                                            <a class="btn btn-xs btn-danger" href="posts/delete/<?= $post->id ?>">
                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                            </a>
                                        </div>
                                        
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} no total')]) ?></p>
    </div>   
                <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div>