<?php include 'connect.php'; ?>


<?php 

if(isset($_POST['submit']))
{
	// Normal Input //
    $ourMission    = $_POST['ourMission'];
    $ourVission     = $_POST['ourVission'];
    


    // check
	if(empty($ourMission))
	{
		echo "<script>alert('please enter Company Mission');</script>";
	}
	// check
	if(empty($ourVission))
	{

		echo "<script>alert('please enter Company Vission');</script>";
	}
	//check

	

    
   
	else
	{

		
	    


	    $sql="INSERT INTO `company_mission_vission`(ourMission,ourVission,date)
	    VALUES('$ourMission','$ourVission',NOW())";
	    $result = $conn->query($sql);

	    if(!$result)
	    {
	        header('location: company_mission_vission_insert_form.php');
	    }

	    else
	    {   
	    	
	        header('location: index.php');
	    }
   
   }
}

 ?>