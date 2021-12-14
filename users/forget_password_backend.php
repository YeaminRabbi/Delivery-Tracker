<?php
	
	require_once "dbConfig.php";
	session_start();
	if(isset($_POST['btn-forget_password']))
	{

		$email=$_POST['email'];

		//checking for existing email address in the database
		$sql = "select count(*) as total from users where email = '$email' and user_type = 'user';";
		$result=mysqli_query($db,$sql);
		$email_checker = mysqli_fetch_array($result, MYSQLI_ASSOC);

		//if email doesn't exist in the database show MESSAGE NOT FOUND
		if($email_checker['total']=="0")
		{
			$_SESSION['email-error']="Email not registered!";

			header("Location: forget_password.php");
		}

		//if email exist in the database then redirect to Password Change
		else{

			$_SESSION['security_question']=1;
			$_SESSION['password_change_email']=$email;
			header("Location: password_change.php");
		}

	}

?>