<?php use Cake\I18n\Date; ?>
<section id="blog" class="container">
        <div class="blog">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-item">
                        <img class="img-responsive img-blog" src="<?= $this->request->webroot . $post['photo'] ?>" width="100%" alt="" />
                            <div class="row">  
                                <div class="col-xs-12 col-sm-2 text-center">
                                    <div class="entry-meta">
                                        <?php  $date = new Date($post->created); ?>
                                        <span id="publish_date"><?= $date->format('d M'); ?></span>
                                        <span><i class="fa fa-user"></i> <a href="#"> <?= $post['user']['name'] ?></a></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-10 blog-content">
                                    <h2><?= $post['title'] ?></h2>
                                    <p><?= $post['content'] ?></p>

                                    <div class="post-tags">
                                        <strong>Tag:</strong> 
                                        <?php foreach($post['tags'] as $tag): ?>
                                            <a href="#"><?= $tag['name'] ?></a> /
                                        <?php endforeach; ?>
                                        <!-- <a href="#">Cool</a> / <a href="#">Creative</a> / <a href="#">Dubttstep</a> -->
                                    </div>

                                </div>
                            </div>
                        </div><!--/.blog-item-->
                        
                        <div class="media reply_section">
                            <div class="pull-left post_reply text-center">
                                <a href="#"><img src="http://localhost/montenegrouniformes/webroot/img/blog/logo.jpg" class="img-circle" alt="" /></a>
                                <ul>
                                    <li><a href="http://www.facebook.com/MontenegroUniformes" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                            <div class="media-body post_reply_content">
                                <h3>Montenegro Uniformes</h3>
                                <p class="lead">A <strong>Montenegro Uniformes</strong> vem se consolidando cada vez mais no mercado com o uma empresa que tem compromisso com a ética e respeito aos seus cliente e parceiros. Assim, vem construindo uma trajetória de sucesso no mercado agindo sempre com profissionalismo e oferecendo sempre o que há de melhor em termos de qualidade e alto padrão em seus produtos e serviços. É por isso que temos orgulho em estampar: <i>Nossa marca é a qualidade.</i></p>
                            </div>
                        </div> 
                    </div><!--/.col-md-8-->

                <aside class="col-md-4">
                    <?= $this->element('facebook_page') ?>
                    <?= $this->element('aside_category') ?>
                    <?= $this->element('aside_tag') ?>     
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->
