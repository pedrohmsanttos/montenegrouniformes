<?php use Cake\I18n\Date; ?>
<section id="blog" class="container">
    <div class="center">
        <h2>Blog</h2>
    </div>

    <div class="blog">
        <div class="row">
             <div class="col-md-8">
                <?php if(count($posts) > 0): ?>
                <?php foreach($posts as $post): ?>

                    <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 text-center">
                                <div class="entry-meta">
                                    <?php  $date = new Date($post->created); ?>
                                    <span id="publish_date"><?= $date->format('d M'); ?></span>
                                    <span><i class="fa fa-user"></i> <a href="#"><?= $post['user']['name'] ?></a></span>
                                </div>
                            </div>
                                
                            <div class="col-xs-12 col-sm-10 blog-content">
                                <a href="<?= $this->request->webroot . 'post/' . $post->url?>"><img class="img-responsive img-blog" src="<?= $this->request->webroot . $post->photo_dir . $post->photo ?>" width="100%" alt="" /></a>
                                <h2><a href="<?= $this->request->webroot . 'post/' . $post->url?>"><?= $post->title ?></a></h2>
                                <?= $this->Html->link(
                                'Leia Mais <i class="fa fa-angle-right"></i>',
                                ['controller' => 'posts', 'action' => 'display', $post->url],
                                ['escape' => false, 'title' => $post->title, 'class' => 'btn btn-primary readmore']
                            ) ?>

                            </div>
                        </div>    
                    </div><!--/.blog-item-->
                <?php endforeach; ?>
                    
                <div class="paginator">
                    <ul class="pagination">
                        <?= $this->Paginator->prev('< ' . __('Voltar')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('Próximo') . ' >') ?>
                    </ul>
                    <p><?= $this->Paginator->counter() ?></p>
                </div>
            <?php else: ?>
                Não existem posts para essa categoria
            <?php endif; ?>
            </div><!--/.col-md-8-->

            <aside class="col-md-4">
                <?= $this->element('facebook_page') ?>
                <?= $this->element('aside_category') ?>
                <?= $this->element('aside_tag') ?>

			</aside>  
        </div><!--/.row-->
    </div>
</section><!--/#blog-->
