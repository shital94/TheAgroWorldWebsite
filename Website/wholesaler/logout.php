<?php
session_start();
$_SESSION['abc']=='';
session_destroy();
header("location:index.php?m2=2");
?>