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
                    <li class="active"><?php  echo $this->Html->link('Home','/',['title' => 'Fardamentos Profissionais', 'alt' => 'fardamento para empresa em recife']); ?></li>
                    <li><a href="#feature" alt="fardamentos para industria" onclick="$j('html, body').animate({scrollTop: $j('#feature').offset().top}, 2000);">Nossa Empresa</a></li>
                    <li><a href="#services" alt="uniformes para escritório" onclick="$j('html, body').animate({scrollTop: $j('#services').offset().top}, 2000);">O que fazemos</a></li>
                    <li><a href="#portfolio" alt="camisas personalizadas" onclick="$j('html, body').animate({scrollTop: $j('#portfolio').offset().top}, 2000);">Alguns Produtos</a></li>
                    <li><a href="#partner" alt="fardamentos social" onclick="$j('html, body').animate({scrollTop: $j('#partner').offset().top}, 2000);">Parceiros</a></li>
                    <li><a href="#conatcat-info" alt="uniformes profissionais" onclick="$j('html, body').animate({scrollTop: $j('#conatcat-info').offset().top}, 2000);">Contato</a></li>
                    <li><a href="<?= $this->request->webroot ?>posts" alt="empresa de fardas">Blog</a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->

</header><!--/header--> 