<?php
require_once "connect.php";
session_start();
// unset($_SESSION["error"]);
if(isset($_POST['submit']) && isset($_POST['username1']) && isset($_POST['password1']))
{

$uname=$_POST['username1'];
$password=$_POST['password1'];
$sql="SELECT * from loginform where username='$uname' and password='$password'";
//echo $sql;
if($result=$pdo->query($sql))
{
if(($row=$result->fetch(PDO::FETCH_ASSOC))>0)
  {
$_SESSION['username']=$row['username'];
$_SESSION['image'] = $row['pp'];
if(($row['user_type'])=='Hospital' or ($row['user_type'])=='Blood bank')
{

header("Location:hospital.html");
}
else if(($row['user_type'])=='user' )
{
  header("Location:user_login.php");
  //exit();
}}
else
{
 $_SESSION["error"]="***invalid data***";
}}
}
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
    <head>
            <meta charset="UTF-8">
            <title>LoginForm</title>
                   <link rel="stylesheet" href="login.css">
                         <meta name="viewport" content="width=device-width, initial-scale=1.0">
                         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">  
    </head>
<body>


<section id="community" class="p-5">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                      <center>
                    <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span style='color:red;font-family:lucida;font-size:20px'>$error</span>";
                    }
                ?>  </center>
 <div class="col-md p-5 ">
        <center>
        <img src="logo.png" width=200px>
       
        <div class="title">Sign in</div></center>
        
             <div class="content">

              <!-- <p><
                ?php echo $_SESSION["error"]; ?></p> -->
                  <form method="POST">
                        <div class="user-details">
                       
                        
                            
                            <div class="input-box">
                                 <span class="details">UserName</span>
                                 <input type="text" name="username1" placeholder="Enter your Username "required>
                            </div>
                            
                            <div class="input-box">
                                  <span class="details">Password</span>
                                  <input type="password" name="password1" placeholder="Enter your password" required>
                            </div>
                            
                        </div>
                        
                      <center>
                        <div class="button">
                                <input type="submit" name="submit" value="Login">
                        </div>
                        
                        <a href="forgetpassword.html" style="text-decoration: none;"><p style="color: red;">Forgot password?</p></a></center>
                        </form></div>
                    </div>
                        
<div class="col-md p-3 ">
<div id="carouselExampleControls" class="carousel slide  me-5 d-none d-sm-block" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1.jpg" class="d-block w-100 active" alt="..."   >
    </div>
    <div class="carousel-item">
      <img src="logo1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/slider/slider3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<center>
  <br>
    <p style="font-size: medium;">New to Red Crew ?</p>
    <a href="register.php" ><button type="button" class="btn btn-outline-danger mb-3">sign up as user</button></a>
    <p style="font-size: medium;">For hospitals /blood banks </p>
    
    <a href="hospital_bloodbank_register.php"><button type="button" class="btn btn-outline-danger">sign up as organization</button>  </div></div></div> 
</center>
<br>
</section>


</body>
</html>
<?php
    unset($_SESSION["error"]);
?>