<?php
session_start();
if(!isset($_SESSION["loggedin_userid"]) || @$_SESSION["loggedin_userid"]==""){
    header("location:./");
    exit;
}
