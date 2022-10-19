<?php 
session_start();

	include("connect_page.php");
	include("fun_page.php");
    $user_data = check_login($con)
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Simarjot website</title>
</head>
<body>
	<style>a {
		padding: 2px;
		
		color: white;
		background-color: black;
		text-decoration: none;
	}
	
	h5{
		padding: 3px;
	}
	</style>

	
	<h1>That's index page</h1>
	

	<br>
	Hello <?php echo $user_data['user_name']; 
	  
	 ?>
    <h5>thank you for visiting this site, here i simarjot kaur prepared this site fir Xenonstack<h5>
	<a href="lastpage.php">Logout</a>	
	<a href="../HTML/portfolio.html"> MY PORTFOLIO WEBSITE</a>
</body>
</html>