<!DOCTYPE html>
<html>
<head>
	<title> Signup </title>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">

	<!-- Stylesheets --> 
	<link rel="stylesheet" type="text/css" href="assets/css/reset.css">
	<link rel="stylesheet" type="text/css" href="assets/css/signup.css">
</head>
<body>
	<header> 
		<h2> Signup </h2>
	</header>
	<div id = "accountManagement"> 
		<form action = "assets/php/add.php" method = "post"> 
			<input type="text"  name = "id" placeholder = "Username"> </input> 
			<input type = "email" name = "email" placeholder = "Email"> </input> 
			<input type = "password" name = "password" placeholder= "Password"> </input>
			<input type = "password" name = "confirmPassword" placeholder = "Confirm Password"> </input>
			<button type = "submit" name = "signup-submit"> Signup </button>
		</form>
		

	</div>
</body>
</html>