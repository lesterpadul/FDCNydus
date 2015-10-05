<?php 
// set the uses array
$path = dirname(__DIR__);
$uses = array(
	$path.'/config/const.php',
	$path.'/inc/FDCWebhook.php',
	$path.'/inc/core/ErrorHandler.php'
);

// count and check if uses array is valid
if (count($uses) !== 0 && is_array($uses) !== FALSE) {
	foreach ($uses as $dependency) {
		require_once($dependency);
	}
}