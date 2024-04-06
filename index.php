<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Main page</title>
    <link rel="stylesheet" href="mainpage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">  
</head>
  <body>
    <script src="https://kit.fontawesome.com/b2323bfd9a.js" crossorigin="anonymous"></script>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-light  fixed-top">
        <div class="container-fluid">
    <a href="#" class="navbar-brand ">
    <img src="logo.png" widht="100" height="50"></a>
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
                <li class="nav-item">
                    <a href="login.php" class="nav-link"> Login / Signup</a>
                </li>
            </ul>
           
        </div></div></nav>
   <!--slider-->
   
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src=" save lives (1).png"  class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src=" 6d09213b57104123a2aeab2d29ce3f58-0001.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-light">

      </div>
    </div>
    <div class="carousel-item">
      <img src="c64f6e398bdb43d296e1b7ec57d3d5ab-0001.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>  
   <!--slider-->
    <!--showcase-->
    <section class="bg-white text-dark p-5 m-5 text-center text-sm-start">
    <div class="container-fluid">
        <div class="d-sm-flex justify-content-between align-items-center
        ">
        <img src="1.jpg" class="img-fluid w-50 me-5 d-none d-sm-block "></img>
    <div>
        
       <h1 style="color:crimson">Blood Donation</h1>
       <p style="text-align:justify;"> Blood is the most precious gift that anyone 
        can give to another person - 
        the gift of life. 
        A decision to donate your blood can save a life,
         or even several if your blood is separated into its components -
         categories red cells, platelets and plasma - 
          which can be used individually for patients with specific conditions.
          <br>For more information about the importance of blood and 
          blood donation through newsletters, Mails
        </p>
    <button class="btn btn-primary btn-lg btn-danger"
    data-bs-toggle="modal"
    data-bs-target="#Details">
        Join here for Daily Info
    </button>
    </div>
</div></div>
</section>

<!--community-->
<section id="community" class="p-5">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-between">
    <div class="col-md p-4">
      <h2 style="color:crimson;" class="text-center mb-4">About our community</h2>
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
   <div class="container=fluid">
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
<div class="container-fluid">
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
