<?php 
class FDCWebhook{

	// set the allowed branch
	private $allowedBranch = "nc-dev";
	private $payload =  NULL;
	private $const = NULL;

	// construct
	function __construct($payload){
		$this->payload = $payload;
	}

	// check if branch is allowed
	public function isAllowedBranch(){
		$check = false;
		if (isset($this->payload->ref) && $this->allowedBranch == strtolower($this->allowedBranch)) {
			$check = true;
		}
		return $check;
	}

	// pull from dev branch
	public function executePull(){
		echo shell_exec('sh '.$_SERVER["DOCUMENT_ROOT"].'/sh_commands/pullDev.sh');
	}
}
