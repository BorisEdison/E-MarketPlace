<!DOCTYPE html>
<html>
<head>
	<title>NavBars</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet">
</head>
<body>
<style type="text/css">
	.bg-dark{
	background-color:#00141a!important;
	color: black !important;
}
.nav-link {
	color: white !important;
    font-family: 'Lora', serif;
    
    margin-left: 70px;
 
 }

 .nav-link:hover{
 	background-color: #999966;
 	color: black;
 }

 .d-flex{
 	float: right;
 	border-radius: 20px;
 	
 }

.btn{
	margin-left: 20px;
	margin-right: 10px;
}
</style><br>
<div class="cnt">
    <div class="img-11" style="height: 30px; width:100px;">
      <img src="Images/logo3.png">
    </div>
    
  </div>

<form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 20px;">
        <button class="btn btn-outline-success" type="submit" style="margin-left:20px;">Search</button>
         <button class="btn btn-primary" name="Logout">Logout</button>
      </form>

<br><br><br><br>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About-us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact-us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i> Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-eye" aria-hidden="true"></i>View Profile</a>
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


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js">
</body>
</html>