<?php 
$uses = array(
	$_SERVER['DOCUMENT_ROOT'].'/nc_ad_devel/inc/FDCWebhook.php',
	$_SERVER['DOCUMENT_ROOT'].'/nc_ad_devel/config/const.php',
	$_SERVER['DOCUMENT_ROOT'].'/nc_ad_devel/inc/core/ErrorHandler.php'
);
if (count($uses) !== 0 && is_array($uses) !== FALSE) {
	foreach ($uses as $dependency) {
		require_once($dependency);
	}
}