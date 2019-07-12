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
	<header> 
		<h2> Login </h2>
	</header>
	<div id = "accountManagement"> 
		
		<form action = "assets/php/login.php" method = "post"> 
			<input type="text"  name = "id" placeholder = "Username"> </input>  
			<input type = "password" name = "password" placeholder= "Password"> </input> 
			<button type = "submit" name = "login-submit"> Login </button>
		</form>


		<form action = "assets/php/logout.php" class = "hidden" method = "post"> 
			<button type = "submit" name = "logout-submit"> Logout </button>
		</form> 
		<a href = "signup.php" id = "Signup"> Sign up </a>
		<a href = "assets/php/forgotPassword.php" id = "forgotPassword"> Forgot Password </a>

	</div>
</body>
</html>