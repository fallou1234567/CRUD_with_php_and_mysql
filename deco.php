<?php
session_start();
include 'header.php';
// destruction de la session
session_destroy();
header("location:index.php");
exit;
?>
