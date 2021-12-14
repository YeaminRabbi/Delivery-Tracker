<?php include 'connect.php'; ?>


<?php 

if(isset($_POST['submit']))
{
	// Normal Input //
    $subject      = $_POST['subject'];
    $username     = $_POST['username'];
    $email        = $_POST['email'];
    $phone        = $_POST['phone'];
    $message      = $_POST['message'];


   


	


	    $sql="INSERT INTO `contactform`(subject,username,email,phone,message,date)
	    VALUES('$subject','$username','$email','$phone','$message',NOW())";
	    $result = $conn->query($sql);

	    if(!$result)
	    {
	        header('location: team.php');
	    }

	    else
	    {   
	    	
	        header('location: index.php');
	    }
   
 
}

 ?>