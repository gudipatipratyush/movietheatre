<?php
session_start();
$booking=$_POST['booking'];
$commitment=$_POST['commitment'];
$_SESSION['booking']=$booking;
$_SESSION['commitment']=$commitment;
$connection= new MySQLi('localhost','root','','theatre');
if($connection->connect_error){
	echo "failed";
}
$sql='select * from ticket where date="'.$booking.'" and booked="'.$commitment.'"';
$query=$connection->query($sql);
$message=array();
while($fetch=$query->fetch_assoc()){
	if($fetch['id']){
		$message[]=$fetch['seat'];
		unset($_SESSION['ticket']);
	}else{
		$message=array();
	}
}
$_SESSION['seats']=$message;
header("location:main1.php");
?>