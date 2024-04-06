<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user_choices</title>
    <link rel="stylesheet" href="mainpage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">  
    <script src="https://kit.fontawesome.com/b2323bfd9a.js" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg bg-light  fixed-top">
        
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
                <a href="#" class="nav-link">Home</a></li>
              
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
                        <li class="dropdown-item">Username</li>
                    <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="profilepage.php">Profile</a></li>
                      <li><a class="dropdown-item" href="dashboard.html">Dashboard</a></li>
                      <li><a class="dropdown-item" href="#">Notifications</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="logout.html"><i class="fa-solid fa-right-from-bracket"></i>  Logout</a></li>
                    </ul>
                  </li>
                
            </ul>
           
        </div></nav>
        <br>
        <br>

<nav aria-label="Page navigation example">
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
</nav>
</body>
</html>