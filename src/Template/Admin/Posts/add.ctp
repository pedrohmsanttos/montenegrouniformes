<div class="main-content-inner">
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Posts</a>
            </li>
            <li class="active">Adicionar</li>
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
                    <i class="ace-icon fa fa-angle-double-right"></i>
                    Adicionar
                </small>
            </h1>
        </div><!-- /.page-header -->
        
        <div class="row">
            <div class="col-xs-12">
                <?= $this->Flash->render() ?>

                <?= $this->Form->create($post, ['class' => 'form-horizontal', 'role' => 'form', 'type' => 'file']) ?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Título</label>
                        <div class="col-sm-9">
                            <?= $this->Form->control('title', ['class' => 'col-xs-10 col-sm-5', 'label' => false, 'placeholder' => 'Título']) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Url</label>
                        <div class="col-sm-9">
                            <?= $this->Form->control('url', ['class' => 'col-xs-10 col-sm-5', 'label' => false, 'placeholder' => 'Url']) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Categoria</label>
                        <div class="col-sm-4">
                            <?php echo $this->Form->control('category_id', ['empty'=> 'Selecione', 'options' => $categories, 'label' =>false, 'class' => 'form-control']); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Imagem</label>
                        <div class="col-sm-4">
                            <?= $this->Form->control('photo', ['type' => 'file','class' => 'col-xs-10 col-sm-5', 'label' => false, 'placeholder' => 'Url']) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Tags</label>
                        <div class="col-sm-9">

                            <?php echo $this->Form->control('tags._ids', ['options' => $tags, 'label' =>false, 'class' => 'chosen-select form-control tag-input-style']); ?>

                        </div>
                    </div>

                    <?= $this->Form->control('content', ['type' => 'hidden']) ?>
                    <div class="wysiwyg-editor" id="editor1"></div>

                    <div class="hr hr-double dotted"></div>
                    
                    <div class="clearfix form-actions">
                        <div class="col-md-offset-3 col-md-9">
                            <button class="btn btn-info" type="submit">
                                <i class="ace-icon fa fa-check bigger-110"></i>
                                Enviar
                            </button>
                        </div>
                    </div>
                <?= $this->Form->end() ?>

                <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div>

<?= $this->Html->script('admin/jquery-ui.custom.min.js') ?>
<?= $this->Html->script('admin/jquery.ui.touch-punch.min.js') ?>
<?= $this->Html->script('admin/markdown.min.js') ?>
<?= $this->Html->script('admin/bootstrap-markdown.min.js') ?>
<?= $this->Html->script('admin/jquery.hotkeys.index.min.js') ?>
<?= $this->Html->script('admin/bootstrap-wysiwyg.min.js') ?>
<?= $this->Html->script('admin/bootbox.js') ?>
<?= $this->Html->script('admin/chosen.jquery.min.js') ?>
<?= $this->Html->script('admin/bootstrap-tag.min.js') ?>


<script type="text/javascript">

    function showErrorAlert (reason, detail) {
        var msg='';
        if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
        else {
            //console.log("error uploading file", reason, detail);
        }
        $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
         '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
    }

    $('#editor1').ace_wysiwyg({
        toolbar:
        [
            'font',
            null,
            'fontSize',
            null,
            {name:'bold', className:'btn-info'},
            {name:'italic', className:'btn-info'},
            {name:'strikethrough', className:'btn-info'},
            {name:'underline', className:'btn-info'},
            null,
            {name:'insertunorderedlist', className:'btn-success'},
            {name:'insertorderedlist', className:'btn-success'},
            {name:'outdent', className:'btn-purple'},
            {name:'indent', className:'btn-purple'},
            null,
            {name:'justifyleft', className:'btn-primary'},
            {name:'justifycenter', className:'btn-primary'},
            {name:'justifyright', className:'btn-primary'},
            {name:'justifyfull', className:'btn-inverse'},
            null,
            {name:'createLink', className:'btn-pink'},
            {name:'unlink', className:'btn-pink'},
            null,
            {name:'insertImage', className:'btn-success'},
            null,
            'foreColor',
            null,
            {name:'undo', className:'btn-grey'},
            {name:'redo', className:'btn-grey'}
        ],
        'wysiwyg': {
            fileUploadError: showErrorAlert
        }
    }).prev().addClass('wysiwyg-style2');


    $('#photo').ace_file_input({
                    style: 'well',
                    // btn_choose: 'Drop files here or click to choose',
                    btn_change: null,
                    no_icon: 'ace-icon fa fa-cloud-upload',
                    droppable: true,
                    thumbnail: 'small',//large | fit

                    btn_choose: "Arraste ou clique para fazer upload",
                    no_icon: "ace-icon fa fa-picture-o",        
                    whitelist_ext: ["jpeg", "jpg", "png", "gif" , "bmp"],
                    whitelist_mime: ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"]

                    //,icon_remove:null//set null, to hide remove/reset button
                    /**,before_change:function(files, dropped) {
                        //Check an example below
                        //or examples/file-upload.html
                        return true;
                    }*/
                    /**,before_remove : function() {
                        return true;
                    }*/
                    ,
                    preview_error : function(filename, error_code) {
                        //name of the file that failed
                        //error_code values
                        //1 = 'FILE_LOAD_FAILED',
                        //2 = 'IMAGE_LOAD_FAILED',
                        //3 = 'THUMBNAIL_FAILED'
                        //alert(error_code);
                    }
            
                }).on('change', function(){
                    //console.log($(this).data('ace_input_files'));
                    //console.log($(this).data('ace_input_method'));
                });


$('.chosen-select').chosen({allow_single_deselect:true});

$(".form-horizontal").on('submit',function(){
    $('input[name=content]' , this).val($('#editor1').html());
});





</script>

