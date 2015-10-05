<?php 
class ConstVars { 
	public $config = array();
	function __construct () {
		$config['DIR'] = __DIR__;
		$config['sh.pull'] = array("");
		$config['sh.push'] = array(
			$_SERVER['DOCUMENT_ROOT']."/sh_commands/pullDev.sh"
		);
	}
}