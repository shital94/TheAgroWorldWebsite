<?php
session_start();
if(isset($_SESSION['abc'])=="")
{
	header("location:index.php?m3=3");
	exit(0);	
}
include("connect.php");
if(isset($_REQUEST['add'])=="mc")
{
	
	extract($_POST);
	 
	$fn=$_FILES['pic']['name'];
	$path="photos/";
	$npath=$path.$fn;
	move_uploaded_file($_FILES['pic']['tmp_name'],$npath);
	mysql_query("insert into tbl_sub_cat (mc_name,sc_name,pic_scat) values ('$mc','$subcat','$fn')") or die(" Insert failed");
	header("location:sub_cat_show.php?scadd=1");
	
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
<script src="js/jquery-2.1.1.min.js"></script> 
<!--js-->
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
    	<h2 align="center">Add SubCategory </h2>
    	<div class="blankpage-main">
    		 <div class="inbox-details-body">
    		 <div class="login-block">
				<form method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return f1();" >
			<input type="hidden"  name="add" value="mc">
			<table width="77%" border="1" align="center">
              <tr>
                <td colspan="3"><div align="center"> Sub Category Name Here </div></td>
                </tr>
              <tr>
                <td>Main Category </td>
                <td>:</td>
                <td>
				<select name="mc" id="mc">
                  <option value="Select Main Category">Select Main Category</option>
				  <?php
				 $qs=mysql_query("select * from tbl_main_cat order by mc_name")or die ("QF");
				 while($datas=mysql_fetch_array($qs))
				 {
				 ?> 
                  <option value="<?php echo $datas['mc_name'];?>"><?php echo $datas['mc_name'];?></option>
				  <?php
				}
				?>
                </select>
				
                </td>
              </tr>
              <tr>
                <td>Sub Category  Name </td>
                <td>:</td>
                <td><input name="subcat" type="text" id="subcat" required=""></td>
              </tr>
              <tr>
                <td width="31%">Photo</td>
                <td width="4%">:</td>
                <td width="65%"><input name="pic" type="file" id="pic" required=""></td>
               </tr>
              <tr>
                <td colspan="3"><input type="submit" name="Submit" value="Submit"></td>
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
<script language="javascript">
function f1()
{
	if(form1.mc.value=="Select Main Category")
	{
		alert("Select Category");
		form1.mc.focus();
		return false;
	}
}
</script>