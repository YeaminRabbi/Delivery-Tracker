
<?php 
	$conn = new mysqli('localhost', 'root', '', 'delivery_tracker');

    if (!$conn) {
        echo "failed to create database connecting";
    } else {
        //echo "successfull to create database connection";
    }	
?>