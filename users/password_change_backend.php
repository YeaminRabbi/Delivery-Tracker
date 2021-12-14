<?php
	
	require_once "dbConfig.php";
	session_start();
	if(isset($_POST['btn-friend_name']))
	{
		$security_question=md5(strtoupper($_POST['friend_name']));
		$email=$_SESSION['password_change_email'];

		//checking for security question answer for existing email address in the database
		$sql = "select * from users where email = '$email' and user_type = 'user';";
		$result=mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


		if($row['security_question']==$security_question)
		{
			$_SESSION['security_question']=0;
			header("Location: password_change.php");
		}
		else
		{
			$_SESSION['answer-error']="Data not matched! Try again.";
			header("Location: password_change.php");
		}
	}

	if(isset($_POST['btn-password_confirm']))
	{
		$password_f1=$_POST['password_field-1'];
		$password_f2=$_POST['password_field-2'];

		if($password_f2==$password_f1)
		{
			$email=$_SESSION['password_change_email'];
			$change_password=md5($password_f1);

			$sql="UPDATE users SET password = '$change_password' where email = '$email';";

			$db->query($sql);

			header("Location: login.php");
		}
		else
		{
			$_SESSION['change_password-error']='Password Not Matched!';
			header("Location: password_change.php");
		}
	}

?>