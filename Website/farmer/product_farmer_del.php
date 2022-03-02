<?php
session_start();
if(isset($_SESSION['abc'])=="")
{
	header("location:index.php?m3=3");
	exit(0);
}
include("connect.php");
$i=$_REQUEST['did'];

//delete file
$q1=mysql_query("select pic1,pic2,pic3 from tbl_products_farmer where pfid=$i")or die ("Query Failed1");

$data=mysql_fetch_array($q1);

$fn1=$data['pic1'];
$fn2=$data['pic2'];
$fn3=$data['pic3'];

$path="prod_img_f/";

unlink($path.$fn1);
unlink($path.$fn2);
unlink($path.$fn3);


mysql_query("delete from tbl_products_farmer where pfid=$i") or die ("delete fail");
header("location:product_farmer_show.php?pfdel=1");
?>