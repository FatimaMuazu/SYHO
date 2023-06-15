<?php
	include_once'db2.php';
	if(isset($_POST['submit'])){
		
		$var1=$_POST['recepient'];
		$var2=$_POST['dateofdespatch'];
		$var3=$_POST['quantitygiven'];
				
		
		$query="INSERT INTO booksgiven
		(bookid, booktitle, author, var1, var2, quantityavailable,var3) 
		SELECT(bookid, booktitle, author, recepient,dateofdespatch, quantityavailable, quantitygiven)
		FROM books";
		$result=mysqli_query($conn,$query);
		$sql="update booksgiven set newquantity=quantityavailable - quantitygiven where bookid= bookid && quantityavailable>0";
		$succeed=mysqli_query($conn,$sql);
		//if($succeed){
			echo "<script> alert('Record added succesfully'  )</script>";
			
		echo "<script>window.open('http://localhost:8080/NAED/despatch.php','_self')</script>";
		//}
		
		//if(mysqli_query($conn,$sql)){
		//	echo "New record has been added successfuly!";
		//}else{
		//	echo"Error:".$sql.":-".mysqli_error($conn);
		//}
		//mysqli_close($conn);
	}
?>