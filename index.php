<?php 
require_once "functions.php";
require_once "Database.php";
$config = require "config.php";

$db = new Database($config["database"]);

$config = require "config.php";

require "router.php";