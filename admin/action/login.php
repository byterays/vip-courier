<?php
require_once "app.php";

$stmt = $con->prepare("SELECT * FROM users where login_name = ?");

//$password = password_hash($_POST["password"],PASSWORD_BCRYPT);
$username = $_POST['email'];
$password = $_POST["password"];

$stmt->execute([$username]);

$row = $stmt->fetch();

$is_valid_pwd = password_verify($password, $row["password"]);

if ($is_valid_pwd==1) {

    $_SESSION["loggedin_userid"]=$row["id"];
    $_SESSION["display_name"]= $row["display_name"];
    $_SESSION["email"]=$row["login_name"];
    header("location:../dashboard");
    exit;
}

header("location:../");
exit;