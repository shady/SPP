<?php
/**
* Class: Settings
*
**/

Class Settings {
	const class_name = "[Settings] ";
	
	static $settings;
	
	static function initSettings() {
		if (file_exists(getcwd() . "/settings.xml")) {
			self::load();
		} else {
			self::make_new();
		}
	}
	
	static function load() {
		Output::d(self::class_name . "settings.xml found");
		self::$settings = self::xml2array(file_get_contents(getcwd() . "/settings.xml"));
	}
	
	static function save() {
		echo "saven";
	}
	
	static function make_new() {
		Output::p(self::class_name . "settings.xml not found, making default..");
		echo "maak nieuw";
	}
	
	static function xml2array($xml) {
			$xmlary = array();
				   
			$reels = '/<(\w+)\s*([^\/>]*)\s*(?:\/>|>(.*)<\/\s*\\1\s*>)/s';
			$reattrs = '/(\w+)=(?:"|\')([^"\']*)(:?"|\')/';

			preg_match_all($reels, $xml, $elements);

			foreach ($elements[1] as $ie => $xx) {
					$xmlary[$ie]["name"] = $elements[1][$ie];
				   
					if ($attributes = trim($elements[2][$ie])) {
							preg_match_all($reattrs, $attributes, $att);
							foreach ($att[1] as $ia => $xx)
									$xmlary[$ie]["attributes"][$att[1][$ia]] = $att[2][$ia];
					}

					$cdend = strpos($elements[3][$ie], "<");
					if ($cdend > 0) {
							$xmlary[$ie]["text"] = trim(substr($elements[3][$ie], 0, $cdend - 1));
					}

					if (preg_match($reels, $elements[3][$ie]))
							$xmlary[$ie]["elements"] = self::xml2array($elements[3][$ie]);
					else if ($elements[3][$ie]) {
							$xmlary[$ie]["text"] = trim($elements[3][$ie]);
					}
			}

			return $xmlary;
	}
}

?>