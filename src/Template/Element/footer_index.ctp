<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; <?= date('Y'); ?> <?php  echo $this->Html->link('Montenegro Uniformes','/',['title' => 'Fardamentos Profissionais', 'alt' => 'fardamento em recife']); ?>. 
            </div>
            <div class="col-sm-6">
                <ul class="pull-right">
                    <li><a href="#backToTop" alt="fardamento pra empresa" onclick="$j('html,body').animate({scrollTop: $j('#backToTop').offset().top}, 2000);">Home</a></li>
                    <li><a href="#feature" alt="camisetas promocionais" onclick="$j('html, body').animate({scrollTop: $j('#feature').offset().top}, 2000);">Nossa Empresa</a></li>
                    <li><a href="#services" alt="uniformes em recife" onclick="$j('html, body').animate({scrollTop: $j('#services').offset().top}, 2000);">O que fazemos</a></li>
                    <li><a href="#portfolio" alt="fardamentos para escola" onclick="$j('html, body').animate({scrollTop: $j('#portfolio').offset().top}, 2000);">Alguns Produtos</a></li>
                    <li><a href="#partner" alt="uniformes para saude"  onclick="$j('html, body').animate({scrollTop: $j('#partner').offset().top}, 2000);">Parceiros</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->