<?php

      require_once "connect.php";
      if(isset($_POST['submit']))
      {
        session_start();
      $firstname= $_POST["first_name"];
      $lastname=$_POST["last_name"];
    //   $username=$_POST["user_name"];
      $Email=$_POST["email"];
      $address=$_POST["address"];
      $phonenumber=$_POST["phone_number"];
      $email=$_POST["email"];
      $address=$_POST["address"];
    //   $password=$_POST["password"];
    //  $confirmpassword=$_POST["confirm_password"];
      $bloodgroup=$_POST["blood_group"];
      $state=$_POST["state"];
      $country=$_POST["country"];
      $pincode=$_POST["pincode"];
    $gender = $_POST["gender"];
      if(isset($_FILES["pp"]["name"]) AND !empty($_FILES['pp']['name'])) {
        
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
                              $statement="UPDATE `loginform` SET `first_name`='$firstname',
                              `lastname`='$lastname',
                              `Email`='$email',`address`='$address',`phone_number`='$phonenumber',`blood_group`='$bloodgroup',
                              `state`='$state',`country`='$country',`pincode`='$pincode',`gender`='$gender',`pp`='$new_img_name';";
                             
                             
                               if($pdo->query($statement)==True) {
                  
                                      header("Location:profilepage.php");      
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