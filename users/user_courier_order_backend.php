<?php
	
	require_once "dbConfig.php";
	session_start();

	$user=$_SESSION['USER'];

	if(isset($_POST['btn-order']))
	{
		$pickup_address=$_POST['1'];
		$pickup_name=$_POST['2'];
		$pickup_contact=$_POST['3'];
		$pickup_instruction=$_POST['4'];
		$delivery_type=delivery_type($_POST['5']);		
		$delivery_charge=delivery_charge($delivery_type);
		$pickup_area=$_POST['7'];
		$delivery_payment=$_POST['9'];
		$delivery_name=$_POST['10'];
		$delivery_contact=$_POST['11'];
		$delivery_address=$_POST['12'];
		$delivery_instruction=$_POST['13'];
		


		//getting the current date and Time in 24 hours formate 2020-01-01 23:59:59
		date_default_timezone_set('Asia/Dhaka');
		$order_placed_time=date("Y-m-d H:i:s");

		//if no instruction are given
		if(empty($pickup_instruction))
		{
			$pickup_instruction="No Instructions";
		}

		//if no instruction are given
		if(empty($delivery_instruction))
		{
			$delivery_instruction="No Instructions";
		}


		$uploadOk = 1;

		// //package image storing to database and file manager
		// $file_name = $_FILES['file']['name'];
		// $file_type = $_FILES['file']['type'];
		// $file_size = $_FILES['file']['size'];
		// $file_tem_Loc = $_FILES['file']['tmp_name'];

		// //if no image is given then setting a default package image
		// if($file_name==""){
		// 	$file_name="default.png";
		// }
		
		// $package_image = "package_img/".$file_name;
		$package_image="";

		

		// //checking for proper image formate
		// $target_file = $target_dir . basename($_FILES["file"]["name"]);
		// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
		// 	  $_SESSION['image-error']="Invalid Image formate";
		// 	  $uploadOk = 0;
		// 	  header("Location: user_courier_order.php?msg=ImgError");
		// 	  die();
		// }

		//if all set to go then upload the image
		if($uploadOk==1)
		{

			////// generating order id /////
			$rd=rand(1000,4000);
			$order_id=$rd.calculate_rows($db);

			// move_uploaded_file($file_tem_Loc, $package_image);
			
			//default status of the order
			$delivery_status=0;
			$pending_status=1;
			$approved_status=0;
			$cancel_status=0;

			$query = $db->prepare("insert into orders (order_id,pickup_name,pickup_address,pickup_contact,pickup_instruction,delivery_type,delivery_charge,pickup_area,package_image,delivery_payment,delivery_name,delivery_contact,delivery_address,delivery_instruction,pending_status,approved_status,delivery_status,cancel_status,user_id,order_placed_time) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

			$query->bind_param("isssssssssssssiiiiis",$order_id,$pickup_name,$pickup_address,$pickup_contact,$pickup_instruction,$delivery_type,$delivery_charge,$pickup_area,$package_image,$delivery_payment,$delivery_name,$delivery_contact,$delivery_address,$delivery_instruction,$pending_status,$approved_status,$delivery_status,$cancel_status,$user['id'],$order_placed_time);

			$query->execute();

			header("Location: order_view.php?id=$order_id");
		}

	}


	function delivery_type($str)
	{
		if($str=="1")
		{
			return "Next Day in Dhaka City";
		}
		elseif ($str=="2") {
			return "Same Day in Dhaka City";
		}
		elseif ($str=="3") {
			return "Outside Dhaka(SBN)";
		}
	}

	function delivery_charge($str)
	{
		if($str=="Next Day in Dhaka City")
		{
			return "60";
		}
		elseif ($str=="Same Day in Dhaka City") {
			return "80";
		}
		elseif ($str=="Outside Dhaka(SBN)") {
			return "100";
		}
	}

	function calculate_rows($db){
		
		$sql="select count(*) as total from orders;";
		$result = mysqli_query($db,$sql);

		// Assoc array
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				
		// Free result set
		mysqli_free_result($result);
		

		return ($row['total']+1);
	}
?>