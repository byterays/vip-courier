<?php
require "secure.php";
require_once "../config/database.php";

// $dbh = new PDO("mysql:host=localhost;dbname=vip_courier", "root", "myNepal#199");
$host = $config["database"]["host"];
$db = $config["database"]["db"];
$db_user = $config["database"]["user"];
$db_password = $config["database"]["password"];

 //$con_str = "mysql:host={$host};dbname={$db},{$db_user}, {$db_password}";
 $con = new PDO("mysql:host={$host};dbname={$db}", $db_user, $db_password);


//     var_dump($con);
//     exit;