<?php
	
	require_once "../users/dbConfig.php";
	session_start();

	$orderID=$_GET['orderID'];
	$btn_type=$_GET['btn'];


	if(!empty($btn_type))
	{
		if($btn_type=="completed")
		{
			OrderUpdate($db,"delivery_status","1","order_id",$orderID);
			OrderUpdate($db,"cancel_status","0","order_id",$orderID);
			OrderUpdate($db,"pending_status","0","order_id",$orderID);
			OrderUpdate($db,"approved_status","0","order_id",$orderID);
			OrderUpdate($db,"payment_status","0","order_id",$orderID);
		}
		elseif ($btn_type=="assign") {

			OrderUpdate($db,"delivery_status","0","order_id",$orderID);
			OrderUpdate($db,"cancel_status","0","order_id",$orderID);
			OrderUpdate($db,"pending_status","0","order_id",$orderID);
			OrderUpdate($db,"approved_status","1","order_id",$orderID);
			OrderUpdate($db,"payment_status","0","order_id",$orderID);
		}
		elseif ($btn_type=="cancel") {

			OrderUpdate($db,"delivery_status","0","order_id",$orderID);
			OrderUpdate($db,"cancel_status","1","order_id",$orderID);
			OrderUpdate($db,"pending_status","0","order_id",$orderID);
			OrderUpdate($db,"approved_status","0","order_id",$orderID);
			OrderUpdate($db,"payment_status","0","order_id",$orderID);
		}
		elseif ($btn_type=="pending") {

			OrderUpdate($db,"delivery_status","0","order_id",$orderID);
			OrderUpdate($db,"cancel_status","0","order_id",$orderID);
			OrderUpdate($db,"pending_status","1","order_id",$orderID);
			OrderUpdate($db,"approved_status","0","order_id",$orderID);
			OrderUpdate($db,"payment_status","0","order_id",$orderID);
		}


		elseif ($btn_type=="payment") {

			OrderUpdate($db,"delivery_status","1","order_id",$orderID);
			OrderUpdate($db,"cancel_status","0","order_id",$orderID);
			OrderUpdate($db,"pending_status","0","order_id",$orderID);
			OrderUpdate($db,"approved_status","0","order_id",$orderID);
			OrderUpdate($db,"payment_status","1","order_id",$orderID);
		}



		header("Location: index.php");
	}
	else{

		header("Location: index.php");
	}



	function OrderUpdate($db,$update_column,$update_data,$column_key,$search_key)
	{
		$sql="UPDATE orders SET ".$update_column." = '".$update_data."' WHERE ".$column_key." = '".$search_key."';";

		$db->query($sql);
	}
?>