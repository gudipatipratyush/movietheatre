<?php
session_start();
?>
<html>
<head>
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="lib/bootstrap/css/main.css" rel="stylesheet" type="text/css">
</head>
<body ng-controller='myCtrl'>
<div class="container-fluid">
<div class="row">
<div class="col-sm-12">
<h1 class="text-center text-capitalize">saradha theatre</h1>
</div>
</div>
<div class="row">
<div class="col-sm-12"><ul class="list-inline padding190">
<?php        
		if(isset($_SESSION['id'])){
		echo	'<li><a href="main1.php"><i class="fa fa-user"></i> Home</a></li>';
        echo '<li><span><a href="bookingpage1.php" ><i class="fa fa-star"></i>history</a></span></li>';
        echo '<li><a href="contactus1.php"><i class="fa fa-shopping-cart"></i> contact us</a></li>';

		echo 	'<li><a href="logout.php" ><i class="fa fa-crosshairs"></i>logout</a></li>';
		}else{
        echo '<li><a><i class="fa fa-crosshairs"></i> login</a></li>';
		}
		?>
      </ul>
</div>
</div>
<div class="row"><div class="col-sm-12">		