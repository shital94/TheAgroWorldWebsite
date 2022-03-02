<?php
session_start();

$_SESSION['who']=='';
$_SESSION['gro']=='';
$_SESSION['use']=='';

session_destroy();
header("location:login.php?m2=2");
?>