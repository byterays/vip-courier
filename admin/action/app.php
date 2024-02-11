<?php
session_start();
require "secure.php";
require_once "../config/database.php";

$host = $config["database"]["host"];
$db = $config["database"]["db"];
$db_user = $config["database"]["user"];
$db_password = $config["database"]["password"];
$con = new PDO("mysql:host={$host};dbname={$db}", $db_user, $db_password);
