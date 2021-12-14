<?php include 'connect.php'; ?>


<?php 

if(isset($_POST['submit']))
{
	// Normal Input //
    $heading    = $_POST['heading'];
    $description     = $_POST['description'];
    $pointheader     = $_POST['pointheader'];
    $pointdescription     = $_POST['pointdescription'];


    // check
	if(empty($heading))
	{
		echo "<script>alert('please enter header');</script>";
	}
	// check
	if(empty($description))
	{

		echo "<script>alert('please enter description');</script>";
	}
	//check
		// check
	if(empty($pointheader))
	{

		echo "<script>alert('please enter pointheader');</script>";
	}
	//check
	if(empty($pointdescription))
	{

		echo "<script>alert('please enter pointdescription');</script>";
	}


    
    // Image Check
    $destination    =$_FILES['files']['name'];
	// get the image extension
	$extension = substr($destination,strlen($destination)-4,strlen($destination));
	// allowed extensions
	$allowed_extensions = array(".jpg","jpeg",".png",".gif");
	// Validation for allowed extensions .in_array() function searches an array for a specific value.
	if(!in_array($extension,$allowed_extensions))
	{
	    echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
	}
	
	else
	{

		//rename the image file
		 
		 $filename       = $_FILES['files']['tmp_name'];    
	     $destination    = 'upload/'.time().$_FILES['files']['name'];    
	     $image = move_uploaded_file($filename, $destination);
	    


	    $sql="INSERT INTO `small_description_about_website`(heading,description,pointheader,pointdescription,image,date)
	    VALUES('$heading','$description','$pointheader','$pointdescription','$destination',NOW())";
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