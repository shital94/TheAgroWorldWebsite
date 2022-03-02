<?php
$w=$_SESSION['who'];
$g=$_SESSION['gro'];
$u=$_SESSION['use'];
if($u!="")
{
	$qb=mysql_query("select * from tbl_user where u_id=$u ");
	$dataqb=mysql_fetch_array($qb);
	$n=$dataqb['uname'];
	$bh="User";
	$link="profile_u.php";
}
else if ($g!="")
{
		$qb=mysql_query("select * from tbl_user where u_id=$u ");
		$dataqb=mysql_fetch_array($qb);
		$n=$dataqb['gname'];
		$bh="Grocery";
		$link="profile_g.php";
}
else
{
		$qb=mysql_query("select * from tbl_wholesaler where u_id=$u ");
		$dataqb=mysql_fetch_array($qb);
		$n=$dataqb['wname'];
		$bh="Wholeseller";
		$link="profile_w.php";
}
?><div class="header">
				<div class="head-nav">
						<span class="menu"> </span>
							<ul class="cl-effect-1">
								<li ><a href="index.php">home</a></li>
								<li><a href="about.php">About</a></li>
								 
								<li><a href="products.php">Products</a></li>
								<li><a href="gallery.php">Gallery</a></li>
	<?php
	  if($u=="" && $w=="" && $g=="")
	  {
	  ?>
		<li><a href="register.php">Register</a></li>
		<li><a href="login.php">Login</a></li>
	<?php
	  }
	  else
	  {
	  ?>
				<li><a href="logout.php">Logout</a></li>
				<li><a href="<?php echo $link;?>">Profile</a></li>
				<li><a href="cart.php">Cart</a></li>
	 <?php 
	 }
	 ?>
				<li><a href="inquiry.php">Inquiry</a></li>
				<li><a href="contact.php">Contact</a></li>
				
									<div class="clearfix"> </div>
							</ul>
				</div>
				 
						<div class="clearfix"> </div>
			</div>