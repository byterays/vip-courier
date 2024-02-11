<?php
require_once "../config/init.php";
require_once "../config/database.php";
require "secure.php";

$host = $config["database"]["host"];
$db = $config["database"]["db"];
$db_user = $config["database"]["user"];
$db_password = $config["database"]["password"];
$con = new PDO("mysql:host={$host};dbname={$db}", $db_user, $db_password);
