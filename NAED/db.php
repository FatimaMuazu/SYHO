<?php


	$servername='localhost';
	$username='root';
	$password='Hus03nati';
	$dbname='bookshop';
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn){
		die('Could not connect to MySql server:'.mysqli_connect_error());
	}
	echo "Connected successfully";
	
	//mysqli_close($conn);
?>
