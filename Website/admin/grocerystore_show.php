<?php
session_start();
if(isset($_SESSION['abc'])=="")
{
	header("location:index.php?m3=3");
	exit(0);	
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin - Welcome To The Agro World</title>
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
<!--//skycons-icons-->
<style type="text/css">
<!--
.style1 {font-size: 24em}
-->
</style>
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
    	<h2 align="center" class="style1">Manage Grocery Store </h2>
    	<div class="blankpage-main">
    		
    	  <form name="form1" method="post" action="" id="form1">
    	    <table width="75%" border="1" align="center" >
              <tr>
                <td height="35">NO</td>
                <td>Wholesaler ID</td>
                <td>Name</td>
                <td>Email</td>
                <td colspan="3">Action</td>
              </tr>
			  
			  <?php
						include("connect.php");					
						$no=1;
						$q=mysql_query("select * from tbl_grocerystore") or die("display Fail");
						while($data=mysql_fetch_array($q))
						{				
			?>

			  
              <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data['g_login'];?></td>
                <td><?php echo $data['gname'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><a href="grocerystore_del.php?did=<?php echo $data['g_id'];?>" onClick="return fun1();">Delete</a></td>
                <td><a href="grocerystore_update.php?uid=<?php echo $data['g_id'];?>" onClick="return fun2();">Update</a></td>
                <td><a href="grocerstore_readmore.php?rid=<?php echo $data['g_id'];?>">Read More </a></td>
              </tr>

					<?php 
							$no++;
						}
					?>	
            </table>
            </form>
    	  <p>&nbsp;</p>
    	  <p>&nbsp;</p>
    	  <p>&nbsp;</p>
    
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
<script language="javascript">
function fun1()
{
	var c=confirm("Are u sure to Delete?");
	if(c==false)
		return false;
}

</script>

<script language="javascript">
function fun2()
{
	var c=confirm("Are u sure to Update?");
	if(c==false)
		return false;
}

</script>

<?php if(isset($_REQUEST['gsdel'])=="1") { ?>
<script language="javascript">
alert("Grocery Store Deleted");
</script>
<?php } ?>

<?php if(isset($_REQUEST['gsadd'])=="1") { ?>
<script language="javascript">
alert("Grocery Store Added");
</script>
<?php } ?>

<?php if(isset($_REQUEST['gdup'])=="1") { ?>
<script language="javascript">
alert("Grocery Store Updated");
</script>
<?php } ?>
                      
						
