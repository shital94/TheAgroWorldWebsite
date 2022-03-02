<?php
session_start();
if(isset($_SESSION['abc'])=="")
{
	header("location:index.php?m3=3");
	exit(0);
}
include("connect.php");
extract($_POST);
$i=$_REQUEST['did'];




mysql_query("delete from tbl_city where cid=$i") or die ("delete fail");
header("location:city_show.php?ctdel=1");
?>