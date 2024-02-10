<?php
session_start();
include("include/dbconnect.php");
extract($_REQUEST);
$uname=$_SESSION['uname'];


if($rdate=="")
{
$rdate=date("d-m-Y");
}	
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php include("include/title.php"); ?></title>
<link rel="shortcut icon" href="img/icon.ico">
<style type="text/css">
<!--
.box {
	background-color: #F3F3F3;
	height: 270px;
	width: 270px;
	border: 1px solid #A8A8A8;
	padding:10px;
}
.box1 {
	background-color: #F3F3F3;
	height: 100px;
	width: 270px;
	border: 1px solid #A8A8A8;
	padding:10px;
}
.box2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #333333;
	padding:10px;
}
.box3 {
padding:10px;
}
.t1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
	font-weight: bold;
	color: #0066CC;
	font-variant: small-caps;
	text-transform: none;
}
.msg {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #FF0000;
}
.box4
{
width:250px;
height:35px;
}
-->

</style>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="shortcut icon" href="favicon.ico">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color:#CC0066;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 17px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
    background-color: #ddd;
    color: black;
}

.dropdown:hover .dropdown-content {
    display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>	
<script language="javascript">
function rateWin(id)
{
window.open("rating.php?pid="+id,"Rating","width=400,height=500,menubar=0,toolbar=0,statusbar=0,scrollbars=1");
}
</script>
</head>

<body>
   <?php include("link_user.php"); ?>
 <div class="panel panel-default">
  <div class="panel-heading" align="center">User: <?php echo $uname; ?></div>
  <div class="panel-body">
   <h3 align="center"></h3>
  </div>
</div>
 <!--start content area-->
  <?php

if($_REQUEST['act']=="wrong")
{
?>
<div class="row">
			<div class="col-lg-4">
				
				<!-- A grey horizontal navbar that becomes vertical on small screens -->
			</div>
			
			
			
            <div class="col-lg-4">
<div class="alert alert-warning">
  <strong>Warning!</strong> This Username or Password Incorrect!
</div>
			</div>
</div>			
<?php
}
?>			
<div class="row">
			<div class="col-lg-4">
				
				<!-- A grey horizontal navbar that becomes vertical on small screens -->
			</div>
			
			
			
            <div class="col-lg-4">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display display">
                    <h2>Search Products </h2>
                  </h2>
                </div>
                <div class="card-block">
                  <p></p>
                  <form name="name" method="post">
                   
					<div class="form-group">
                      <label>Type here </label>
                      <input type="text" name="data" value="<?php echo $data; ?>" class="form-control">
                    </div>
                    
                    <div class="form-group">       
                      <input type="submit" name="btn" value="Submit" class="btn btn-primary">
                    </div>
					
                  </form>
                </div>
              </div>
			</div>
</div>			
<!--end content area--><br /><br />


<div class="row">
	<div class="col-lg-2">
	</div>
	<div class="col-lg-8">
			  	<div  align="center">
				<?php
				if(isset($btn))
				{
				$qry=mysqli_query($connect,"select * from product where shop='$shop' && (product like '%$data%' || description like '%$data%') ");
				}
				else
				{
				$qry=mysqli_query($connect,"select * from product where shop='$shop' && catid=$catid order by id");
				}
				$num=mysqli_num_rows($qry);
				if($num>0)
				{
				//user.php?act=cart&pid='.$row['id'].'
				?>
				
				
				
				<?php
			  
			  while($r11=mysqli_fetch_array($qry))
			  {
			  $md[]=$r11['id'];
			  }
			  $arr=array_chunk($md,3);
			  ?>
			  
			  
			  <?php
			  foreach($arr as $arr1)
			  {
			  ?>
			  <table border="0">
			  <tr>
			  <?php
			  	for($i=0;$i<count($arr1);$i++)
				{
			  	$q1=mysqli_query($connect,"select * from product where id=$arr1[$i]");
			  $r1=mysqli_fetch_array($q1);
			  $img="P".$arr1[$i].".jpg";
			  ?>
			  	<td>
				
				
				
			  <table border="0" class="border">
			  <tr>
			  <td colspan="2">
			  <h3 align="center" class="bg-primary"><?php echo $r1['product']; ?></h3>			   </td>
			   </tr>
			   <tr>
			   <td colspan="2">
			 <img src="product/<?php echo $img; ?>" width="300" height="300" /></td>
			   </tr>
			   <tr>
                 <th width="126" align="left" scope="row"><strong>Price</strong></th>
			     <td width="172" align="left"><strong><?php echo "Rs.".$r1['price']; ?></strong></td>
		        </tr>
			   <tr>
                 <th align="left" scope="row">Rate</th>
			     <td align="left"><?php 
	$gs2=$r1['price'];
	echo "Rs.".$gs2;
	$rate=$r1['rating'];
	?></td>
		        </tr>
			   <tr>
			     <td colspan="2"><strong><?php echo $r1['description']; ?></strong></td>
		        </tr>
			   <tr>
			     <td colspan="2"><?php
						   $n=$rate;
						  for($j=1;$j<=5;$j++)
						  {
						  	if($j<=$n)
							{
							?>
			       <img src="img/star1.jpg" />
			       <?php
							}
							else
							{
							?>
			       <img src="img/star2.jpg" />
		         <?php
							}
						  }
						  
						  ?></td>
		        </tr>
			   <tr>
			     <td colspan="2" align="right"><a href="javascript:rateWin('<?php echo $img3[$i]; ?>')"></a>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo '<a href="user.php?act=cart&shop='.$shop.'&catid='.$catid.'&pid='.$arr1[$i].'">Add to Cart</a>'; ?></td>
		        </tr>
			   </table>
			   
			   
			   
			   
			   	</td>
				<?php
				}
				?>
			   </tr>
			   </table>
			   <?php
			   }
			   ?>
				
				
				
				
				
				
				
			<?php
			}
			else
			{
			echo "";
			}
			?>
			</div>	
  	</div>
	<div class="col-lg-2">
		</div>
</div>
<?php
if($act=="cart")
{
$mq2=mysqli_query($connect,"select max(id) from addcart");
$mr2=mysqli_fetch_array($mq2);
$id=$mr2['max(id)']+1;
$q2=mysqli_query($connect,"select * from product where id=$pid");
$r2=mysqli_fetch_array($q2);
$pr=$r2['price'];
mysqli_query($connect,"insert into addcart(id,shop,uname,bid,pid,qty,price,amount) values($id,'$shop','$uname','0','$pid','0','$pr','0')");
?>
<script language="javascript">
alert("Added to Cart");
window.location.href="user.php?shop=<?php echo $shop; ?>&catid=<?php echo $catid; ?>";
</script>
<?php
}
?>
  <p align="center" class="msg"><?php
  if($msg!="")
  {
  echo $msg;
  }
  ?></p>
  <p>&nbsp;</p>
</body>
</html>