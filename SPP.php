#!/usr/bin/php -f 
<?php
/**
* Class: SPP
*
**/

Class SPP{

		const class_name = 'SPP';
		
		//arguments
		public $args = array();
		//output class
		public $output;
		public $settings;
		
		function SPP($argv)	{
			$this->args = $argv;
			$output = new Output();
			//$output->show = false;
			$settings = new Settings();
			
			switch (count($argv)) {
				case 4:
					$this->
					break;
				case 6:
					echo "torrentflux";
					break;
				default:
					echo "Not enough arguments, try again later";
			}
		}
		
		function sabnzbd() {
		
		}
		
		function torrentflux() {
		
		}
}

function __autoload($class_name) {
	require_once 'inc/' . $class_name . '.php';
}
//Catch terminate.

pcntl_signal(SIGTERM, "cleanUp"); 

$spp = new SPP($argv);

$spp->output->p("Hoi!");
?>
