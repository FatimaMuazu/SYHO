<?php
	include_once'db.php';
	if(isset($_POST['submit'])){
		
		$bookcode=$_POST['bookcode'];
		$booktitle=$_POST['booktitle'];
		$author=$_POST['author'];
		$isbn=$_POST['isbn'];
		$publisher=$_POST['publisher'];
		$yearofpub=$_POST['yearofpub'];
		$quantity=$_POST['quantityavailable'];
		
		
		$sql="INSERT INTO books(bookcode, booktitle, author, isbn, publisher, yearofpub,quantityavailable) VALUES('$bookcode','$booktitle','$author','$isbn','$publisher',
		'$yearofpub','$quantityavailable')";
		 
		
		$succeed=mysqli_query($conn,$sql);
		//if($succeed){
			echo "<script> alert('Record added succesfully'  )</script>";
			
		echo "<script>window.open('http://localhost:8080/NAED/addbooks.php','_self')</script>";
		//}
		
		//if(mysqli_query($conn,$sql)){
		//	echo "New record has been added successfuly!";
		//}else{
		//	echo"Error:".$sql.":-".mysqli_error($conn);
		//}
		//mysqli_close($conn);
	}
?>