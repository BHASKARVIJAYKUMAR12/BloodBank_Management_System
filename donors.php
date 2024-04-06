<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donars View</title>
    <script src="https://kit.fontawesome.com/b2323bfd9a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  </head>
  <body>
<!--navbar-->
<nav class="navbar navbar-expand-lg bg-light  fixed-top">
        <div class="container">
    <a href="#" class="navbar-brand ">
        <img src="navlogo.png" class="img-fluid "></a>
        <button class="navbar-toggler" 
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarmenu"><span class="navbar-toggler-icon"> 
        </span></button>
        <div class="collapse navbar-collapse " id="navbarmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a href="user_login.php" class="nav-link">Home</a></li>
              
                <li class="nav-item">
                    <a href="#community" class="nav-link">About us</a>
                </li>
                <li class="nav-item">
                    <a href="#founders" class="nav-link">Our Founders</a>
                </li>
                <li class="nav-item">
                    <a href="#FAQs" class="nav-link">FAQ's</a>
                </li>
                <li class="nav-item">
                    <a href="#contact-info" class="nav-link">Contact Details</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><?php echo $_SESSION['username']?></li>
                    <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="profilepage.php">Profile</a></li>
                      <li><a class="dropdown-item" href="dashboard.html">Dashboard</a></li>
                      <li><a class="dropdown-item" href="#">Notifications</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>  Logout</a></li>
                    </ul>
                  </li>
                
            </ul>
           
        </div></div></nav>

   <!--dropdown end-->    
    
<br>
<br>
<br>
<br>
<!--showcase-->
<!---Right offcanvas-->
<!-- <button class="btn btn-primary" type="button"  data-bs-toggle="offcanvas"  data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Chat Box</button>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  </div>
</div> -->

<!--patients list-->

<section>
    <center>
    <h2 class="text-danger">Donors List</h2></center>
</section>

<!----offcanvas end-->
  <br>
<div class="container">
<div class="card mb-3" >
<div class="row g-0">
      <div class="col-md-4">
        <img src="cartoon.png" class="img-fluid rounded-start"alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
            <ul>
          <h5 class="card-title">1.</h5>
          <p class="card-text"><b>Name : </b>Ramesh<br><b>Age : </b>25<br>Phone no : </b> 1234567890<br><b>Address : </b>sangivalasa<br><b>Bloods Available : </b><br><font size="+1">A+</p>
          <a href="https://www.anilneerukondahospital.com/#/ANHVizag" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Donate</a>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p></ul>
        </div>
      </div>
</div>
</div>

<div class="card mb-3" >
    <div class="row g-0">
          <div class="col-md-4">
            <img src="cartoon.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
                <ul>
              <h5 class="card-title">2.</h5>
              <p class="card-text"><b>Name : </b>Suresh<br><b>Age : </b>35<br><b>Phone no : </b> 1234567890<br><b>Address : </b>sangivalasa<br><b>Bloods Available : </b><br><font size="+1">AB+</p>
              <a href="https://www.anilneerukondahospital.com/#/ANHVizag" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Donate</a>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p></ul>
            </div>
          </div>
    </div>
    </div>

<div class="card mb-3" >
        <div class="row g-0">
              <div class="col-md-4">
                <img src="cartoon.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <ul>
                  <h5 class="card-title">3</h5>
                  <p class="card-text"><b>Name : </b>Mahesh<br><b>Age : </b>32<br>Phone no : </b> 1234567890<br><b>Address : </b>sangivalasa<br><b>Bloods Available : </b><br><font size="+1">AB-</p>
                  <a href="https://www.anilneerukondahospital.com/#/ANHVizag" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Donate</a>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p></ul>
                </div>
              </div>
</div>
</div>

<div class="card mb-3" >
    <div class="row g-0">
        <div class="col-md-4">
        <img src="cartoon.png" class="img-fluid rounded-start" alt="...">
        </div>
    <div class="col-md-8">
        <div class="card-body">
          <ul>
            <h5 class="card-title">4</h5>
                <p class="card-text"><b>Name : </b>Rajesh<br><b>Age : </b>20<br>Phone no : </b> 1234567890<br><b>Address : </b>sangivalasa<br><b>Bloods Available : </b><br><font size="+1">O+</p>
                <a href="https://www.anilneerukondahospital.com/#/ANHVizag" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Donate</a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p></ul>
        </div>
        </div>
            </div>
            </div>

<div class="card mb-3" >
    <div class="row g-0">
        <div class="col-md-4">
            <img src="cartoon.png" class="img-fluid rounded-start" alt="...">
        </div>
    <div class="col-md-8">
        <div class="card-body">
          <ul>
            <h5 class="card-title">5</h5>
            <p class="card-text"><b>Name : </b>Jayesh<br><b>Age : </b>54<br><b>Phone no : </b> 1234567890<br><b>Address : </b>sangivalasa<br><b>Bloods Available : </b><br><font size="+1">A+</p>
            <a href="https://www.anilneerukondahospital.com/#/ANHVizag" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Donate</a>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p></ul>
        </div>
                      </div>
</div>
</div>

<div class="card mb-3" >
    <div class="row g-0">
     <div class="col-md-4">
        <img src="cartoon.png" class="img-fluid rounded-start" alt="...">
      </div>
  <div class="col-md-8">
    <div class="card-body">
      <ul>
   <h5 class="card-title">6</h5>
      <p class="card-text"><b>Name : </b>Sailesh<br><b>Age : </b>34<br<b>Phone no : </b> 1234567890<br><b>Address : </b>sangivalasa<br><b>Bloods Available : </b><br><font size="+1">A-</p>
      <a href="https://www.anilneerukondahospital.com/#/ANHVizag" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Donate</a>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p></ul>
    </div>
  </div>
</div>
</div>


</div>
  
  </div>
<!--list end-->

<!--pagination-->
<!-- <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav> -->
  <!--end-->
  </body>
</html>