<?php
session_start();    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>user login</title>
    <link rel="stylesheet" href="user_login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">  
</head>
  <body>
    <script src="https://kit.fontawesome.com/b2323bfd9a.js" crossorigin="anonymous"></script>
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
<!--welcome message-->
<section id="community" class="p-5" style="background-image: url('7602138.jpg');
background-repet:no-repeat;background-size:cover;height:auto">
    <div class="container">
        <br><br><br><br>
     <h3>Hiiii <?php
     echo $_SESSION['username']?>
     ,Welcome to RedCrew community</h3>
     <br><br><br><br>
        <div>
</section>

  
<!--welcome message-->

<!--categories-->  
<section class="p-5">
    <div class="container">
    <h2 style="color:crimson" class="text-center mb-4">Check the available users</h2>
    <div class="row text-center">
    <div class="col-md m-3">
        <a href="available_hospitals.php" style="text-decoration:none;">
            <div class="card bg-dark text-light">

        <div class="card-body text-center ">
            <div class="h1"><i class="fa-solid fa-hospital"></i></div>
            <h4 class="card-title">Hospitals</h4>
            <p class="card-text">check the availablity
                of blood in the hospitals
            </p>

            
        </div>
    </div></a></div>
    
    <div class="col-md m-3"><a href="bloodbank.php" style="text-decoration: none;">
        <div class="card bg-dark text-light">
        
        <div class="card-body text-center">
            <div class="h1">
                <i class="fa-solid fa-building-columns"></i>
            </div>
            <h4 class="card-title">Blood Bank</h4>
            <p class="card-text">check the availablity
                of blood in the Blood bank
            </p>
        </div>
    </div></a></div>
</div>

    
    <div class="col-md m-3">
        <a href="patients.php" style="text-decoration:none;"> 
            <div class="card bg-dark text-light">

       
        <div class="card-body text-center">
            <div class="h1"><i class="fa-solid fa-bed-pulse"></i></div>
            <h4 class="card-title">Patients</h4>
            <p class="card-text">check the patients
                who wants blood
            </p>
            
        </div>
    </div></a></div>
</div>
</div>
</section>
<!--community-->
<section id="community" class="p-5">
    <div class="container">
        <div class="row align-items-center justify-content-between">
    <div class="col-md p-4">
      <h2 style="color:crimson" class="text-center mb-4">About our community</h2>
      <p style="text-align:justify">Our team helps everyone around the world in various blood donations.With the help of our website many people are getting aid in requirement of Blood.
      Our red crew becomes the one of the best platform for the blood donation.
      </p>
        
        
    </div>
    <div class="col-md ">
    <img src="nguy-n-hi-p-sTTeaN4wwrU-unsplash.jpg" class="img-fluid rounded-circle mb-3 ">
</div>
    </div>

    </div>
</section>
    <!--FAQs-->
<section id="FAQs"class="p-5">
   <div class="container">
    <h2 class="text-center mb-4" style="color:crimson">Frequently asked questions</h2>
    <!--Question1-->
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button"
             data-bs-toggle="collapse" 
             data-bs-target="#Question1" 
             aria-expanded="false" aria-controls="flush-collapseOne">
              Is Blood donation is good for health?
            </button>
          </h2>
          <div id="Question1" class="accordion-collapse collapse" 
          aria-labelledby="flush-headingOne" 
          data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
               <p>Donating blood has benefits for your emotional and physical health. According to a report by the Mental Health Foundation, helping others can:
<ul>
                <li>reduce stress</li>
                <li>improve your emotional well-being</li>
                <li>benefit your physical health</li>
                <li> help get rid of negative feelings</li>
                <li>provide a sense of belonging and reduce isolation</li>
                
                
                
               
                </ul></p>
            </div>
          </div>
        </div>
        <!--Question2-->
        <div class="accordion-item">
          <h2 class="accordion-header" >
            <button class="accordion-button collapsed" 
            type="button" data-bs-toggle="collapse"
             data-bs-target="#Question2" aria-expanded="false" aria-controls="flush-collapseTwo">
              How often can you donate blood?
            </button>
          </h2>
          <div id="Question2" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">You must wait a minimum of 56 days between whole blood donations. You must wait at least 7 days after donating blood before you can donate platelets. After an automated double red cell collection, you must wait 112 days before donating again</div>
          </div>
        </div>
        <!--Question3-->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" 
            type="button" data-bs-toggle="collapse" 
            data-bs-target="#Question3" aria-expanded="false" aria-controls="flush-collapseThree">
              Who can donate blood?
            </button>
          </h2>
          <div id="Question3" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                Any healthy adult, both male and female, can donate blood. Men can donate safely once in every three months while women can donate every four months. 
            </div>
          </div>
        </div>
      </div>
   </div>
</section>
<!--founders-->
<section id="founders" class="p-5 bg-white">
    <div class="container-fluid">
     <h2 class="text-center mb-5 text-danger">Founders</h2>
      <div class="row g-4 text-white">
     <div class="col-md-6 col-lg-3">
        
     <div class="card " style="background-image:linear-gradient(rgba(0,0,0,1),rgba(0,0,0,0.7),rgba(0,0,0,0.8))   ;"><div class="card-body text-center">
     <img src="likhitha.jpg"  alt="" class="rounded-circle mb-3 img-fluid"></img>
    <h3 class="card-title mb-3">Likhitha Ketana</h3> 
    <p class="card-text">Front-end developer</p>
   <a href="#"><i class="bi bi-twitter text-white mx-1"></i></a>
   <a href="#"><i class="bi bi-instagram   text-white mx-1"></i></a>
   <a href="#"><i class="bi bi-facebook  text-white  mx-1"></i></a>
  

</div>
    </div>   
    </div>
    <div class="col-md-6 col-lg-3">
        
        <div class="card" style="background-image:linear-gradient(rgba(0,0,0,1),rgba(0,0,0,0.7),rgba(0,0,0,0.8))   ;"><div class="card-body text-center">
        <img src="IMG_1795.jpg"alt="" class="rounded-circle mb-3 img-fluid "></img>
       <h3 class="card-title mb-3">Raghava</h3> 
       <p class="card-text">Back-end developer</p>
       <a href="#"><i class="bi bi-twitter text-white  mx-1"></i></a>
   <a href="#"><i class="bi bi-instagram  text-white mx-1"></i></a>
   <a href="#"><i class="bi bi-facebook  text-white mx-1"></i></a>
   
   
   </div>
       </div>   
       </div>
       <div class="col-md-6 col-lg-3">
        
        <div class="card" style="background-image:linear-gradient(rgba(0,0,0,1),rgba(0,0,0,0.7),rgba(0,0,0,0.8))   ;"><div class="card-body text-center">
        <img src="https://randomuser.me/api/portraits/men/22.jpg"  alt="" class="rounded-circle mb-3 "></img>
       <h3 class="card-title mb-3">Vijay</h3> 
       <p class="card-text">Front-end developer.</p>
       <a href="#"><i class="bi bi-twitter text-white  mx-1"></i></a>
   <a href="#"><i class="bi bi-instagram  text-white  mx-1"></i></a>
   
   <a href="#"><i class="bi bi-facebook  text-white   mx-1"></i></a>
  
   
   </div>
       </div>   
       </div>
       <div class="col-md-6 col-lg-3">
        
        <div class="card" style="background-image:linear-gradient(rgba(0,0,0,1),rgba(0,0,0,0.7),rgba(0,0,0,0.8))   ;"><div class="card-body text-center">
        <img src="https://randomuser.me/api/portraits/men/47.jpg"  alt="" class="rounded-circle mb-3"></img>
       <h3 class="card-title mb-3">Navanish</h3> 
       <p class="card-text">Designer.</p>
       <a href="#"><i class="bi bi-twitter text-white  mx-1"></i></a>
   <a href="#"><i class="bi bi-instagram  text-white   mx-1"></i></a>
   <a href="#"><i class="bi bi-facebook  text-white  mx-1"></i></a>
  
   
   </div>
       </div>   
       </div>
       <div class="col-md-12 col-lg-6">
        
     <div class="card" style="background-image:linear-gradient(rgba(0,0,0,1),rgba(0,0,0,0.7),rgba(0,0,0,0.8))   ;"><div class="card-body text-center">
     <img src="https://randomuser.me/api/portraits/women/72.jpg"  alt="" class="rounded-circle mb-3 "></img>
    <h3 class="card-title mb-3">Kalyani Barla</h3> 
    <p class="card-text">Designer</p>
  <a href="#"><i class="bi bi-twitter text-white  mx-1"></i></a>
   <a href="#"><i class="bi bi-instagram  text-white  mx-1"></i></a>
   <a href="#"><i class="bi bi-facebook  text-white   mx-1"></i></a>
   

</div>
    </div>   
</div>
<div class="col-md-12 col-lg-6">
        
    <div class="card" style="background-image:linear-gradient(rgba(0,0,0,1),rgba(0,0,0,0.7),rgba(0,0,0,0.8))   ;"><div class="card-body text-center">
    <img src="https://randomuser.me/api/portraits/women/90.jpg"  alt="" class="rounded-circle mb-3 "></img>
   <h3 class="card-title mb-3">Unknown</h3> 
   <p class="card-text">Manager</p>
  <a href="#"><i class="bi bi-twitter text-white   mx-1"></i></a>
   <a href="#"><i class="bi bi-instagram  text-white  mx-1"></i></a>
   <a href="#"><i class="bi bi-facebook  text-white   mx-1"></i></a>
  

</div>
   </div>   
</div>
    </div>

</section>
<!--Contact and map-->
<section class="p-5" id="contact-info">
<div class="container">
    <div class="row g-4 align-items-center">
     <div class="col-md">
        <h2 class="text-center mb-4" style="color:crimson">Contact Info</h2>
        <ul class="list-group list-group-flush lead">
        <li class="list-group-item">
            <span class="fw-bold">Main Branch:</span>
            Anits college,Thagarpuvalasa
        </li>
        <li class="list-group-item">
            <span class="fw-bold">Contact number:</span>
            +91 1234356789
        </li>
        <li class="list-group-item">
            <span class="fw-bold">Email-id:</span>
            bloodbank@gmail.com
        </li>
        
    </ul>
     </div>
     <div class="col-md id=map-container-google-1 
     z-depth-1-half map-container " >
        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243094.95714241956!2d83.2315686912134!3d17.821811845871746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39581b73ffffff%3A0xd04b9046faa4565f!2sANITS!5e0!3m2!1sen!2sin!4v1666723359521!5m2!1sen!2sin"
         width="600" height="1000" style="border:0;"
         allowfullscreen="" loading="lazy" 
         referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>
    </div>
</div>    
</div>
</section>
<footer class="p-5 bg-dark text-center position-relative text-danger">
    <div class="container">
        <p class="">Copyright &copy; 2022 RedCrewTeam</p>
<a href="#" class="position-absolute bottom-0 end-0 text-danger p-5">
    <i class="bi bi-arrow-up-circle h1"></i></a>
    </div>
    

</footer>
<!--join here-->
<div class="modal fade" id="Details" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 " id="exampleModalLabel"><img src="navlogo.png" class="img-fluid "></img></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="lead">Fill out the form and get more information from us

          </p>
          <form>
          <div class="mb-3">
          <label for="firstname" class="col-form-label">First Name</label>
          <input type="text" class="form-control" id="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="col-form-label">Last Name</label>
            <input type="text" class="form-control" id="lastname">
          </div>
          <div class="mb-3">
            <label for="email" class="col-form-label">E-mail</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="mb-3">
            <label for="phone" class="col-form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone">
          </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
