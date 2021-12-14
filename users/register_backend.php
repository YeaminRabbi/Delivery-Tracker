<?php
	
	require_once "dbConfig.php";
	session_start();
	if(isset($_POST['btn-register']))
	{

		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=md5($_POST['password']);
		$profession=strtoupper($_POST['profession']);
		$contact=$_POST['contact'];
		$bkash=$_POST['bkash'];
		$nagad=$_POST['nagad'];
		$rocket=$_POST['rocket'];
		$question=md5(strtoupper($_POST['question'])); 
		$user_type="user";

		//checking for existing email address in the database
		$sql = "select count(*) as total from users where email = '$email';";
		$result=mysqli_query($db,$sql);
		$email_checker = mysqli_fetch_array($result, MYSQLI_ASSOC);

		//if email doesn't exist in the database then INSERT DATA
		if($email_checker['total']=="0")
		{
			$file_name = $_FILES['file']['name'];
			$file_type = $_FILES['file']['type'];
			$file_size = $_FILES['file']['size'];
			$file_tem_Loc = $_FILES['file']['tmp_name'];

			if($file_name==""){
				$file_name="default.png";
			}

			$file_store = "user_img/".$file_name;
			move_uploaded_file($file_tem_Loc, $file_store);

			$query = $db->prepare("insert into users (username,email,profession,contact,image,user_type,password,security_question,bkash,nagad,rocket) values (?,?,?,?,?,?,?,?,?,?,?)");

			$query->bind_param("sssssssssss",$username,$email,$profession,$contact,$file_store,$user_type,$password,$question,$bkash,$nagad,$rocket);

			$query->execute();

			header("Location: login.php");
		}

		//if email exist in the database then redirect to register PAGE with error message
		else{
			$_SESSION['email-error']="Email already registered!";
			header("Location: register.php");
		}



		
	}
	

?>