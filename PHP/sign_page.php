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

			
			$user_id = numbers(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: firstpage.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: black;
		border: black 1px;
        border-radius: 6px;
	}

	#box{
        
		background-color:antiquewhite;
		margin: auto;
		width: 500px;
		padding: 110px 100px;
        display: -webkit-flex;
        display: -ms-flex;
        flex-direction: column;

        	}
        @media(max-width: 1000px ){
            section{
                padding: 125px 30px;

            }
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
			<div style="font-size: 20px;margin: 10px;color: Purple;">Sign page by simarjot</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Sign up"><br><br>

			<a href="firstpage.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>