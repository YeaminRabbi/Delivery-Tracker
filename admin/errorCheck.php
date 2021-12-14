<?php
	$msg="";


	if(isset($_GET['msg']))
	{
		$msg=$_GET['msg'];

		if($msg=="login-error"){
			echo "<script type='text/javascript'>
	               Swal.fire({
				  position: 'center',
				  icon: 'warning',
				  title: 'Data Not Matched!',
				  showConfirmButton: false,
				  timer: 700
				})
	            </script>";
		}
	}

	if($msg=="ImgError"){
			echo "<script type='text/javascript'>
	               Swal.fire({
				  position: 'center',
				  icon: 'warning',
				  title: 'Invalid Image Formate!',
				  showConfirmButton: false,
				  timer: 2000
				})
	            </script>";
		}
	


?>