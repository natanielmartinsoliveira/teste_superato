<?php
$class = 'message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<br>
<div class="container">	
	<div class="alert alert-default <?= h($class) ?>" onclick="this.classList.add('hidden');"><?= $message ?></div>
</div>
