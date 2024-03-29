<?php

if(isset($_POST['login-submit'])) {
	require 'dbh.php';

	$id = $_POST['id'];
	$password = $_POST['password'];

	if (empty($id) || empty($password)) {
		header("Location: ../../index.php?error=emptyfields");
		exit(); 
	}
	else {

		$sql = "SELECT * FROM users WHERE usernameUsers=?";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../../index.php?error=sqlerror");
			exit();
		}
		else {

			mysqli_stmt_bind_param($stmt, "s", $id);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)) 
			{
				$passwordCheck = password_verify($password, $row['Password']);
				if ($passwordCheck == false) {
					header("Location: ../../index.php?error=wrongpassword");
					exit();
				}
				else if($passwordCheck == true) {
					session_start();
					$_SESSION['userId'] = $row['idUsers'];
					$_SESSION['usernameUsers'] = $row['usernameUsers'];
					header("Location: ../../index.php?login=success&");
					exit();
				}
				else
				{
					header("Location: ../../index.php?error=wrongpassword");
				}
			}
			else {
				header("Location: ../../index.php?error=nouser");
				exit();
			}
		}		

	}

}
else {
	header("Location: ../../index.php");
	exit();
}