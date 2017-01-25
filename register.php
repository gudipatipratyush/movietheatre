<?php
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$connection=new MySQLi('localhost','root','','theatre');
if($connection->connect_error){
	echo 'failed';
}
$sql='insert into customer values(null,"'.$name.'","'.$email.'","'.$password.'")';
	$query =$connection->query($sql);
	if($query===true){
		$user_id = $connection->insert_id;
		$_SESSION['id']=$user_id;
		header("location:main1.php");	
	}else{
	header('location:login1.php');
	}

?>