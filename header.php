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
			<form action = "assets/php/logout.php" class = "hidden" method = "post"> 
				<button type = "submit" name = "logout-submit" class = "hidden"> Logout </button>
			</form> 
			<button> <a href = "signup.php" id = "Signup"> Sign up </a> </button>
			<button> <a href = "assets/php/forgotPassword.php" id = "forgotPassword"> Forgot Password </a> </button>


			<form action = "assets/php/login.php" method = "post"> 
				<button type = "submit" name = "login-submit"> Login </button>
				<input type = "password" name = "password" placeholder= "Password"> </input> 
				<input type="text"  name = "id" placeholder = "Username"> </input>  
			</form>


			
		</div>
</body>
</html>