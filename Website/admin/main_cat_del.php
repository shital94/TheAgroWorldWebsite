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


//delete file
$q=mysql_query("select pic_scat from tbl_sub_cat where sid=$i")or die ("Query Failed1");
$data=mysql_fetch_array($q);
$fn=$data['pic_scat'];
$path="photos/";
unlink($path.$fn);


mysql_query("delete from tbl_main_cat where mid=$i") or die ("delete fail");
header("location:main_cat_show.php?mcdel=1");
?>