<?php
	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=delivery_tracker', 'root', '');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$db = new mysqli('localhost', 'root','', 'delivery_tracker');

?>