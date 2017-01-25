<?php
session_start();
$particular=$_SESSION['booking'];
$availabel=$_SESSION['commitment'];
$user=$_SESSION['id'];
$total=0;
foreach($_POST as $v=>$k){
	
	$total++;
	$connection=new MySQLi('localhost','root','','theatre');
	if($connection->connect_error){
		echo 'failed';
	}
	$sql='insert into ticket values(null,"'.$user.'","'.$k.'","'.$particular.'","'.$availabel.'")';
	$query=$connection->query($sql);
	if($query){
		unset($_SESSION['seats']);
	}
}
if($total){
$price=150*$total;
$_SESSION['ticket']=$price;
header('location:main1.php');
}
?>