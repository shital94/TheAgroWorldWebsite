<?php
session_start();
if(isset($_SESSION['abc'])=="")
{
	header("location:index.php?m3=3");
	exit(0);	
}
	include("connect.php");
	$ii=$_REQUEST['uid'];
	$qq=mysql_query("select * from gallery where gid=$ii")or die ("QF");
	$data1=mysql_fetch_array($qq);
if(isset($_REQUEST['add'])=="city")
{
	extract($_POST);
	$fn1=$_FILES['pic1']['name'];
	$fn2=$_FILES['pic2']['name'];
	$fn3=$_FILES['pic3']['name'];
	if($fn1=="")
	{
		mysql_query("update gallery set name='$nm', address='$add', gpic2='$fn2', gpic3='$fn3' where gid=$i");
	}
	else if($fn2=="")
	{
		
		mysql_query("update gallery set name='$nm', address='$add', gpic='$fn',gpic2='$fn2', gpic3='$fn3' where gid=$i");
	}
	else if($fn3=="")
	else if($fn1=="" && $fn2=="")
	
	
}
?> 
<!DOCTYPE HTML>
<html>
<head>
<title>title here</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="kw here" />
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
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
						<?php include("logo.php") ?>	
							<!--search-box-->
								<!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							<div class="profile_details_left"><!--notifications of menu start -->
								
								<div class="clearfix"> </div>
							</div>
							<!--notification menu end -->
							<?php include("top_menu.php");?>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
    <div class="blank">
    	<h2 align="center">Add Photo </h2>
    	<div class="blankpage-main">
    		 <div class="inbox-details-body">
    		 <div class="login-block">
				<form method="post" enctype="multipart/form-data" name="form1" id="form1" >
			<input type="hidden"  name="add" value="city">
			<table width="77%" border="1" align="center">
              <tr>
                <td colspan="3"><div align="center"> Update Pic </div></td>
                </tr>
              <tr>
                <td width="37%">Upload Photo </td>
                <td width="5%">:</td>
                <td width="58%">
                  <input name="pic" type="file" id="pic">
                  <img src="../gallery_pic/<?php echo $data1['gpic'];?>" width="93" height="65">               </td>
               </tr>
              <tr>
                <td colspan="3"><input type="submit" name="Submit" value="Update"></td>
                </tr>
            </table>
				</form>
				
			</div>
   		     </div>
    		<p>&nbsp;</p>
    	</div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php include("copyrights.php") ?>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <?php include("menu.php");?>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						

</script>
