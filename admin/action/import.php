<?php
require_once "app.php";
require_once "secure.php";


if($_FILES){


    $_SESSION["flash"]["type"]="success";
    $_SESSION["flash"]["message"]="File imported successfully";
    header("location: ../list-consignments");

}
else{
    $_SESSION["flash"]["type"]="danger";
    $_SESSION["flash"]["message"]="Invalid file or file not found.";
    header("location: ../import-consignments");
    exit;
}
