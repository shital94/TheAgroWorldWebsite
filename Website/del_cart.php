<?php
session_start();
$w=$_SESSION['who'];
$g=$_SESSION['gro'];
$u=$_SESSION['use'];
if($u=="" && $w=="" && $g=="")
{
	header("location:index.php?m3=3");
	exit(0);	
}
include("connect.php");
extract($_POST);
$i=$_REQUEST['did'];

if($_SESSION['who']!="")
{
	mysql_query("delete from invoice_farmer where ifid=$i") or die ("delete fail1");
	header("location:cart.php?ctdel=1");

}
else if($_SESSION['gro']!="")
{
	mysql_query("delete from invoice_wholesaler where iwid=$i") or die ("delete fail2");
	header("location:cart.php?ctdel=1");

}
else	
{
	mysql_query("delete from invoice_grocerystore where igid=$i") or die ("delete fail3");
	header("location:cart.php?ctdel=1");

}

?>