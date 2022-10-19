<?php 

session_start();

include("connect_page.php");
include("fun_page.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login page by Simarjot</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 30px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin black;
		width: 100%;
	}

	#button{

		padding: 20px;
		width: 200px;
		color: white;
		background-color: black;
		border: 2px black;
	}

	#box{

		background-color: paleturquoise;
		margin: auto;
		width: 500px;
		padding: 20px;
	}
	sign{
		padding: 20px;
		width: 100px;
		
		border: 2px black;
	}

	a {
		padding: 10px;
		
		color: white;
		background-color: black;
		text-decoration: none;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: blacl;">Login Page by Simarjot </div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>
			<input id="button" onclick="window.location.href='../HTML/portfolio.html'" type="submit" value="Login for Portfolio website"><br><br>
			
	        
			<a href="sign_page.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>