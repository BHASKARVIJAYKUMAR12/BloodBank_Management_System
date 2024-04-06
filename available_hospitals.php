<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blood stock</title>
    <script src="https://kit.fontawesome.com/b2323bfd9a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  </head>
  <style>
.btn btn-primary{
    text-align: right;
}
  </style>
  <body>
<!--navbar-->
<script src="https://kit.fontawesome.com/b2323bfd9a.js" crossorigin="anonymous"></script>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-light  fixed-top">
        <div class="container">
    <a href="user_login.php" class="navbar-brand ">
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
<br>
<br>
<br>
<br>
<!--showcase-->
<!---Right offcanvas-->

<!----offcanvas end-->
<!--hostpitals list-->
<section>
    <center>
    <h2 class="text-danger">Hospitals List</h2></center>
</section>
<div class="container">
<div class="card mb-3">
<div class="row g-0">
      <div class="col-md-4">
        <img src="ANH.jpeg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
            <ul>
          <h5 class="card-title">ANH</h5>
          <p class="card-text">Rating:4<br>Phone no: 1234567890<br>Address: sanghivalasa<br>Bloods Available:<br><pre><font size="+1">A+<span class="badge bg-secondary">270</span></h5> B+<span class="badge bg-secondary">140</span></h5> AB+<span class="badge bg-secondary">200</span></h5> O+<span class="badge bg-secondary">522</span></h5><br>A-<span class="badge bg-secondary">145</span></h5> B-<span class="badge bg-secondary">423</span></h5> AB-<span class="badge bg-secondary">245</span></h5> O-<span class="badge bg-secondary">256</span></h5></font></pre></p>
          <a href="https://www.anilneerukondahospital.com/#/ANHVizag" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Enter</a>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
</ul>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" >
    <div class="row g-0">
      <div class="col-md-4">
        <img src="APOLLO.jpeg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <ul>
          <h5 class="card-title">Apollo Hospital</h5>
          <p class="card-text">Rating:4<br>Phone no: 1234567890<br>Address: sanghivalasa<br>Bloods Available:<br><pre><font size="+1">A+<span class="badge bg-secondary">270</span></h5> B+<span class="badge bg-secondary">140</span></h5> AB+<span class="badge bg-secondary">200</span></h5> O+<span class="badge bg-secondary">522</span></h5><br>A-<span class="badge bg-secondary">145</span></h5> B-<span class="badge bg-secondary">423</span></h5> AB-<span class="badge bg-secondary">245</span></h5> O-<span class="badge bg-secondary">256</span></h5></font></pre></p>
          <a href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Enter</a>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
</ul>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="PINNACLE.jpeg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <ul>
          <h5 class="card-title">Pinnacle Hospital</h5>
          <p class="card-text">Rating:4<br>Phone no: 1234567890<br>Address: sanghivalasa<br>Bloods Available:<br><pre><font size="+1">A+<span class="badge bg-secondary">270</span></h5> B+<span class="badge bg-secondary">140</span></h5> AB+<span class="badge bg-secondary">200</span></h5> O+<span class="badge bg-secondary">522</span></h5><br>A-<span class="badge bg-secondary">145</span></h5> B-<span class="badge bg-secondary">423</span></h5> AB-<span class="badge bg-secondary">245</span></h5> O-<span class="badge bg-secondary">256</span></h5></font></pre></p>
          <a href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Enter</a>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p></ul>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="CARE.jpeg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <ul>
          <h5 class="card-title">CARE Hospital</h5>
          <p class="card-text">Rating:4<br>Phone no: 1234567890<br>Address: sanghivalasa<br>Bloods Available:<br><pre><font size="+1">A+<span class="badge bg-secondary">270</span></h5> B+<span class="badge bg-secondary">140</span></h5> AB+<span class="badge bg-secondary">200</span></h5> O+<span class="badge bg-secondary">522</span></h5><br>A-<span class="badge bg-secondary">145</span></h5> B-<span class="badge bg-secondary">423</span></h5> AB-<span class="badge bg-secondary">245</span></h5> O-<span class="badge bg-secondary">256</span></h5></font></pre></p>
          <a href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Enter</a>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
</ul>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="Q1.jpeg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <ul>
          <h5 class="card-title">Q1 Hospital</h5>
          <p class="card-text">Rating:4<br>Phone no: 1234567890<br>Address: sanghivalasa<br>Bloods Available:<br><pre><font size="+1">A+<span class="badge bg-secondary">270</span></h5> B+<span class="badge bg-secondary">140</span></h5> AB+<span class="badge bg-secondary">200</span></h5> O+<span class="badge bg-secondary">522</span></h5><br>A-<span class="badge bg-secondary">145</span></h5> B-<span class="badge bg-secondary">423</span></h5> AB-<span class="badge bg-secondary">245</span></h5> O-<span class="badge bg-secondary">256</span></h5></font></pre></p>
          <a href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Enter</a>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
</ul>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" >
    <div class="row g-0">
      <div class="col-md-4">
        <img src="QUEENS.jpeg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <ul>
          <h5 class="card-title">Queen's Hospital</h5>
          <p class="card-text">Rating:4<br>Phone no: 1234567890<br>Address: sanghivalasa<br>Bloods Available:<br><pre><font size="+1">A+<span class="badge bg-secondary">270</span></h5> B+<span class="badge bg-secondary">140</span></h5> AB+<span class="badge bg-secondary">200</span></h5> O+<span class="badge bg-secondary">522</span></h5><br>A-<span class="badge bg-secondary">145</span></h5> B-<span class="badge bg-secondary">423</span></h5> AB-<span class="badge bg-secondary">245</span></h5> O-<span class="badge bg-secondary">256</span></h5></font></pre></p>
          <a href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Enter</a>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p></ul>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" >
    <div class="row g-0">
      <div class="col-md-4">
        <img src="AMMA.jpeg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <ul>
          <h5 class="card-title">Amma Hospital</h5>
          <p class="card-text">Rating:4<br>Phone no: 1234567890<br>Address: sanghivalasa<br>Bloods Available:<br><pre><font size="+1">A+<span class="badge bg-secondary">270</span></h5> B+<span class="badge bg-secondary">140</span></h5> AB+<span class="badge bg-secondary">200</span></h5> O+<span class="badge bg-secondary">522</span></h5><br>A-<span class="badge bg-secondary">145</span></h5> B-<span class="badge bg-secondary">423</span></h5> AB-<span class="badge bg-secondary">245</span></h5> O-<span class="badge bg-secondary">256</span></h5></font></pre></p>
          <a href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Enter</a>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
</ul>
        </div>
      </div>
    </div>
  </div><div class="card mb-3" >
    <div class="row g-0">
      <div class="col-md-4">
        <img src="AMG.jpeg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <ul>
          <h5 class="card-title">AMG Hospital</h5>
          <p class="card-text">Rating:4<br>Phone no: 1234567890<br>Address: sanghivalasa<br>Bloods Available:<br><pre><font size="+1">A+<span class="badge bg-secondary">270</span></h5> B+<span class="badge bg-secondary">140</span></h5> AB+<span class="badge bg-secondary">200</span></h5> O+<span class="badge bg-secondary">522</span></h5><br>A-<span class="badge bg-secondary">145</span></h5> B-<span class="badge bg-secondary">423</span></h5> AB-<span class="badge bg-secondary">245</span></h5> O-<span class="badge bg-secondary">256</span></h5></font></pre></p>
          <a href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Enter</a>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
</ul>
        </div>
      </div>
    </div>
</div><div class="card mb-3" >
    <div class="row g-0">
      <div class="col-md-4">
        <img src="SEVEN HILLS.jpeg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body"><ul>
          <h5 class="card-title">Seven Hills Hospital</h5>
          <p class="card-text">Rating:4<br>Phone no: 1234567890<br>Address: sanghivalasa<br>Bloods Available:<br><pre><font size="+1">A+<span class="badge bg-secondary">270</span></h5> B+<span class="badge bg-secondary">140</span></h5> AB+<span class="badge bg-secondary">200</span></h5> O+<span class="badge bg-secondary">522</span></h5><br>A-<span class="badge bg-secondary">145</span></h5> B-<span class="badge bg-secondary">423</span></h5> AB-<span class="badge bg-secondary">245</span></h5> O-<span class="badge bg-secondary">256</span></h5></font></pre></p>
          <a href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Enter</a>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p></ul>
        </div>
      </div>
    </div>
</div><div class="card mb-3" >
    <div class="row g-0">
      <div class="col-md-4">
        <img src="VIMS.jpeg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <ul>
          <h5 class="card-title">VIMS Hospital</h5>
          <p class="card-text">Rating:4<br>Phone no: 1234567890<br>Address: sanghivalasa<br>Bloods Available:<br><pre><font size="+1">A+<span class="badge bg-secondary">270</span></h5> B+<span class="badge bg-secondary">140</span></h5> AB+<span class="badge bg-secondary">200</span></h5> O+<span class="badge bg-secondary">522</span></h5><br>A-<span class="badge bg-secondary">145</span></h5> B-<span class="badge bg-secondary">423</span></h5> AB-<span class="badge bg-secondary">245</span></h5> O-<span class="badge bg-secondary">256</span></h5></font></pre></p>
          <a href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Enter</a>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
</ul> </div>
      </div>
    </div>
</div><div class="card mb-3" >
    <div class="row g-0">
      <div class="col-md-4">
        <img src="GITAM.jpg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body"><ul>
          <h5 class="card-title">GITAM Hospital</h5>
          <p class="card-text">Rating:4<br>Phone no: 1234567890<br>Address: sanghivalasa<br>Bloods Available:<br><pre><font size="+1">A+<span class="badge bg-secondary">270</span></h5> B+<span class="badge bg-secondary">140</span></h5> AB+<span class="badge bg-secondary">200</span></h5> O+<span class="badge bg-secondary">522</span></h5><br>A-<span class="badge bg-secondary">145</span></h5> B-<span class="badge bg-secondary">423</span></h5> AB-<span class="badge bg-secondary">245</span></h5> O-<span class="badge bg-secondary">256</span></h5></font></pre></p>
          <a href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Enter</a>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p></ul>
        </div>
      </div>
    </div>
</div><div class="card mb-3" >
    <div class="row g-0">
      <div class="col-md-4">
        <img src="MEDICOVER.jpeg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body"><ul>
          <h5 class="card-title">MEDICOVER Hospital</h5>
          <p class="card-text">Rating:4<br>Phone no: 1234567890<br>Address: sanghivalasa<br>Bloods Available:<br><pre><font size="+1">A+<span class="badge bg-secondary">270</span></h5> B+<span class="badge bg-secondary">140</span></h5> AB+<span class="badge bg-secondary">200</span></h5> O+<span class="badge bg-secondary">522</span></h5><br>A-<span class="badge bg-secondary">145</span></h5> B-<span class="badge bg-secondary">423</span></h5> AB-<span class="badge bg-secondary">245</span></h5> O-<span class="badge bg-secondary">256</span></h5></font></pre></p>
          <a href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Enter</a>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p></ul>
        </div>
      </div>
    </div>
</div><div class="card mb-3" >
    <div class="row g-0">
      <div class="col-md-4">
        <img src="NRI.jpeg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <ul>
          <h5 class="card-title">NRI Hospital</h5>
          <p class="card-text">Rating:4<br>Phone no: 1234567890<br>Address: sanghivalasa<br>Bloods Available:<br><pre><font size="+1">A+<span class="badge bg-secondary">270</span></h5> B+<span class="badge bg-secondary">140</span></h5> AB+<span class="badge bg-secondary">200</span></h5> O+<span class="badge bg-secondary">522</span></h5><br>A-<span class="badge bg-secondary">145</span></h5> B-<span class="badge bg-secondary">423</span></h5> AB-<span class="badge bg-secondary">245</span></h5> O-<span class="badge bg-secondary">256</span></h5></font></pre></p>
          <a href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Enter</a>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
</ul>
        </div>
      </div>
    </div>
</div><div class="card mb-3" >
    <div class="row g-0">
      <div class="col-md-4">
        <img src="GIMS.jpeg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body"><ul>
          <h5 class="card-title">GIMS Hospital</h5>
          <p class="card-text">Rating:4<br>Phone no: 1234567890<br>Address: sanghivalasa<br>Bloods Available:<br><pre><font size="+1">A+<span class="badge bg-secondary">270</span></h5> B+<span class="badge bg-secondary">140</span></h5> AB+<span class="badge bg-secondary">200</span></h5> O+<span class="badge bg-secondary">522</span></h5><br>A-<span class="badge bg-secondary">145</span></h5> B-<span class="badge bg-secondary">423</span></h5> AB-<span class="badge bg-secondary">245</span></h5> O-<span class="badge bg-secondary">256</span></h5></font></pre></p>
          <a href="#" class="btn btn-primary " tabindex="-1" role="button" aria-disabled="true">Enter</a>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p></ul>
        </div>
      </div>
    </div>
</div><div class="card mb-3" >
    <div class="row g-0">
      <div class="col-md-4">
        <img src="JIMS.jpeg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body"><ul>
          <h5 class="card-title">JIMS Hospital</h5>
          <p class="card-text">Rating:4<br>Phone no: 1234567890<br>Address: sanghivalasa<br>Bloods Available:<br><pre><font size="+1">A+<span class="badge bg-secondary">270</span></h5> B+<span class="badge bg-secondary">140</span></h5> AB+<span class="badge bg-secondary">200</span></h5> O+<span class="badge bg-secondary">522</span></h5><br>A-<span class="badge bg-secondary">145</span></h5> B-<span class="badge bg-secondary">423</span></h5> AB-<span class="badge bg-secondary">245</span></h5> O-<span class="badge bg-secondary">256</span></h5></font></pre></p>
          <a href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Enter</a>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p></ul>
        </div>
      </div>
    </div>
</div><div class="card mb-3" >
    <div class="row g-0">
      <div class="col-md-4">
        <img src="ESIC.jpeg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body"><ul>
          <h5 class="card-title">E.S.I.C Hospital</h5>
          <p class="card-text">Rating:4<br>Phone no: 1234567890<br>Address: sanghivalasa<br>Bloods Available:<br><pre><font size="+1">A+<span class="badge bg-secondary">270</span></h5> B+<span class="badge bg-secondary">140</span></h5> AB+<span class="badge bg-secondary">200</span></h5> O+<span class="badge bg-secondary">522</span></h5><br>A-<span class="badge bg-secondary">145</span></h5> B-<span class="badge bg-secondary">423</span></h5> AB-<span class="badge bg-secondary">245</span></h5> O-<span class="badge bg-secondary">256</span></h5></font></pre></p>
          <a href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Enter</a>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p></ul>
        </div>
      </div>
    </div>

  </div>
<!--list end-->
<!--pagination-->
<!-- 
<nav aria-label="Page navigation example ">
    <ul class="pagination ">
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