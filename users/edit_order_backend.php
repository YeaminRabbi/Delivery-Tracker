<?php
	
	require_once "dbConfig.php";
	
	if(isset($_POST['btn-updateorder']))
	{
		$orderID=$_POST['orderID'];


		$pickup_address=$_POST['1'];
		$pickup_name=$_POST['2'];
		$pickup_contact=$_POST['3'];
		$pickup_instruction=$_POST['4'];
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

		updateOrder($db,"pickup_address",$pickup_address,"order_id",$orderID);
		updateOrder($db,"pickup_name",$pickup_name,"order_id",$orderID);
		updateOrder($db,"pickup_contact",$pickup_contact,"order_id",$orderID);
		updateOrder($db,"pickup_instruction",$pickup_instruction,"order_id",$orderID);
		updateOrder($db,"delivery_payment",$delivery_payment,"order_id",$orderID);
		updateOrder($db,"delivery_name",$delivery_name,"order_id",$orderID);
		updateOrder($db,"delivery_contact",$delivery_contact,"order_id",$orderID);
		updateOrder($db,"delivery_address",$delivery_address,"order_id",$orderID);
		updateOrder($db,"delivery_instruction",$delivery_instruction,"order_id",$orderID);
		




		header("Location: order_view.php?id=$orderID");




		
	}




	function updateOrder($db,$update_column,$update_data,$column_key,$search_key)
		{
			$sql="UPDATE orders SET ".$update_column." = '".$update_data."' WHERE ".$column_key." = '".$search_key."';";

			$db->query($sql);
		}

?>