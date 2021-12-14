<?php 


$query="DELETE from small_description_about_website"; 

 $result = $conn->query($query);

  if(!$result)
	    {
	        header('location:submit_property.php');
	    }

	    else
	    {   
	    	
	        header('location: property_delete_backend.php');
	    }

?>