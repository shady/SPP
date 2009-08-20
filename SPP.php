#!/usr/bin/php -f 
<?php
/**
* Class: SPP
*
**/

Class SPP{

	const class_name = "[SPP] ";
	
	//arguments
	public $args = array();
	//output class
	
	function SPP($argv)	{
		Settings::initSettings();
		$this->args = $argv;
		
		switch (count($argv)) {
			case 7:
				$this->initJob();
				break;
			default:
				Output::err(self::class_name . "Not enough arguments");
		}
	}
	
	function initJob() {
		//
		//Make new Job instance.
		var_dump(Settings::$settings);
	}
}

function __autoload($class_name) {
	require 'inc/' . $class_name . '.php';
}

$spp = new SPP($argv);
?>
