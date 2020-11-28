 <div class="widget categories">
    <h3>Categorias</h3>
    <div class="row">
        <div class="col-sm-6">
            <ul class="blog_category">
                <?php foreach($categories as $id => $category): ?>
                <li>
                    <a href="<?= $this->request->webroot ?>posts?categoria=<?= $id ?>"><?= $category ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>                     
</div><!--/.categories-->
