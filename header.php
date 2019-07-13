<? php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">

	<!-- Stylesheets --> 
	<link rel="stylesheet" type="text/css" href="assets/css/reset.css">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body>
		<div id = "accountManagement"> 

		<?php
			if(isset($_SESSION['usernameUsers']))
			{
				echo '<form action = "assets/php/logout.php" method = "post"> 
					<button type = "submit" name = "logout-submit"> Logout </button>
					</form>';
			}
			else
			{
				echo '
				<button> <a href = "assets/php/forgotPassword.php" id = "forgotPassword"> Forgot Password </a> </button>
				<button> <a href = "signup.php" id = "Signup"> Sign up </a> </button>
				<form action = "assets/php/login.php" method = "post"> 
				
				<button type = "submit" name = "login-submit"> Login </button>
				<input type = "password" name = "password" placeholder= "Password"> </input> 
				<input type="text"  name = "id" placeholder = "Username"> </input>  
				
				</form>

				
				';
			}
		?>
			
			


			


			
		</div>
</body>
</html>