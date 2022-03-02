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
$q=mysql_query("select w_pic from tbl_wholesaler where w_id=$i")or die ("Query Failed1");
$data=mysql_fetch_array($q);
$fn=$data['photo'];
$path="images/";
unlink($path.$fn);

mysql_query("delete from tbl_wholesaler where w_id=$i") or die ("delete fail");
header("location:wholesal_show.php?wsdel=1");
?>