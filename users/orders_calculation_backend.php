<?php

	require_once "dbConfig.php";
	$user=$_SESSION['USER'];

	$user_id=$user['id'];

	$delivery_status= calculate($db,"delivery_status","1",$user_id);
	$pending_status= calculate($db,"pending_status","1",$user_id);
	$approved_status= calculate($db,"approved_status","1",$user_id);
	$cancel_status= calculate($db,"cancel_status","1",$user_id);
	$total_paid = calculate_total($db,$user_id);
	$total_orders = calculate_totalOrders($db,$user_id);
	$total_user=calculate_Users($db);
	$total_payment=calculate($db,"payment_status","1",$user_id);




	function calculate($db,$column_key,$search_key,$user_id){
		
		$sql="Select count(*) as total FROM orders WHERE ".$column_key." = '".$search_key."' and user_id ='".$user_id."';";
		$result = mysqli_query($db,$sql);

		// Assoc array
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				
		// Free result set
		mysqli_free_result($result);
		

		return $row['total'];
	}




	function calculate_total($db,$user_id){
		
		$sql="select (sum(delivery_charge) + SUM(delivery_payment)) as total from orders where delivery_status =1 and user_id ='".$user_id."';";
		$result = mysqli_query($db,$sql);

		// Assoc array
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				
		// Free result set
		mysqli_free_result($result);
		

		return $row['total'];
	}

	function calculate_totalOrders($db,$user_id){
		
		$sql="select count(*) as total from orders where user_id ='".$user_id."';";
		$result = mysqli_query($db,$sql);

		// Assoc array
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				
		// Free result set
		mysqli_free_result($result);
		

		return $row['total'];
	}

	function calculate_Users($db){
		
		$sql="select count(*) as total from users where user_type='user';";
		$result = mysqli_query($db,$sql);

		// Assoc array
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				
		// Free result set
		mysqli_free_result($result);
		

		return $row['total'];
	}


?>