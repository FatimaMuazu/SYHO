		<!DOCTYPE html>
<html>
<head>
	<title> Nigeria Academy of Education</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="main.css"/>
	<meta name="viewport" content="width=device-width,initial-scale=1, user-scale=no">
	<script src="https:/ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<style>

		/* Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container  - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
  
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
		
</style>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
		<div class="container" >
			<a href="/NAED/index.php" class="navbar-brand" id="text"> Nigeria Academy of Education</a>
			
			<ul class="nav navbar-nav"><a href="login.php" id="text">Login</a></ul>
			<ul class="nav navbar-nav"><a href= "add_user.php" id="text">Register a New User</a></ul>
			
		</div>
	</nav>
	

			<div class = "content_wrapper"> <!--//Content begin here and it contains the shop (inner content)contents and sidebar-->
				<form action="login.php" method="post">
					<table align="center" width="750" height= "auto" border="2">
						<tr>
							<td align="center" colspan="4"><h2>Login To Shop</h2><td>
						</tr>

						<tr>
							<td align="right"><b>Email:</b></td>
							<td><input type="text" name="customer_email" placeholder="enter your email"/></td>
						</tr>
						<tr>
							<td align="right"><b>Password:</b></td>
							<td><input type="password" name="customer_password" placeholder="enter your password"/></td> 
						</tr>
						
						<tr>
						<td align="center" colspan="4"><a href="login.php?forgot_pass">Forgot Password?</a></td>
						</tr>
						
						<tr>
						<td align="center" colspan="4"> <input type="submit" name="login" value="Login"/></td>
						</tr>
						
						
					</table>
					<h3 style="float:left;padding:5" ><a href ="signup.php"> Create Account</a></h3>
					
				</form>
							
				
				
				
			</div> <!--// content wrapper ends here-->
			
			
			
		</div><!--big wrap ends here, the big container for all-->
			
		
	</body>
</html>


<?php // login script
if (isset($_POST['login'])){
		
			
		$customer_email=$_POST['customer_email'];
		$customer_password=$_POST['customer_password'];
		
		/*$customer_email=stripslashes($customer_email);
		$customer_password=stripslashes($customer_password);
		$customer_email=mysqli_real_escape_string($customer_email);
		$customer_password=mysqli_real_escape_string($customer_password);*/
		
		$sel_customer="select * from customers where customer_password='$customer_password' AND customer_email='$customer_email'";
		$run_customer=mysqli_query($con,$sel_customer);
		
		$check_customer=mysqli_num_rows($run_customer);
		if($check_customer==0){
			echo"<script>alert('Password or email invalid')</script>";
			
		}
		else{
			$_SESSION['customer_email']=$customer_email;
			echo"<script> window.open('homepage.php','_self')</script>";
			
		}
		
		
}


?>