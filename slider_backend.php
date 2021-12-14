<?php include 'connect.php'; ?>


<?php 

if(isset($_POST['submit']))
{
	// Normal Input //
    $maintext    = $_POST['maintext'];
    $subtext     = $_POST['subtext'];

    // check
	if(empty($maintext))
	{
		echo "<script>alert('please enter slider header');</script>";
	}
	// check
	if(empty($subtext))
	{

		echo "<script>alert('please enter subtext');</script>";
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
	    


	    $sql="INSERT INTO `slider`(subtext,maintext,image,date)VALUES('$subtext','$maintext','$destination',NOW())";
	    $result = $conn->query($sql);

	    if(!$result)
	    {
	        header('location: slider_insert_table.php');
	    }

	    else
	    {   
	    	
	        header('location: index.php');
	    }
   
   }
}

 ?>