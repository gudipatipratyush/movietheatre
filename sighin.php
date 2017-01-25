<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$connection=new MySQLi('localhost','root','','theatre');
$sql='select * from customer where email="'.$email.'" and password="'.$password.'"';
$query=$connection->query($sql);
$fetch=$query->fetch_assoc();
if($fetch['id']){
	$_SESSION['id']=$fetch['id'];
	header('location:main1.php');
}else{
	header('location:login1.php');
}
?>