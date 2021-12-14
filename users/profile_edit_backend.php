<?php

	require_once 'dbConfig.php';
	
	if(isset($_POST['btn-profileUpdate']))
	{
		$userID=$_GET['userID'];

		ProfileUpdate($db,"username",$_POST['username'],$userID);
		ProfileUpdate($db,"profession",$_POST['profession'],$userID);
		ProfileUpdate($db,"bkash",$_POST['bkash'],$userID);
		ProfileUpdate($db,"nagad",$_POST['nagad'],$userID);
		ProfileUpdate($db,"rocket",$_POST['rocket'],$userID);
		ProfileUpdate($db,"contact",$_POST['contact'],$userID);


		if (isset( $_FILES['img']['name'])) {

			$file_name = $_FILES['img']['name'];
			$file_type = $_FILES['img']['type'];
			$file_size = $_FILES['img']['size'];
			$file_tem_Loc = $_FILES['img']['tmp_name'];

			$file_store = "user_img/".$file_name;


			move_uploaded_file($file_tem_Loc, $file_store);
			ProfileUpdate($db,"image",$file_store,$userID);



		}




		header("Location: profile.php");

	}




	function ProfileUpdate($db,$update_column,$update_data,$search_key)
	{
		$sql="UPDATE users SET ".$update_column." = '".$update_data."' WHERE id = '".$search_key."';";

		$db->query($sql);
	}

?>