<?php
	
	require_once "../users/dbConfig.php";
	session_start();

	$emailId=$_GET['emailID'];
    EmailUpdate($db,'email_status','1','id',$emailId);
    header("Location: email.php");
	


	


	function EmailUpdate($db,$update_column,$update_data,$column_key,$search_key)
	{
		$sql="UPDATE contactform SET ".$update_column." = '".$update_data."' WHERE ".$column_key." = '".$search_key."';";

		$db->query($sql);
	}
?>