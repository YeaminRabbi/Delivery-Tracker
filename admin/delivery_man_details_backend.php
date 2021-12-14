<?php
	
	require_once "../users/dbConfig.php";
	
	if (isset($_POST['btn-USERadd'])) {

		$uploadOk=1;

		$name=$_POST['name'];


		//getting poerson's image with verification file formate
		$file_name = $_FILES['person_file']['name'];
		$file_type = $_FILES['person_file']['type'];
		$file_size = $_FILES['person_file']['size'];
		$file_tem_Loc = $_FILES['person_file']['tmp_name'];

		$person_image = "delivery_man_details/person_img/".$file_name;

		//checking for proper image formate
		$target_file = $target_dir . basename($_FILES["person_file"]["name"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
			  $uploadOk = 0;
			  header("Location: delivery_man_details.php?msg=ImgError");
			  die();
		}

		move_uploaded_file($file_tem_Loc, $person_image);


		$contact=$_POST['contact'];


		//NID Front
		$nid_front_image="NULL";
		if(!empty($_FILES['nid_front_file']['name']))
		{
			$file_name = $_FILES['nid_front_file']['name'];
			$file_type = $_FILES['nid_front_file']['type'];
			$file_size = $_FILES['nid_front_file']['size'];
			$file_tem_Loc = $_FILES['nid_front_file']['tmp_name'];

			$nid_front_image = "delivery_man_details/nid_img/".$file_name;

			//checking for proper image formate
			$target_file = $target_dir . basename($_FILES["nid_front_file"]["name"]);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
				  $uploadOk = 0;
				  header("Location: delivery_man_details.php?msg=ImgError");
				  die();
			}

			move_uploaded_file($file_tem_Loc, $nid_front_image);
		}
		


		//NID Back
		$nid_back_image="NULL";
		if(!empty($_FILES['nid_back_file']['name']))
		{
			$file_name = $_FILES['nid_back_file']['name'];
			$file_type = $_FILES['nid_back_file']['type'];
			$file_size = $_FILES['nid_back_file']['size'];
			$file_tem_Loc = $_FILES['nid_back_file']['tmp_name'];

			$nid_back_image = "delivery_man_details/nid_img/".$file_name;

			//checking for proper image formate
			$target_file = $target_dir . basename($_FILES["nid_back_file"]["name"]);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
				  $uploadOk = 0;
				  header("Location: delivery_man_details.php?msg=ImgError");
				  die();
			}

			move_uploaded_file($file_tem_Loc, $nid_back_image);
		}
		

		
		//Birth Certificate
		$birth_certificate_image="NULL";
		if(!empty($_FILES['birth_certificate_file']['name']))
		{
			
			$file_name = $_FILES['birth_certificate_file']['name'];
			$file_type = $_FILES['birth_certificate_file']['type'];
			$file_size = $_FILES['birth_certificate_file']['size'];
			$file_tem_Loc = $_FILES['birth_certificate_file']['tmp_name'];

			$birth_certificate_image = "delivery_man_details/birth_certificate_img/".$file_name;



			//checking for proper image formate
			$target_file = $target_dir . basename($_FILES["birth_certificate_file"]["name"]);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
				  $uploadOk = 0;
				  header("Location: delivery_man_details.php?msg=ImgError");
				  die();
			}

			move_uploaded_file($file_tem_Loc, $birth_certificate_image);

		}

		$present_address=$_POST['present_address'];
		$permanent_address=$_POST['permanent_address'];


		if($uploadOk==1)
		{
			$query = $db->prepare("insert into delivery_man_details (name,image,contact,NID_front,NID_back,birth_certificate,present_address,permanent_address) values (?,?,?,?,?,?,?,?)");

			$query->bind_param("ssssssss",$name,$person_image,$contact,$nid_front_image,$nid_back_image,$birth_certificate_image,$present_address,$permanent_address);

			$query->execute();

			header("Location: delivery_man_details.php");

		}





	}

?>