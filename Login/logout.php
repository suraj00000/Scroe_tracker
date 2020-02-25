<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["pass"]);
header("Location:home.php");
?>