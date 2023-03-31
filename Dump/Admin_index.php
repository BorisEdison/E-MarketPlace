<?php 
session_start();
if (!isset($_SESSION['AdminLoginId'])) {
    header("location:Admin_login.php");
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="admin_panel.css">
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		 <link rel="stylesheet" type="text/css" href="admin_panel.css">
		 
</head>
<body><br>
		<form method="POST">
	<button class="btn btn-primary" style="float: right; margin-right: 40px;" name="Logout">Logout</button>
	</form class="btn">
	<div class="clr">
	 <h1 > Welcome Admin</h1>
   </div>
   <br>
    <!-- Code for request list of product-->

<div class="container">
	<div class="col-lg-12"><br><br>
		<h1 class="text-warning text-center">Request List</h1>
		<br>
		<table class="table table-striped table-hover table-bordered">
			<tr class="bg-dark text-white text-center">
				<th>Usename</th>
				<th>Type</th>
				<th>ProductName</th>
		       <th>Productimg</th>
				<th>Price</th>
				<th>quantity</th>
				<th>Reject</th>
				<th>Accept</th>
				
			
			</tr>
			<?php
 
				$con = mysqli_connect("localhost","root","","login1");
				 $q = "SELECT * from product where progress='1'";

				 $query= mysqli_query($con,$q);
				 while ($res=mysqli_fetch_array($query)) {
				 	# code..


	?>
			<tr class="text-center">
				<td> <?php echo $res['username']; ?> </td>
				<td> <?php echo $res['type']; ?> </td>
				<td> <?php echo $res['name']; ?> </td>
				<td> 
				 <img  src="<?php echo $res['image']; ?>" height="100px" width="100px">  
				 </td>
				<td> <?php echo $res['price']; ?> </td>
				<td> <?php echo $res['quantity']; ?> </td>
				<td> <button class="btn-danger "> <a href="not_approved_product.php?id=<?php echo $res['id'];?>" class="text-white"> Reject</a> </button></td>
				<td> <button class="btn-primary "> <a href="approved_product.php?id=<?php echo $res['id'];?>" class="text-white"> Accept</a> </button></td>
				

				
			</tr>
			<?php 
                }
			?>
		</table>
	</div>
</div>



<style type="text/css">
.card{
  display: block;
  border-radius: 10px;
  cursor: pointer;
  transition: 0.2s;
   margin-top: 100px;
   border-radius: 20px; 
   box-shadow: 5px 05px 5px 0px black; 
   color: white; 
  
}
.card:hover{
 z-index: 1;
transform: scale(0.90);
 box-shadow: 0 0 10px 0 green;

}

</style>
<div class="container">

  <div class="row">

  
    <div class=" col-lg-3 col-md-6 col-sm-7"> 
          <div class="card text-center"style="background-color:#01FF70;">
            <div class="card-block">
              <a href="#" style="text-decoration:none; color: white;">
	<div class="bd">
		<h1 align="center" style="font-size: 37px;"> PAYMENTS <br>
			<i class="fa fa-plus-circle fa-2x"></i></h1>
	</div>
	</a>
            </div>
          </div>
    </div>


    <div class=" col-lg-3 col-md-6 col-sm-7"> 
          <div class="card text-center"style="background-color:#c8f542;">
            <div class="card-block" >
              <a href="#" style="text-decoration:none; color: white; ">
	<div class="bd">
		<h1 align="center" style="font-size: 37px;"> PRODUCTS<br>
			<i class="fa fa-minus-circle fa-2x"></i></h1>
	</div>
	</a>
            </div>
          </div>
    </div>


    <div class=" col-lg-3 col-md-6 col-sm-7"> 
          <div class="card text-center"style=" background-color:#42f5aa;">
            <div class="card-block">
              <a href="#" style="text-decoration:none; color: white;">
	<div class="bd">
		<h1 align="center" style="font-size: 37px;">DELETE  <br>
			<i class="fa fa-minus-circle fa-2x"></i></h1>
	</div>
	</a>
            </div>
          </div>
    </div>



    <div class=" col-lg-3 col-md-6 col-sm-7"> 
          <div class="card text-center"style="background-color:#7FDBFF;">
            <div class="card-block">
              <a href="#" style="text-decoration:none; color: white;">
	<div class="bd">
		<h1 align="center" style="font-size: 37px;"> USERS <br>
			<i class="fa fa-user-circle fa-2x"></i></h1>
	</div>
	</a>
            </div>
          </div>
    </div>

  
  </div>
</div>
















<?php 

if (isset($_POST['Logout'])){
	session_destroy();
	header("location:Admin_login.php");	
}
?>








<script src="https://kit.fontawesome.com/a076d05399.js">
<scriptsrc="https://code.jquery.com/jquery-3.5.1.slim.min.js"integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
  crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>