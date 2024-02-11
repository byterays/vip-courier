<?php
require_once "app.php";

session_destroy();

header("location:./");
exit;