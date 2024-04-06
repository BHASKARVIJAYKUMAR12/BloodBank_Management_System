<!DOCTYPE html>

<html lang="en" dir="ltr">
    <head>
            <meta charset="UTF-8">
            <title>Registration Form</title>
                   <link rel="stylesheet" href="register.css">
                         <meta name="viewport" content="width=device-width, initial-scale=1.0">
                         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">  
    </head>
<body>
      <!--php code-->
      <?php
      require_once "connect.php";
      if(isset($_POST['register']))
      {
      $firstname= $_POST["first_name"];
      $lastname=$_POST["last_name"];
      $username=$_POST["user_name"];
      $Email=$_POST["email"];
      $address=$_POST["address"];
      $phonenumber=$_POST["phone_number"];
      $email=$_POST["email"];
      $address=$_POST["address"];
      $password=$_POST["password"];
    //  $confirmpassword=$_POST["confirm_password"];
      $bloodgroup=$_POST["blood_group"];
      $state=$_POST["state"];
      $country=$_POST["country"];
      $pincode=$_POST["pincode"];
      $gender=$_POST["gender"];
      if(isset($_FILES["pp"]["name"]) AND !empty($_FILES['pp']['name']))
      {
            // print_r($_FILES["pp"]);
            $img_name=$_FILES["pp"]["name"]; 
            // $img_size=$_FILES["pp"]["size"];
            $tmp_name=$_FILES["pp"]["tmp_name"];
            $error=$_FILES["pp"]["error"];
            if($error==0)
            {
               $img_ext=pathinfo($img_name,PATHINFO_EXTENSION);
                        $img_ext_lc = strtolower($img_ext);
                        $allowed_ex = array("jpg", "jpeg", "png");
                        if(in_array($img_ext_lc,$allowed_ex))
                        {
                              $new_img_name = uniqid($username, true).'.'.$img_ext_lc;
                              $img_uploadpath = 'C:/xampp/htdocs/labexperiments/image_uploads/' . $new_img_name;
                              move_uploaded_file($tmp_name, $img_uploadpath);

                              //insert into database
                              $statement="INSERT INTO `loginform`( `first_name`, `lastname`, `username`, `password`, `Email`, `address`,
                              `phone_number`, `blood_group`, `state`, `country`, `pincode`, `gender`,`pp`) VALUES 
                             ('$firstname','$lastname','$username',
                             '$password','$email','$address',$phonenumber,'$bloodgroup','$state','$country','$pincode','$gender','$new_img_name')";
            
                               if($pdo->query($statement)==True)
                               {
                                      header("Location:login.php");      
                               } 
                   

                        }
                        else
                        {
                              
                        }
               
            }
            else{

            }
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
                  
                        <div class="title">Registration</div>
                        <div class="content">
                             <form method="POST" enctype="multipart/form-data">
                                   <div class="user-details">
                                        <div class="input-box">
                                             <span class="details">First Name</span>
                                             <input type="text" name="first_name" placeholder="Enter your first name" required>
                                       </div>
                                       <div class="input-box">
                                             <span class="details">Last name</span>
                                             <input type="text" name="last_name" placeholder="Enter your last name" required>
                                       </div> 
                                       <div class="input-box">
                                            <span class="details">Username</span>
                                            <input type="text" name="user_name" placeholder="Enter your user name" required>
                                       </div>
                                       <div class="input-box">
                                            <span class="details">Email</span>
                                            <input type="text" name="email" placeholder="Enter your email" required>
                                       </div>
                                       <div class="input-box">
                                        <span class="details">Address </span>
                                        <input type="text" name="address" placeholder="Enter your address " required>
                                  </div>
                                       <div class="input-box">
                                             <span class="details">Phone Number</span>
                                             <input type="text" name="phone_number"placeholder="Enter your mobile number" required>
                                       </div>
                                       <div class="input-box">
                                             <span class="details">Password</span>
                                             <input type="text" name="password" placeholder="Enter your password" required>
                                       </div>
                                       <div class="input-box">
                                             <span class="details">Confirm Password</span>
                                             <input type="text" name="confirm_password" placeholder="Confirm your password" required>
                                       </div>
                                       
                                       <div class="input-box">
                                             <span class="details">Blood Group</span>
                                             <input type="text" name="blood_group" placeholder="Enter your Blood Group" required>
                                       </div>
                                       <div class="input-box">
                                            <span class="details">state</span>
                                            <input type="text" name="state" placeholder="Enter state" required>
                                       </div>
                                       <div class="input-box">
                                            <span class="details">country</span>
                                            <input type="text" name="country" placeholder="Enter your country" required>
                                       </div>
                                       <div class="input-box">
                                             <span class="details">pincode</span>
                                             <input type="text" name="pincode" placeholder="Enter your valid pincode" required>
                                       </div>
                                   </div>
                                   <div class="gender-details">
                                           <input type="radio" name="gender" value="Male" id="dot-1">
                                           <input type="radio" name="gender" value="Female"id="dot-2">
                                           <input type="radio" name="gender"  value="unknown" id="dot-3">
                                                   <span class="gender-title">Gender</span>
                                                           <div class="category">
                                                                   <label for="dot-1">
                                                                       <span class="dot one"></span>
                                                                       <span class="gender" >Male</span>
                                                                   </label>
                                                                   <label for="dot-2">
                                                                        <span class="dot two"></span>
                                                                        <span class="gender" >Female</span>
                                                                   </label>
                                                                   <label for="dot-3">
                                                                       <span class="dot three"></span>
                                                                       <span class="gender">Prefer not to say</span>
                                                                   </label>
                                                           </div>
                                   </div>
                                   <br>
                                   <div class="mb-3">
  <label for="formFile" class="form-label"><span><h6>Profile picture</h6></span></label>
  <input class="form-control" type="file" id="formFile" name="pp">
</div>
                                   <div class="button">
                                           <input type="submit" value="Register" name="register">
                                   </div>
                             </form>
                       </div>
                   </div> 
                    
                

                </div>
        </div>
        
</body>
</html>