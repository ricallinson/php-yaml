<?php

require("../node_modules/php-require/index.php");

$yaml = $require("../");

var_dump($require("./configs/yaml.yaml"));

var_dump($require("./configs/yml.yml"));
