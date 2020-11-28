<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-4">
                    <div class="top-number"><p><i class="fa fa-phone"></i>  (81) 4106 - 5784 &nbsp;&nbsp;&nbsp; <i class="fa fa-whatsapp"></i>  (81) 99948 - 6636</p></div>
                </div>
                <div class="col-sm-6 col-xs-8">
                    <div class="social">
                        <ul class="social-share">
                            <li><a href="https://www.facebook.com/MontenegroUniformes" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/montenegrouniformes/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <div class="search">
                            <!-- <form role="form">
                                <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                <i class="fa fa-search"></i>
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </div><!--/.top-bar-->

    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php 
                    echo $this->Html->image("logo.png", [
                        "alt" => "fardamentos profissionais",
                        'url' => ['controller' => 'Pages', 'action' => 'index']
                    ]);
                ?>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?= $this->request->webroot ?>#backToTop" alt="fardamento pra empresa">Home</a></li>
                    <li><a href="<?= $this->request->webroot ?>#feature" alt="fardamentos para industria">Nossa Empresa</a></li>
                    <li><a href="<?= $this->request->webroot ?>#services" alt="uniformes para escritório">O que fazemos</a></li>
                    <li><a href="<?= $this->request->webroot ?>#portfolio" alt="camisas personalizadas" >Alguns Produtos</a></li>
                    <li><a href="<?= $this->request->webroot ?>#partner" alt="fardamentos social">Parceiros</a></li>
                    <li><a href="<?= $this->request->webroot ?>#conatcat-info" alt="uniformes profissionais">Contato</a></li>
                    <li><a href="<?= $this->request->webroot ?>posts" alt="empresa de fardas">Blog</a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->

</header><!--/header--> 