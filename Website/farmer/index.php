<?php
session_start();
if(isset($_REQUEST['login'])=="true")
{
	extract($_POST);
	include("connect.php");
	$q=mysql_query("select * from  tbl_farmer where f_login='$lid' and password='$pwd'") or die("Query Fail");
	if(mysql_num_rows($q))
	{
		$data=mysql_fetch_array($q);
		$_SESSION['abc']=$data['f_id'];
		header("location:home.php");
	}
	else 
	{
		header("location:index.php?m=1");
	}	
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Farmer - Welcome To The Agro World</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="The Agro, Agro, Farm, Farmer, Wholesaler, Grocerystore, Grains, Vegetables, Fruits" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
</head>
<body>	
<div class="login-page">
    <div class="login-main">  	
    	 <div class="login-head">
				<h1><b><font color="#000000">Farmer Login Panel</font></b></h1>
	  </div>
			<div class="login-block">
				<form id="form1" name="form1" method="post">
			<input type="hidden"  name="login" value="true">	
					<input name="lid" type="text" id="lid" placeholder="User ID" required="">
					<input name="pwd" type="password" class="lock" id="pwd" placeholder="Password">
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								
							</ul>
						</div>
						<div class="forgot">
							<a href="forgot_password.php">Forgot password?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="Sign In" value="Login">	
									
					
					
				</form>
				
			</div>
      </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
	<?php include("copyrights.php") ?>	
<!--COPY rights end here-->

<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>
<?php if(isset($_REQUEST['m'])=="1") {?>
<script language="javascript">
alert("User id or passwors is incorrect");
</script>
<?php }?>

<?php if(isset($_REQUEST['m2'])=="2") {?>
<script language="javascript">
alert("Logout Successfully");
</script>
<?php }?>

<?php if(isset($_REQUEST['m3'])=="3") {?>
<script language="javascript">
alert("Please Login to Access");
</script>
<?php }?>                    
						
