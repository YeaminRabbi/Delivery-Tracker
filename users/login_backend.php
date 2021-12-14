<?php
	
	require_once "dbConfig.php";
	session_start();

	if(isset($_POST['btn-login']))
	{
		$_SESSION['user_login']=0;
		$_SESSION['admin_login']=0;

		$username=$_POST['name'];
		$email=$_POST['email'];
		$password=md5($_POST['password']);

		$sql = "select * from users where username = '$username' and email = '$email' and password = '$password' and user_type= 'user';";
		$stmt = $pdo->prepare($sql);
	    $stmt->execute(array(
	        ':username' => $username,
	        ':email' => $email,
	        ':password' => $password));

	     if($stmt->rowCount()==1){
	     	//Redirecting based on USER_TYPE

	     	$user=getUserData($db,"email",$email);

			//checking for USER user_type
	     	if ($user['user_type']=="user") {
	     		
	     		$_SESSION['user_login']=1;
	     		$_SESSION['admin_login']=0;

	     		//Keeping useres all data in the session
				$_SESSION['USER']=$user;

				// Redirecting to USER dashboard
				header("Location: index.php");
	     	}

	     	//If any data does not match
	     	else
	     	{
	     		header("Location: login.php?msg=login-error");
	     	}

	     }
	     else{
	     	header("Location: login.php?msg=login-error");
	     }
	}
	

	//FUNCTION for fetching user's all data 
	function getUserData($db,$column_key,$search_key){

		$sql="Select * FROM users WHERE ".$column_key." = '".$search_key."';";
		$result = mysqli_query($db,$sql);

		// Assoc array
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				
		// Free result set
		mysqli_free_result($result);
		mysqli_close($db);

		return $row;
	}
?>