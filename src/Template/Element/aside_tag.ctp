<div class="widget tags">
    <h3>Nuvem de Tags</h3>
    <ul class="tag-cloud">
        <?php foreach($tags as $id => $tag): ?>
            <li><a class="btn btn-xs btn-primary" href="<?= $this->request->webroot ?>posts?tag=<?= $id?>"><?= $tag ?></a></li>
        <?php endforeach; ?>
    </ul>
</div><!--/.tags-->