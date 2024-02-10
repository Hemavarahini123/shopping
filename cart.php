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
              
			</div>
</div>			
<!--end content area--><br /><br />


<div class="row">
	<div class="col-lg-2">
	</div>
	<div class="col-lg-8">
			  	<div  align="center">
				<h3>Cart</h3>
				<form name="form1" method="post">
				
         

				<?php
				
				$q4=mysqli_query($connect,"select * from addcart where uname='$uname' and status=0");
		$n4=mysqli_num_rows($q4);
		if($n4>0)
		{
				?>
				<table width="45%" class="table table-bordered" align="center">
				<thead>
				  <tr>
					<th width="3%" class="bg-info">Sno</th>
					<th width="5%" class="bg-info">Product</th>
					<th class="bg-info">Price</th>
					<th class="bg-info">Quantity </th>
				  </tr>
				</thead>
				<tbody>
				<?php
				$i=0;
				
		while($r4=mysqli_fetch_array($q4))
		  {
		  $i++;
		  $q5=mysqli_query($connect,"select * from product where id=".$r4['pid']."");
		$r5=mysqli_fetch_array($q5);
				?>
				  <tr>
					<td class="bg-info2"><?php echo $i; ?></td>
					<td class="bg-info2"><?php echo $r5['product']; ?></td>
					<th width="13%" class="bg-info2"><?php echo $r4['price']; ?><input type="hidden" name="gid[]" value="<?php echo $r4['id']; ?>"></th>
					<th class="bg-info2"><input name="qty[]" type="text" size="5"> </th>
				
					
				  </tr>
				  <?php
				  }
				  ?>
				</tbody>
    		</table>
			
			<p align="center">
			Pay by 
			<select name="ptype">
			<option>Bank</option>
			<option>Cash</option>
			<option>Credit</option>
			</select>
          <input type="submit" name="btn2" value="Submit"><?php
			}
			else
			{
			echo "";
			}
			?>
			<?php
		$sq3=mysqli_query($connect,"select * from credit_shop where uname='$uname' && shop='$shop'");
$sr3=mysqli_fetch_array($sq3);

		?>
<!-- 		<p align="center">Available Credit Amount: Rs.<?php echo $sr3['creditamt']; ?>, CreditPoint: Rs. <?php echo $sr3['creditpoint']; ?></p>
 -->
        </p>
		
		</form>
			</div>	
  	</div>
	<div class="col-lg-2">
		</div>
</div>
<?php
if(isset($btn2))
{
$sq2=mysqli_query($connect,"select * from credit_shop where uname='$uname' && shop='$shop'");
$sn2=mysqli_num_rows($sq2);
	if($sn2==0)
	{
	$mq3=mysqli_query($connect,"select max(id) from credit_shop");
	$mr3=mysqli_fetch_array($mq3);
	$id3=$mr3['max(id)']+1;
	mysqli_query($connect,"insert into credit_shop(id,uname,shop,creditamt,creditpoint) values($id3,'$uname','$shop','0','0')");
	}


$mm=explode("-",$rdate);
$j=0;
$amount=0;
$mq=mysqli_query($connect,"select max(id) from billing");
$mr=mysqli_fetch_array($mq);
$bid=$mr['max(id)']+1;
	$q6=mysqli_query($connect,"select * from addcart where uname='$uname' && status=0");
	while($r6=mysqli_fetch_array($q6))
	{
	$amt=$r6['price']*$qty[$j];
	$amount+=$amt;
	mysqli_query($connect,"update addcart set bid=$bid,qty='$qty[$j]',amount='$amt' where id=".$r6['id']."");
	$j++;
	}
	
	
$cpp=0;
$q41=mysqli_query($connect,"select * from addcart where shop='$shop' && uname='$uname' && status=0");
while($r41=mysqli_fetch_array($q41))
		{
		$xq1=mysqli_query($connect,"select * from product where id=".$r41['pid']."");
		$xr1=mysqli_fetch_array($xq1);
		$cat=$xr1['catid'];

			$qq1=mysqli_query($connect,"select * from category where shop='$shop' && id='$cat'");
			$rr1=mysqli_fetch_array($qq1);
			$ca=$rr1['creditamt'];
			$cp=$rr1['creditrate'];
			$cm=$rr1['creditmax'];
			$camt=$amount/$ca;
			$tca=$cp*$camt;
			
			$cpp+=$camt;
			
					if($ptype!="Credit")
					{
				
	mysqli_query($connect,"update credit_shop set creditamt=creditamt+$tca,creditpoint=creditpoint+$camt where uname='$uname' && shop='$shop'");
					}
				mysqli_query($connect,"update addcart set status=1 where id=".$r41['id']."");
		}


	
	
		if($ptype=="Credit")
		{
		$qq2=mysqli_query($connect,"select * from credit_shop where uname='$uname' && shop='$shop'");
		$rr2=mysqli_fetch_array($qq2);
				if($rr2['creditamt']>=$amount && $rr2['creditpoint']>=$cpp)
				{
		mysqli_query($connect,"insert into billing(id,shop,uname,amount,rdate,month,year,status) values($bid,'$shop','$uname','$amount','$rdate','$mm[1]','$mm[2]','1')");
		
		mysqli_query($connect,"update credit_shop set creditamt=creditamt-$amount,creditpoint=creditpoint-$cpp where uname='$uname' && shop='$shop'");
?>
<script language="javascript">
alert("Paid Successfully...");
	window.location.href="purchase.php";
</script>
<?php
				}
				else
				{
				?>
			<script language="javascript">
			alert("Credit Point is Low!");
			</script>
			<?php
				}
		}
		else if($ptype=="Cash")
		{
		mysqli_query($connect,"insert into billing(id,shop,uname,amount,rdate,month,year,status) values($bid,'$shop','$uname','$amount','$rdate','$mm[1]','$mm[2]','0')");
		
?>
<script language="javascript">
	window.location.href="payment.php?pmode=Cash&bid=<?php echo $bid; ?>";
</script>
<?php
		}
		else
		{
mysqli_query($connect,"insert into billing(id,shop,uname,amount,rdate,month,year,status,creditpoint) values($bid,'$shop','$uname','$amount','$rdate','$mm[1]','$mm[2]','0','$camt')");


	
?>
<script language="javascript">
window.location.href="payment.php?bid=<?php echo $bid; ?>";
</script>
<?php
		}

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