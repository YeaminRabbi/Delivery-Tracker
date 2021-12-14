<?php include 'connect.php'; ?>


<?php 

if(isset($_POST['submit']))
{
	// Normal Input //
    $username    = $_POST['username'];
    $complain     = $_POST['complain'];


    // check
	if(empty($username))
	{
		echo "<script>alert('please enter header');</script>";
	}
	// check
	if(empty($complain))
	{

		echo "<script>alert('please enter complain');</script>";
	}

	
	else
	{


	    $sql="INSERT INTO `customerfeedback`(username,complain,date)
	    VALUES('$username','$complain',NOW())";
	    $result = $conn->query($sql);

	    if(!$result)
	    {
	        header('location: index.php');
	    }

	    else
	    {   
	    	
	        header('location: index.php');
	    }
   
   }
}

 ?>