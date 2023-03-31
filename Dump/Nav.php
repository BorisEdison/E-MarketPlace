<!DOCTYPE html>
<html>
<head>
  <title>Index Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 

    <link rel="stylesheet" type="text/css" href="footer.css">

   
</head>
<body>
  <br>
<button type="button" class="btn btn-primary " id="btn" data-toggle="modal" data-target="#staticBackdrop1">
  Sign-up
</button>
 <div class="modal fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Sign-up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- my form-->
        <form class="form-container">
          <br>
            
          
            <button type="submit" class="btn btn-primary btn-block" style="width: 300px; margin-left: 80px;">Sign-up as Farmer</button><br>
            <button type="submit" class="btn btn-primary btn-block"style="width: 300px; margin-left:80px;">Sign-up as User</button><br>


        </form>
      </div>
      
    </div>
  </div>
</div>
<button type="button" class="btn btn-primary " id="btn" data-toggle="modal" data-target="#staticBackdrop">
  Login
</button><br>
 <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- my form-->
        <form class="form-container">
          <br>
            <button type="submit" class="btn btn-primary btn-block" style="width: 300px; margin-left: 80px;">Login as Farmer</button><br>
            <button type="submit" class="btn btn-primary btn-block"style="width: 300px; margin-left:80px;">Login as User</button><br>

        </form>
      </div>
      
    </div>
  </div>
</div>
 <!--Menu Bar-->
   
<br>    
<style type="text/css">
      #btn{
  float: right;
  margin-right:20px;
  width: 100px;
}
    
    .navbar{
      background-color: #00141a!important;
    }

    .nav-link{
      margin-left:100px;
    }
    .carousel-item{
      height: 400px;
      width:100%;
    }
    .d-flex{
  float: right;
  border-radius: 20px;
  
 }

.btn{
  margin-left: 20px;
  margin-right: 10px;
}
  </style>

  <div class="cnt">
    <div class="img-11" style="height: 30px; width:100px;">
      <img src="Images/logo3.png">
    </div>
    
</div>
  

<form class="d-flex" method="POST">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 20px;">
        <button class="btn btn-outline-success" type="submit" style="margin-left:20px;">Search</button>
  
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
          <a class="nav-link active" aria-current="page" href="Home1.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Categoary
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Grains</a></li>
            <li><a class="dropdown-item" href="#">Vegetables</a></li>
            <li><a class="dropdown-item" href="#">Fruits</a></li>
             <li><a class="dropdown-item" href="#">Flowers</a></li>
          </ul>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="Farmer-aboutus.php">About-us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Farmer-contactus.php">Contact-us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i> Cart</a>
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
 <!-- button-->


  

  
<br>
 <!-- Slider Of images-->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images\slider-1.jpg" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item">
      <img src="Images\slider-2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Images\slider-3.jpg" class="d-block w-100" alt="...">
    </div>

     <div class="carousel-item">
      <img src="Images\slider-4.jpeg" class="d-block w-100" alt="...">
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br><br>

<!-- Cards-->
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md4 col-sm-6"> 


          <div class="card text-center">
            <div class="card-block">
              <img src="Images/Grains.jpg" alt="" class="img-fluid">
              <div class="card-title">
                <h4>Grains</h4>
              </div>
              <div class="card-text">
                 
              </div>
              <a href="#" class="btn btn-success" style="margin-top: 10px;">See more</a>
            </div>
          </div>
    </div>

     <div class="col-lg-3 col-md4 col-sm-6"> 
          <div class="card text-center">
            <div class="card-block">
              <img src="Images/Vegetables.jpg" alt="" class="img-fluid">
              <div class="card-title">
                <h4>Vegetables </h4>
              </div>
              <div class="card-text">
                 
              </div>
              <a href="#" class="btn btn-success" style="margin-top: 10px;">See more</a>
            </div>
          </div>
    </div>

<br> <br>

     <div class="col-lg-3 col-md4 col-sm-6"> 
          <div class="card text-center">
            <div class="card-block">
              <img src="Images/Fruits.jpg" alt="" class="img-fluid">
              <div class="card-title">
                <h4>Fruits </h4>
              </div>
              <div class="card-text">
                 
              </div>
              <a href="#" class="btn btn-success" style="margin-top: 10px;">See more</a>
            </div>
          </div>
    </div>

     <div class="col-lg-3 col-md4 col-sm-6"> 
          <div class="card text-center">
            <div class="card-block">
              <img src="Images/Flowers.jpg" alt="" class="img-fluid">
              <div class="card-title">
                <h4>Flowers</h4>
              </div>
              <div class="card-text">
                 
              </div>
              <a href="#" class="btn btn-success" style="margin-top: 10px;">See more</a>
            </div>
          </div>
    </div>
  </div>
</div>
<br>
 <!-- footer-->


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





<script src="https://kit.fontawesome.com/a076d05399.js">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>
</html>