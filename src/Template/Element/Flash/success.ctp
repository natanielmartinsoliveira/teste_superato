<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<br>
<div class="container">	
	<div class="alert alert-success message error" role="alert" onclick="this.classList.add('hidden');">
	  <?= $message ?>
	</div>
</div>