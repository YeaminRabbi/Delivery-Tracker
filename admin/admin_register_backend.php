<?php
	
	require_once "../users/dbConfig.php";
	session_start();
	if(isset($_POST['btn-register']))
	{

		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=md5($_POST['password']);
		$profession="NULL";
		$contact="NULL";
		$question="NULL"; 
		$user_type="admin";

		//checking for existing email address in the database
		$sql = "select count(*) as total from users where email = '$email';";
		$result=mysqli_query($db,$sql);
		$email_checker = mysqli_fetch_array($result, MYSQLI_ASSOC);

		//if email doesn't exist in the database then INSERT DATA
		if($email_checker['total']=="0")
		{
			$file_store = "admin_img/default.png";
			
			$query = $db->prepare("insert into users (username,email,profession,contact,image,user_type,password,security_question) values (?,?,?,?,?,?,?,?)");

			$query->bind_param("ssssssss",$username,$email,$profession,$contact,$file_store,$user_type,$password,$question);

			$query->execute();

			header("Location: admin_login.php");
		}

		//if email exist in the database then redirect to register PAGE with error message
		else{
			$_SESSION['email-error']="Email already registered!";
			header("Location: admin_register.php");
		}
	}
	

?>