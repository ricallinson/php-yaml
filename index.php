<?php
require(__DIR__ . DIRECTORY_SEPARATOR . "spyc" . DIRECTORY_SEPARATOR . "Spyc.php");

/*
	  Expose the Spyc functions in a singleton.
*/

class PhpYaml {

	  public function parse($str) {
		    return Spyc::YAMLLoadString($str);
	  }

	  public function load($filename) {
		    return Spyc::YAMLLoad($filename);
	  }

	  public function dump($data) {
		    return Spyc::YAMLDump($data);
	  }
}

$module->exports = new PhpYaml();

/*
    Add YAML extension loader implementations.
*/

Module::$extensions[".yml"] = function ($module, $filename) {
    $module->exports = Spyc::YAMLLoad($filename);
};

Module::$extensions[".yaml"] = Module::$extensions[".yml"];
