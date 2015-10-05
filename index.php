<?php 
$path = dirname(__FILE__); 

// load
require_once($path."/inc/inc.php");

// declare error handler
$error = new ErrorHandler();

// check if post is TRUE
if (isset($_POST) === FALSE) {
	$error->writeError(array("content" => "Invalid POST data"));
	exit();
}

// get payload.
$payload = json_decode($_POST['payload']);

// declare webhook
$webhook = new FDCWebhook($payload);

// check if the branch is allowed
if ($webhook->isAllowedBranch() === FALSE) {
	$error->writeError(array("content" => "Invalid branch origin : ".$payload->ref));
	exit();
}

// execute pull
$webhook->executePull();