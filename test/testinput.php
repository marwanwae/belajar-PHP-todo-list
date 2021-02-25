<?php

require_once  __DIR__ . "/../helper/input.php";

$name = input('name');
echo "hello $name";
var_dump($name);