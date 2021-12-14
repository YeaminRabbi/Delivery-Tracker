<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Why Choose Us</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php 



              $sqlClients = "SELECT * FROM `whychooseus` ";
              $resultClients = mysqli_query($conn,$sqlClients);
              $rows = mysqli_fetch_assoc($resultClients);
             

 ?>



	<div class="container">
		
          <div class="row">


              <div class="col-md-12">
                 <h1 style="text-align:center;">Why Choose Us</h1>
                  <form  action="WhyChooseUs_update_backend.php" method="post" enctype="multipart/form-data">

				<div data-validate="Please enter your Point Heading">
					<input type="text" name="pointheading" placeholder="Point Heading" autocomplete="off" class="form-control" value="<?php echo $rows['pointheading']; ?>">
					
				</div>
<hr>
				<div data-validate = "Please Enter Your Point Heading Description">
					<textarea type="text" name="description" placeholder="Point Description" autocomplete="off" class="form-control"><?php echo $rows['description'];?></textarea>
					
				</div>

<hr>
				
					<button class="btn btn-success" type="submit" name="submit">
						Submit
					</button>
				
			</form>

			
              </div>
          </div>
		
			
		
	</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	
</body>
</html>
