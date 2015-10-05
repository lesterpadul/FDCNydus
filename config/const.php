<?php 
class ConstVars { 
	public $config = array();

	function __construct () {
		$path = dirname(__DIR__);
		$this->config['DIR'] = $path;
		$this->config['sh.pull'] = array("");
		$this->config['sh.push'] = array(
			$path."/sh_commands/pullDev.sh"
		);
	}
}

