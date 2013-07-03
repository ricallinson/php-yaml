<?php

header('Content-type: text/plain');

require("../node_modules/php-require/index.php");

$yaml = $require("../");

var_dump($yaml->load("./configs/yaml.yaml"));

var_dump($yaml->dump(["a", "b"]));

var_dump($yaml->parse($yaml->dump(["c", "d"])));

var_dump($require("./configs/yaml.yaml"));

var_dump($require("./configs/yml.yml"));

var_dump(Spyc::YAMLLoad("./configs/yml.yml"));