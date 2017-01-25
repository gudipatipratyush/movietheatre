<?php
require('header.php');
if(isset($_SESSION['id'])){
require('price.php');
}else{
	require('login.php');
}
require('footer.php');

?>