<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Small Description About Website</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>


	<div class="container">
	
          <div class="row">
              <div class="col-md-12">
                     <h1 style="text-align:center;">Small Description About Website</h1>
                  	<form action="small_description_about_website_insert_table_backend.php" method="post" enctype="multipart/form-data">
				
				<div  data-validate="Please enter a header of your company">
					<input type="text" class="form-control" name="heading" placeholder="Main Header" autocomplete="off">
					
				</div>
                <hr>
				<div  data-validate = "Please Enter Your Heading Description">
					<textarea type="text"  class="form-control" name="description" placeholder="Header Description" autocomplete="off" rows="10"></textarea>
					
				</div>
<hr>
				<div  data-validate="Please enter a point header">
					<input type="text"  class="form-control" name="pointheader" placeholder="Please enter a point header" autocomplete="off">
					<span class="focus-input100"></span>
				</div>
<hr>
				<div  data-validate="Please enter a point description">
					<textarea type="text"  class="form-control" name="pointdescription" placeholder="Point Description" autocomplete="off"></textarea>
					
				</div>
              <hr>  
                <div  data-validate = "Please enter your message" autocomplete="off">
					<input type="file" name="files" id="files">
					
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
