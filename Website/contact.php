<?php
session_start();

if(isset($_REQUEST['save'])=="true")
{
	include("connect.php");
	extract($_POST);
	
	mysql_query("insert into  inquiry_mgmt (name,mobile,email,comments) values ('$nm','$mob','$em','$cmt')") or die(" Insert failed");
	header("location:contact.php?cu=1");
	
}

?>  
<!DOCTYPE HTML>
<html>
<head>
<title>The Agro World</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
</head>
<body>
<!-- header -->
	<div class="banner1">
		<div class="container">
			 <?php include("menu.php");?>						
					<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav -->
				<?php include("logo.php");?>
		</div>
	</div>
<!-- header -->
<div class="main_bg">
<div class="container">
<div class="main">
		<div class="section group">				
				<div class="col span_1_of_2">
      			<div class="company_address">
				     	<h3 class="style">Get Address </h3>
						<p>B/166,suvidha township,</p>
						<p>subhshnagar</p>
						<p>BHAVNAGAR</p>
				   		<p>Phone:(0278) 220 11 20</p>
				 	 	<p>Email: <span>sheetalmoradiya94@gmail.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
					<div class="contact_info">
			    	 	<h3 class="style">Find Us Here</h3>
			    	 		<div class="map">
					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color: #555555;text-align:left;font-size:13px">View Larger Map</a></small>
					   		</div>
      				</div>				   
				   <div class="clear"></div>
				</div>				
				<div class="col span_2_of_4">
				  <div class="contact-form">
				  	<h3 class="style">Contact Us</h3>
					       <form method="post" action="" name="form1" id="form1">
					    	<input type="hidden" name="save" value="true">
							<div>
						    	<span><label>NAME</label></span>
						    	<span><input name="nm" type="text" class="textbox" id="nm" required>
						    	</span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="em" type="text" class="textbox" id="em" required>
						    	</span>
						    </div>
						    <div>
						     	<span><label>MOBILE</label></span>
						    	<span><input name="mob" type="text" class="textbox" id="mob" required>
						    	</span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="cmt" id="cmt" required> </textarea>
						    	</span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Submit Us"></span>
						  </div>
					    </form>

				    </div>
  				</div>		
  			<div class="clear"></div>
		  </div>
	</div>
</div>
</div>
 <?php include("footer.php");?>
</body>
</html>
 

</script>
<?php if(isset($_REQUEST['cu'])=="1") { ?>
<script language="javascript">
alert("Thanks For Contact Us");
</script>
<?php } ?>