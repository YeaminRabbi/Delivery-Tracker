<?php

	require_once "../users/dbConfig.php";
	$admin=$_SESSION['USER'];

	$total_orders=calculate_total_orders($db);
	$total_email =calculate_total_email($db);
	
	$seven_day_income= last_sevenDays_income($db);
	$total_users=calculate_total($db,"users","user_type","user");
	$total_product_sold=calculate_total($db,"orders","delivery_status","1");
	
	function calculate_total_orders($db){
		
		$sql="select count(*) as total from orders;";
		$result = mysqli_query($db,$sql);

		// Assoc array
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				
		// Free result set
		mysqli_free_result($result);
		
		return $row['total'];
	}



	function calculate_total_email($db){
		
		$sql="select count(*) as total from contactform;";
		$result = mysqli_query($db,$sql);

		// Assoc array
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				
		// Free result set
		mysqli_free_result($result);
		
		return $row['total'];
	}



	function last_sevenDays_income($db)
	{
		$sql = "SELECT (sum(delivery_charge) + SUM(delivery_payment)) as total FROM orders WHERE order_placed_time >= (DATE(NOW()) - INTERVAL 7 DAY) and delivery_status =1;";

		$result = mysqli_query($db,$sql);

		// Assoc array
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				
		// Free result set
		mysqli_free_result($result);
		
		return $row['total'];
	}

	function calculate_total($db,$table,$column_key,$search_key){
		
		$sql="Select count(*) as total FROM ".$table." WHERE ".$column_key." = '".$search_key."';";
		$result = mysqli_query($db,$sql);

		// Assoc array
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				
		// Free result set
		mysqli_free_result($result);
		//mysqli_close($db);

		return $row['total'];
	}


	function yearly_income($db,$year){
		
		$sql="SELECT sum(delivery_charge)+sum(delivery_payment) as income FROM `orders` where delivery_status=1 and year(order_placed_time)='$year';";
		$result = mysqli_query($db,$sql);

		// Assoc array
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				
		// Free result set
		mysqli_free_result($result);
		//mysqli_close($db);

		
		if(empty($row['income']))
		{
			return 0;
		}

		else
		{
			return $row['income'];
		}
	}
	
?>