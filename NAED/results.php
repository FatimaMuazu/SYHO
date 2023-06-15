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
			<ul class="nav navbar-nav"><a href="allbooks.php" id="text">All Books</a></ul>
			<ul class="nav navbar-nav"><a href="booksgiven.php" id="text">Books Given</a></ul>
			<ul class="nav navbar-nav"><a href= "addbooks.php" id="text">Add Books</a></ul>
			<ul class="nav navbar-nav"><a href= "despatch.php" id="text">Despatch Books</a></ul>
			<ul class="nav navbar-nav"><a href= "#" id="text"><div class="dropdown">
			  Order Books by
			  <div class="dropdown-content">
			  
				<a href="bypublisher.php">Publisher</a>
				<a href="byauthor.php">Author</a>
				
			  </div>
			</div></a></ul>
			<div id = "form"><!--// this is for searchbox-->
					<form method = "get" action = "results.php" enctype = "multipart/form-data"> <!--// the multipart implies it will show even images as search results-->
						<input type = "text" name = "user_query" placeholder = "Search for books by author, year or publisher" />
						<input type = "submit" name = "search" value ="Search" />
					</form>
			</div><!--//searchbox ends here-->
		</div>
	</nav>
	
	<table class="table">
		<tr id="tr">
			<th>Book Code</th>
			<th>Title</th>
			<th>Author</th>
			<th>ISBN</th>
			<th>Publisher</th>
			<th>Year of Publication</th>
			<th>Quantity</th>
		</tr>
	<div>
		<h1>Search Results</h1>
		<!--<ul id="dept">-->
		<?php
			include_once 'db.php';
			if(isset($_GET['search'])){
				$search_query=$_GET['user_query'];
			$displayall="SELECT * FROM books where booktitle like '%$search_query%'||publisher like '%$search_query%'||yearofpub like '%$search_query%'|| author like '%$search_query%'";
			$result=mysqli_query($conn,$displayall);
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				?>
				<tr id="tr">
					<td id="td"><?php echo $row["bookcode"];?></td>
				
					<td><?php echo $row["booktitle"];?></td>
					<td><?php echo $row["author"];?></td>
					<td><?php echo $row["isbn"];?></td>
				
					<td><?php echo $row["publisher"];?></td>
				
					<td><?php echo $row["yearofpub"];?></td>
				
					<td><?php echo $row["quantity"];?></td>
				
				</tr>
				<?php
				}
			//echo "</table>";
			}
		}
		?>
		</ul>
	</div>
	


	
</table>
</body>
</html>