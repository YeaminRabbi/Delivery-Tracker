<?php 

require_once "../users/dbConfig.php";

if(isset($_POST['btn_payment_request']))
{
	$variable    = $_POST['payment_request'];
	$variable_one= $_POST['order_id'];
	$sql = "UPDATE orders SET payment_request='$variable' WHERE order_id='$variable_one' ";
	$db->query($sql);
    header("Location: orders.php");
}

 ?>