<?php




if (isset($_POST['signup-submit'])){

	require 'dbh.php';

	$username = $_POST['id'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword'];

	if (empty($username) || empty($email) || empty($password) || empty($confirmPassword))
	{
		header("Location: ../../signup.php?error=emptyfields&id=".$username."&email=".$email);
		exit();
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../../index.php?error=invalidmail&id=".$username);
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../../signup.php?error=invalidusernameinvalidmail");
		exit();
	}
	else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../../signup.php?error=invalidusername&email=".$email);
		exit();
	}
	else if($password !== $confirmPassword) {
		header("Location: ../../signup.php?error=passwordcheck&id=".$username."&email=".$email);
	}
	else {
		$sql = "SELECT usernameUsers FROM users WHERE usernameUsers = ?";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../../signup.php?error=sqlerror");
			exit();
		}	
		else {
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck =  mysqli_stmt_num_rows($stmt);
			if($resultCheck > 0)
			{
				header("Location: ../../signup.php?error=usernametaken&email=".$email);
				exit();
			}
			else
			{
				$sql = "INSERT INTO users (usernameUsers, emailUsers, Password) VALUES(?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: ../../signup.php?error=eqlerror");
					exit();
				}
				else {

					$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

					mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPassword); 
					mysqli_stmt_execute($stmt);
					header("Location: ../../signup.php?signup=success");
					exit();
				}
			}
		} 
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
else {
	header("Location: ../signup.php");
	exit();
}
