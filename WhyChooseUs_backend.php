<?php include 'connect.php'; ?>


<?php 

if(isset($_POST['submit']))
{
	// Normal Input //
    $pointheading     = $_POST['pointheading'];
    $description     = $_POST['description'];



 
	// check
	if(empty($pointheading))
	{

		echo "<script>alert('please enter pointheading');</script>";
	}
	//check
		// check
	if(empty($description))
	{

		echo "<script>alert('please enter description');</script>";
	}

 
	else
	{

	    $sql="INSERT INTO `whychooseus`(pointheading,description,date)
	    VALUES('$pointheading','$description',NOW())";
	    $result = $conn->query($sql);

	    if(!$result)
	    {
	        header('location: small_description_about_website_insert_table.php');
	    }

	    else
	    {   
	    	
	        header('location: index.php');
	    }
   
   }
}

 ?>