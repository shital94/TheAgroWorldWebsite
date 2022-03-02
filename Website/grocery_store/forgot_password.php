<?php
	if(isset($_REQUEST['forgot'])=="true")
	{
	extract($_POST);
	include("connect.php");
	$q=mysql_query("select * from tbl_grocerystore where email='$me' or mobile='$me'") or die("query fail");
	if(mysql_num_rows($q))
	{
		$data=mysql_fetch_array($q);
		$mob=$data['mobile'];
		$em=$data['email'];
		$lid=$data['g_login'];
		$pwd=$data['password'];
		
		//sms code
		// email code
		
		$to='$em';
		$from="bhoomi@gmail.com";
		$sub="Forgot password Info";
		echo $body="
		<table width='45%'  align='center' bordercolor='#00' bgcolor='#E8B8CC'>
  <tr>
    <td colspan='3' align='center'>Forgot Password Details </td>
  </tr>
  <tr>
    <td>Login Id </td>
    <td>:</td>
    <td>$lid</td>
  </tr>
  <tr>
    <td>Email</td>
    <td>:</td>
    <td>$em</td>
  </tr>
  <tr>
    <td>Passord</td>
    <td>:</td>
    <td>$pwd</td>
  </tr>
  <tr>
    <td colspan='3'>Regards From AgroWorld </td>
  </tr>
</table>"; die;
$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "From: ".$from." <".$from.">\r\n";
	//mail($to,$sub,$body,$headers);
	header("location:forgot_password.php?m2=2");
		
	}
	else
	{
		header("location:forgot_password.php?m1=1");
	}
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Grocery Store- Welcome To The Agro World</title>
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
				<h1>Forgot Password </h1>
			</div>
			<div class="login-block">
				<form id="form1" name="form1" method="post">
			<input type="hidden"  name="forgot" value="true">	
					<input name="me" type="text" id="me" placeholder="Email or Mobile No Enter Here" required="">
					
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								
							</ul>
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="Sign In" value="submit">	
									
					
					
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
<?php if(isset($_REQUEST['m1'])==1) {?>
<script language="javascript">
alert("Email ID or Mobile is incorrect");
</script>
<?php }?>
<?php if(isset($_REQUEST['m2'])==2) {?>
<script language="javascript">
alert("Please Check your message/mail for password");
</script>
<?php }?>

                      
						
