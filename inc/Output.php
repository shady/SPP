<?php
/**
* Class: Output
*
**/

Class Output {
		const class_name = 'Output';

		private $show_debug = true;
		private $log;
		
		
		function Output()	{
			
		}
		
		function d($string) {
			if ($this->show_debug) {
				$this->p('[DEBUG:]' . $string);
				$this->log .= $this->p('[DEBUG:]' . $string);
			}
		}
		
		function p($string) {
			fwrite(STDOUT, $string . "\n")
			$this->log .= 
		}
		
		function err($string) {
			fwrite(STDERR, $string . "\n")
		}
		
		function savelog() {
		//TODO
		}
		
}

function __autoload($class_name) {
	require_once $class_name . '.php';
}