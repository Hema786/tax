<?php
session_start();

require "control/Util.php";
$util = new Util();

//Clear Session
$_SESSION["user_id"] = "";
session_destroy();

// clear cookies
$util->clearAuthCookie();

header("Location: ./");
?>