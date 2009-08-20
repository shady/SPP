<?php
/**
* Class: Output
*
**/

Class Output {
		const class_name = "[Output] ";

		static $show_debug = true;
		static $log;
		
		static function d($string) {
			if (self::$show_debug) {
				self::p("[DEBUG:]" . $string);
			}
		}
		
		static function p($string) {
			fwrite(STDOUT, $string . "\n");
			self::$log .= $string . "\n";
		}
		
		static function err($string) {
			fwrite(STDERR, "[ERROR:]" . $string . "\n");
			self::$log .=  "[ERROR:]" . $string . "\n";
		}
		
		function savelog() {
			//TODO
		}
		
		function getLog() {
			return self::$log;
		}
		
}

?>