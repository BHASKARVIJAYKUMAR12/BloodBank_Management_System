<!DOCTYPE html>

<html lang="en" dir="ltr">
    <head>
            <meta charset="UTF-8">
            <title>Registration Form</title>
                   <link rel="stylesheet" href="hospital_bloodbank_register.css">
                         <meta name="viewport" content="width=device-width, initial-scale=1.0">
                         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">  
    </head>
<body>
<?php
$host="localhost";
$user="root";
$password="";
$db="redcrew";
$conn=mysqli_connect($host,$user,$password,$db);
if(isset($_POST['Register']))
{
      $username=$_POST["username"];
      $address=$_POST["address"];
      $phonenumber=$_POST["phonenumber"];
      $email=$_POST["email"];
      $address=$_POST["address"];
      $password=$_POST["password"];
    //  $confirmpassword=$_POST["confirm_password"];
      $state=$_POST["state"];
      $country=$_POST["country"];
      $pincode=$_POST["pincode"];
      $user_type=$_POST['user_type'];
          $statement="INSERT INTO `loginform`(  `username`, `password`, `Email`, `address`,
           `phone_number`, `state`, `county`, `pincode`, `user_type`) VALUES 
          ('$username',
          '$password','$email','$address',$phonenumber,
          '$state',
            '$country',
            '$pincode',
            '$user_type')";
            if($conn->query($statement)==True)
            {      
                  
                  header("Location:login.php");      
            } 

            }?>
        <section id="community" class="p-5">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md p-5 ">
                                <img src="logo.png" class="img-fluid "></img>
                                <p class="w-100 d-none d-sm-block" style="text-align:justify;">
                                One donation can save multiple lives. Here are the facts:
Just 1 donation can save up to 3 lives.
The average red blood cell transfusion is 3 pints (or 3 whole-blood donations).
More than 1 million people every year are diagnosed with cancer for the first time. Many of them will need blood—sometimes daily—during chemotherapy.
More than 38,000 blood donations are needed every day.</p>
                          <p class="w-100 d-none d-sm-block" style="color:red;text-align:center;"><b>Donate with the help of our community</b></p>
                            </div>
                <div class="col-md p-4">
                        <center><div class="title">Registration </div></center>
                        
                        <div class="content">
                             <form method="POST">
                                   <div class="user-details"> 
                                       <div class="input-box">
                                            <span class="details">Hospital/Bloodbank Name</span>
                                            <input type="text" placeholder="Enter Organization Name" name="username"required>
                                       </div>
                                       <div class="input-box">
                                            <span class="details">Email</span>
                                            <input type="text" placeholder="Enter Organization Email" name="email" required>
                                       </div>
                                       <div class="input-box">
                                        <span class="details">Address </span>
                                        <input type="text" name="address"placeholder="Enter Address" required>
                                  </div>
                                       <div class="input-box">
                                             <span class="details">Phone Number</span>
                                             <input type="text" placeholder="Enter  Phone number" name="phonenumber"required>
                                       </div>
                                       <div class="input-box">
                                             <span class="details">Password</span>
                                             <input type="text" placeholder="Enter password" name="password" required>
                                       </div>
                                       <div class="input-box">
                                             <span class="details">Confirm Password</span>
                                             <input type="text" placeholder="Confirm password"name="confirm password"required>
                                       </div>
                                       

                                       <div class="input-box">
                                            <span class="details">state</span>
                                            <input type="text" placeholder="Enter state"name="state" required>
                                       </div>
                                       <div class="input-box">
                                            <span class="details">country</span>
                                            <input type="text" placeholder="Enter country" name="country" required>
                                       </div>
                                       <div class="input-box">
                                             <span class="details">pincode</span>
                                             <input type="text" placeholder="Enter  pincode" name="pincode" required>
                                       </div>
                                       <div class="input-box">
                                          <span class="details">Organization type</span>
                                          <select class="form-control text-secondary" name ="user_type" required>
                                                <option selected disabled>select</option>
                                                <option  value="Hospital">Hospital</option>
                                                <option  value="Blood bank">Blood bank</option>
                                                
                                              </select>

                                    </div>  
                                    
                                       
                                   </div>

                                   
                                   <div class="button">
                                           <input type="submit" name="Register" name="submit">
                                   </div>
                             </form>
                       </div>
                   </div> 
                    
                

                </div>
        </div>
        
</body>
</html>