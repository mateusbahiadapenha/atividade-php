<?php
 session_start();
$_SESSION["nome"];
$_SESSION["id"];
session_destroy();
unset($_SESSION);
header("Location: index.php");

?>
