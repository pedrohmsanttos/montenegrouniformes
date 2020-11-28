<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!-- <div class="message success" onclick="this.classList.add('hidden')"><?= $message ?></div> -->

<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert">
		<i class="ace-icon fa fa-times"></i>
	</button>
	<strong>Sucesso!</strong>
	<?= $message ?>
	<br>
</div>
