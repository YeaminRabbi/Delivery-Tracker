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
				  timer: 2000
				})
	            </script>";
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

		if($msg=="orderConfirmed"){
			echo "<script type='text/javascript'>
	               Swal.fire({
				  position: 'center',
				  icon: 'success',
				  title: 'Order Confirmed!',
				  showConfirmButton: false,
				  timer: 1000
				})
	            </script>";
		}
		
	}
	
?>