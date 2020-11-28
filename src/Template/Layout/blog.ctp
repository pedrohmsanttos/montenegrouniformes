<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Uniformes Profissionais com qualidade para sua empresa ou escola. Confecção de camisas promocionais para eventos. Fardamentos para hospitais, pousadas e mais">
    <meta name="keywords" content="camiseta, camisa para evento, camisa promocional, camisa sublimada, sublimação total, camisa polo, calça social, calça em brim, calça em oxford, calça feminina, calça em gabardine, jalecos, pousadas, uniformes profissionais, fardamentos profissionais, candeias, boa viagem, piedade, prazeres, recife, jaboatão, uniformes femininos, uniformes masculinos, fábrica de uniformes, fábrica de fardamentos,soluções para uniformização, roupas profissionais, uniformes corporativos, conjuntos profissionais">

    <script data-ad-client="ca-pub-1348918273806245" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <meta name="author" content="phmsanttos@gmail.com">
    <title>Montenegro Uniformes | <?= $title ?></title>

    <!-- core CSS -->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('animate.min.css') ?>
    <?= $this->Html->css('prettyPhoto.css') ?>
    <?= $this->Html->css('main.css') ?>
    <?= $this->Html->css('responsive.css') ?>
    <?= $this->Html->css('isLoading/isLoading.min.css') ?>

    <?= $this->Html->css('alertify/alertify.min.css') ?>
    <?= $this->Html->css('alertify/themes/bootstrap.css') ?>

    <?= $this->Html->css('validetta/validetta.min.css') ?>

        <!-- <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png"> -->

        <?= $this->Html->script('jquery.js') ?>
        <?= $this->Html->script('bootstrap.min.js') ?>
        <?= $this->Html->script('jquery.isotope.min.js') ?>
        <?= $this->Html->script('main.js') ?>
        <?= $this->Html->script('wow.min.js') ?>
        <?= $this->Html->script('jquery.prettyPhoto.js') ?>
        <?= $this->Html->script('isLoading/isLoading.min.js') ?>
        <?= $this->Html->script('alertify/alertify.min.js') ?>
        <?= $this->Html->script('inputMask/jquery.inputmask.bundle.js') ?>
        
        <script type="text/javascript">
            // Use jQuery com a variavel $j(...)
            var $j = jQuery.noConflict();
            $j(document).ready(function() {
                $j(".backToTop").hide();
                $j(function() {
                    $j(window).scroll(function() {
                        if ($j(this).scrollTop() > 300) {
                            $j('.backToTop').fadeIn();
                        } else {
                            $j('.backToTop').fadeOut();
                        }
                    });
                    $j('.backToTop').click(function() {
                        $j('body,html').animate({scrollTop: 0}, 2000);
                    });
                });



            });
        </script>

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/59e412b2c28eca75e462636a/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
    </head><!--/head-->

    <body class="homepage" id="backToTop">
        <!-- <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script> -->

        
        <?= $this->element('navbar_blog'); ?>
        <?= $this->fetch('content') ?>
        <?= $this->element('footer_blog') ?>
    </body>
</html>