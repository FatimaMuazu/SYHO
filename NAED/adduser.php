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
			
			
		</div>
	</nav>
	

			<div class = "content_wrapper"> <!--//Content begin here and it contains the shop (inner content)contents and sidebar-->
				<form action="add_user.php" method="post">
					<table align="center" width="750" border="2">
						<tr >
							<td align="center" colspan="4" ><h3>Create an Account Here!</h3></td>
						</tr>
						<tr>
							<td align="right"><b>Name:</b></td>
							<td><input type="text" name="fullname" required /></td>
						</tr>
						<tr>
							<td align="right"><b>Email:</b></td>
							<td ><input type="text" name="email" required /></td>
						</tr>
						<tr>
							<td align="right"><b>Username:</b></td>
							<td><input type="text" name="username" required /></td>
						</tr>
						<tr>
							<td align="right"><b>Password:</b></td>
							<td><input type="password" name="password" required /></td>
						</tr>
						
						
						<tr>
							<td align="center" colspan="4"><input type="submit" name="signup" value="Create Account"/></td>
							
						</tr>
					</table>
				
				</form>
								
								
				
			</div> <!--// content wrapper ends here-->
			
			
		</div><!--big wrap ends here, the big container for all-->
			
		
	</body>
</html>
<?php
include_once'db.php';
	if (isset($_POST['signup'])){
		
		$fullname=$_POST['fullname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$username=$_POST['username'];
		
		
		$insert_user= "insert into users(fullname,email,password, username) values('$fullname','$email','$password','$username')";
		
		$run_user= mysqli_query($conn, $insert_user);
		if($run_user){
			
			echo "<script> alert('Registered successfully')</script>";
			echo"<script>window.open('http://localhost:8080/personell/login.php','_self')</script>";
		}
		
		
	}

	
?>