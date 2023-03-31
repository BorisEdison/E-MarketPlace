<?php 
session_start();
$adminlogin = $_SESSION['FarmerLoginId'];
if (!isset($_SESSION['FarmerLoginId'])) {
    header("location:Login.php");
}
if (isset($_POST['Logout']))
		{
  			session_destroy();
 			header("location:Login_Farmer.php"); 
		}
?>


<html>
	<head>

		<title>Add product</title>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="AddProduct.css">
		<link rel="stylesheet" type="text/css" href="footer.css">
		

	</head>

	<body>

		<div class="cnt">
    		<div class="img-11" style="height: 30px; width:100px;">
    		<img src="Images/logo3.png">
    		</div>
    
		</div>
  

		<br><br><br><br>
		<form class="d-flex" method="POST">
        	<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 20px;">
        	<button class="btn btn-outline-success" type="submit" style="margin-left:20px;">Search</button>
        	<button class="btn btn-primary" name="Logout">Logout</button>
        </form>

		<br>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  			<div class="container-fluid">
    			<a class="navbar-brand" href="#"></a>
    			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      				<span class="navbar-toggler-icon"></span>
    			</button>
    			<div class="collapse navbar-collapse" id="navbarSupportedContent" >
      				<ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        				<li class="nav-item">
          				<a class="nav-link" aria-current="page" href="Home1.php">Home</a>
        				</li>
        				<li class="nav-item">
          				<a class="nav-link" href="#">Category</a>
        				</li>
				        <li class="nav-item">
				          <a class="nav-link active" href="AddProduct.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add</a>
				        </li>
						<li class="nav-item">
          				<a class="nav-link" href="AddedProduct.php"><i class="" aria-hidden="true"></i>Added product</a>
        				</li>
				        <li class="nav-item">
				          <a class="nav-link" href="Abouts-us.php">About-us</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" href="contact-us.php">Contact-us</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i> Cart</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" href="Farmer_Profile.php"><i class="fa fa-eye" aria-hidden="true"></i>View Profile</a>
				        </li>

				        <li class="nav-item dropdown">
				          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				           Languges
				          </a>
				          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
				            <li><a class="dropdown-item" href="#">Marathi</a></li>
				            <li><a class="dropdown-item" href="#">English</a></li>
				            <li><a class="dropdown-item" href="#">Hindi</a></li>
				          </ul>
        				</li>
              		</ul>
      
    			</div>
  			</div>
		</nav>

		<div class="container">

			<br>

			<h1 align="center">Add product </h1><br>

			<div class="col-lg-8 m-auto d-block">

				<form class="form-container"  action=""  method="post" enctype="multipart/form-data" id="hero">

					<div class="form-group">

						<label>Type of product</label><br>
						
						<input class="form-check-input"  value="grains" type="radio" id="grains" name="product">

						<label class="form-check-label"  for="grains">grains</label><br>
							
						<input class="form-check-input" value="vegetable" type="radio" id="vegetable" name="product">
								
						<label class="form-check-label" for="vegetable">vegetable</label><br>
							
								
						<input class="form-check-input" value="flower" type="radio" id="flower" name="product">
								
						<label class="form-check-label" for="flower">flower</label><br>

						<input class="form-check-input" value="fruit" type="radio" id="fruit" name="product">
								
						<label class="form-check-label" for="fruit">fruit</label><br>
							
					</div>

					<div class="form-group">

						<label for="product-name">product name:</label>
					
						<input class="form-control" id="product-name" list="list" name="product-name" pattern="^[a-zA-Z\\s]*$" title="product-name" required><br>

					</div>	

					<div class="form-group">

						<label for="image">image:</label>
				
						<input class="form-control-file" type="file" id="image" name="image"  required><br><br>

					</div>

					<div class="form-group">

						<label for="price">price(Rs):</label>
						
						<input type="text" class="form-control" id="price" name="price" pattern="^[0-9]*$" title="only number" required><br>

					</div>

					<div class="form-group">

						<label for="quantity">quantity(kg):</label>
				
						<input type="text" class="form-control" id="quantity" name="quantity" pattern="^[0-9]*$" title="only number" required><br>

					</div>

					<div class="form-group">

						<label for="address">adress:</label>
					
						<textarea class="form-control" aria-label="With textarea" maxlength="50" wrap="hard" id="address" name="address" required></textarea><br>

					</div>

					<input type="submit" name="submit" value="submit" class="btn btn-primary btn-block">

				</form>

			</div>		

		</div>

		<footer class="text-black text-right" style="margin-top: 50px; padding-bottom: 5px;">
			<div class="wrapper">

			    <p style="color: black; font-weight: bold;margin-top: 12px;"> Get Social :</p>
			    <div class="icon facebook">
			    	<span><a href="#" class="fab fa-facebook-f"></a></span>
			    </div>
			    <div class="icon twitter">
			      	<span><a href="#" class="fab fa-twitter"></a></span>
			    </div>
			    <div class="icon instagram">
			    	<span><a href="#" class="fab fa-instagram"></a></span>
			    </div>

			</div>
		</footer>	
	
		<?php 

            $con = mysqli_connect("localhost","root","","login1");

		if(isset($_POST['submit']))

		{

			$name = $_POST['product-name'];

			$type = $_POST['product'];

			$image = $_FILES['image']['tmp_name'];

			$imageName=$_FILES['image']['name'];
			$var=explode('.', $imageName);
			$imageExt=strtolower(end($var));

			$fileExtStored=array('png','jpg','jpeg','img');


			$price = $_POST['price'];

			$quantity = $_POST['quantity'];

			$address = $_POST['address'];

			$progress=1;


			$see=0;

			if(in_array($imageExt,$fileExtStored)){

				$destinationFile='image/'.$imageName;

				move_uploaded_file($image, $destinationFile);

				$result = mysqli_query($con,"insert into product values('','$type','$name','$destinationFile','$price','$quantity','$address','$adminlogin','$progress','$see')");


				if($result)

				{
					echo '<script>window.alert("data entered");</script>'; 
					 	
				}

				else
				{

					echo '<script>window.alert("Something gone wrong");window.history.back();</script>'; 

				}
			}

			

			else
			{

				echo '<script>alert(" wrong");window.history.back();</script>'; 

			}

		}

		?>
		<?php 

		
		?>


		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>

		

	</body>

</html>