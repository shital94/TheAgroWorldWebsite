<?php
session_start();
if(isset($_SESSION['abc'])=="")
{
	header("location:index.php?m3=3");
	exit(0);	
}
include("connect.php");
if(isset($_REQUEST['add'])=="pgt")
{
	
	extract($_POST);
	 
	$fn1=$_FILES['pc1']['name'];
	$fn2=$_FILES['pc2']['name'];
	$fn3=$_FILES['pc3']['name'];
	
	
	$path1="prod_img_g/";
	$path2="prod_img_g/";
	$path3="prod_img_g/";
	
	$npath1=$path1.$fn1;
	$npath2=$path2.$fn2;
	$npath3=$path3.$fn3;
	
	
	move_uploaded_file($_FILES['pc1']['tmp_name'],$npath1);
	move_uploaded_file($_FILES['pc2']['tmp_name'],$npath2);
	move_uploaded_file($_FILES['pc3']['tmp_name'],$npath3);
	 
	 
	
	
	mysql_query("insert into  tbl_products_grocerystore (mc_name,sc_name,qty,rate,weight_type,date,description,pic1,pic2,pic3) values ('$mc','$sc','$qt','$rt','$wt','$dt','$des','$fn1','$fn2','$fn3')") or die(" Insert failed");
	header("location:product_grocery_show.php?pgadd=1");
	
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
    	<h2 align="center">Add Product Of Grocery Store </h2>
    	<div class="blankpage-main">
    		 <div class="inbox-details-body">
    		 <div class="login-block">
				<form method="post" enctype="multipart/form-data" name="form1" id="form1" >
			<input type="hidden"  name="add" value="pgt">
			<table width="77%" border="1" align="center">
              <tr>
                <td colspan="3"><div align="center">Product Enter Below </div></td>
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
                </select>                </td>
              </tr>
              <tr>
                <td>Sub Category  Name </td>
                <td>:</td>
                <td><select name="sc" id="sc">
                  <option value="Select Sub Category ">Select Sub Category </option>
                  <?php
				 $qs=mysql_query("select * from tbl_sub_cat order by sc_name")or die ("QF");
				 while($datas=mysql_fetch_array($qs))
				 {
				 ?>
				 <option value="<?php echo $datas['sc_name'];?>"><?php echo $datas['sc_name'];?></option>

                  <?php
				}
				?>
                </select></td>
              </tr>
              <tr>
                <td>Quntity</td>
                <td>:</td>
                <td><input name="qt" type="text" id="qt"></td>
              </tr>
              <tr>
                <td>Rate</td>
                <td>:</td>
                <td><input name="rt" type="text" id="rt"></td>
              </tr>
              <tr>
                <td>Weight Type </td>
                <td>:</td>
                <td><select name="wt" id="wt">
                  <option value="Select">Select Type</option>
                  <option value="Per Kg">Per Kg</option>
                  <option value="Per Gram">Per Gram</option>
                  <option value="Per Piece">Per Piece</option>
                </select></td>
              </tr>
              <tr>
                <td>Date</td>
                <td>:</td>
                <td><input name="dt" type="text" id="dt"></td>
              </tr>
              <tr>
                <td>Description</td>
                <td>:</td>
                <td><textarea name="des" id="des"></textarea></td>
              </tr>
              <tr>
                <td>Photo1</td>
                <td>:</td>
                <td><input name="pc1" type="file" id="pc1"></td>
              </tr>
              <tr>
                <td>Photo2</td>
                <td>:</td>
                <td><input name="pc2" type="file" id="pc2"></td>
              </tr>
              <tr>
                <td width="31%">Photo3</td>
                <td width="4%">:</td>
                <td width="65%"><input name="pc3" type="file" id="pc3"></td>
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
					
</script>

<script language="javascript">
function fun1()
{
	var mcnm = form1.mc.value;
	var scnm = form1.sc.value;
	var qty = form1.qt.value;
	var rate = form1.rt.value;
	var wtype = form1.wt.value;
	var date = form1.dt.value;
	var descr = form1.des.value;
	var pic1 = form1.pc1.value;
	var pic2 = form1.pc2.value;
	var pic3 = form1.pc3.value;
	
	if (mcnm==null || mcnm=="")
  	{
  		alert("Main Category must be filled out");
  		return false;
  	}
	if (scnm==null || scnm=="")
	{
		alert("Sub Category must be filled out");
		return false;
	}
	if (qty==null || qty=="")
  	{
  		alert("Quantity must be filled out");
  		return false;
  	}
	if (rate==null || rate=="")
	{
		alert("Sub Category must be filled out");
		return false;
	}
	if (wtype==null || wtype=="")
  	{
  		alert("Weight type must be filled out");
  		return false;
  	}
	if (date==null || date=="")
	{
		alert("Date must be filled out");
		return false;
	}
	if (descr==null || descr=="")
	{
		alert("Discription must be filled out");
		return false;
	}
	if(pic1==null || pic1=="" )
	{
		alert("choose your photo1");
		return false;
	}
	if(pic2==null || pic2=="" )
	{
		alert("choose your photo2");
		return false;
	}
	if(pic3==null || pic3=="" )
	{
		alert("choose your photo3");
		return false;
	}
}
</script>
