# Php-yaml

This is a [php-require](https://github.com/ricallinson/php-require) module which packages the [spyc](https://github.com/mustangostang/spyc) YAML parser.

    require("../node_modules/php-require/index.php");

	$yaml = $require("php-yaml");

	$yaml->load("./config.yaml");

	$yaml->dump(["a", "b"]);

	$yaml->parse($yaml->dump(["c", "d"]));

	$config = $require("./config.yaml");
