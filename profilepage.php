<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

$usname = $_SESSION['username'];
require_once("connect.php");



$sql = "SELECT * FROM `loginform` WHERE username='$usname'";
$smt = $pdo->query($sql);

// $_SESSION['userid']=$phone;
$res = $smt->fetch(PDO::FETCH_ASSOC);

if (count($res) > 0) {
    $fname = $res['first_name'];
    $lname = $res['lastname'];
    $gender = $res['gender'];
    $ph = $res['phone_number'];
    $email = $res['Email'];
    $address = $res['address'];
    $bloodgroup = $res['blood_group'];
    $state = $res['state'];
    $country = $res['country'];
    $pincode = $res['pincode'];
}






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    ` <title>profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,500&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<style>
    body {}

    .img-account-profile {
        height: 10rem;
    }

    .rounded-circle {
        border-radius: 100% !important;
    }

    .card {
        box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
    }

    .card .card-header {
        font-weight: 500;
    }

    .card-header:first-child {
        border-radius: 0.35rem 0.35rem 0 0;
    }

    .card-header {
        padding: 1rem 1.35rem;
        margin-bottom: 0;
        background-color: rgba(33, 40, 50, 0.03);
        border-bottom: 1px solid rgba(33, 40, 50, 0.125);
    }

    .form-control,
    .dataTable-input {
        display: block;
        width: 100%;
        padding: 0.875rem 1.125rem;
        font-size: 0.875rem;
        font-weight: 400;
        line-height: 1;
        color: #84b7ff;
        background-color: rgb(255, 255, 255);
        background-clip: padding-box;
        border: 1px solid #c5ccd6;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.35rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
</style>
<body>

<script>
        function edit()
        {
            var e = document.getElementsByClassName('editp')[0];
            e.hidden = false;
            var f = document.getElementsByClassName('viewp')[0];
            f.hidden = true;
           
        }
        
         function save()
        {
            var e = document.getElementsByClassName('editp')[0];
            e.hidden = true;
            var f = document.getElementsByClassName('viewp')[0];
            f.hidden = false;
        }
    
    </script>
    <div>

        <nav class="navbar navbar-expand-lg bg-light navbar-light fixed-top">
            <div class="container-fluid">
                <a href="#" class="navbar-brand ">
                    <img src="logo.png" widht="100" height="50"></a>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active">MY PROFILE</a>
                    </li>
                </ul>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <div class=editp hidden >
                <form method="POST" action="update.php" enctype="multipart/form-data">
            <div class="row">
                
                <div class="col-xl-3">
                    <div class="card mb-3 mb-xl-0">
                        <div class="card-header text-danger">Profile Picture</div>
                        <div class="card-body text-center">
                            
                            <img class="img-fluid rounded-circle mb-1"
                                src="image_uploads/<?php echo $_SESSION['image']; ?>" alt="">
                           <br>
                            <br>
                            <div class="mb-3">
  <label for="formFile" class="form-label"><span><h6>Profile picture</h6></span></label>
  <input class="form-control" type="file" id="formFile" name="pp">
</div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card mb-4">
                        <div class="card-header text-danger"> Users's Details</div>
                        <div class="card-body p-5">
                                <div class="mb-3">
                                <label class="small mb-2" for="inputUsername">USERNAME : &nbsp;&nbsp;<label
                                            style="font-family:'Montserrat', sans-serif;">
                                            <?php echo "$usname"; ?>
                                        </label>
                                        <p style="color:red">username cannot be modified
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-2" for="inputFirstName">FIRST NAME :

                                            </label>
                                            <input class="form-control" name="first_name" style="color:gray;"type="text" value="<?php echo "$fname";?>" >
                                    </div>
                            
                
                                    <div class="col-md-6">
                                        <label class="small mb-2" for="inputLastName">LAST NAME : 

                                            </label>
                                            <input class="form-control" name="last_name"style="color:gray;"type="text" value="<?php echo "$lname";?>">
                                    </div>
                                </div>


                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-2" for="inputEmailAddress">EMAIL ADDRESS :
                                            </label>
                                            <input class="form-control"name="email" type="email"style="color:gray;"type="text" value="<?php echo "$email";?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="small mb-2" for="inputgender">GENDER :
                                            </label>
                                            <input class="form-control"name="gender" type="tel"
                                            style="color:gray;"type="text" value="<?php echo "$gender";?>">
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-2" for="inputgroup">BLOOD GROUP :
                                            </label>

                                            <input class="form-control" name="blood_group" type="text"
                                            style="color:gray;"type="text" value="<?php echo "$bloodgroup";?>">
                                    </div>
                              
                                    <div class="col-md-6">
                                        <label class="small mb-2" for="inputgroup">PHONE NUMBER :
                                            </label>
                                            <input class="form-control" name="phone_number" type="text"
                                            style="color:gray;"type="text" value="<?php echo "$ph";?>">
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-2" for="inputgroup">ADDRESS :
                                            </label>
                                            <input class="form-control"  type="text" name="address"
                                            style="color:gray;"type="text" value="<?php echo "$address";?>">
                                        </div>
                                    <div class="col-md-6">
                                        <label class="small mb-2" for="inputgroup">STATE :
                                            </label>
                                            <input class="form-control"  type="text" name="state"
                                            style="color:gray;"type="text" value="<?php echo "$state";?>">
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">

                                    <div class="col-md-6">
                                        <label class="small mb-2" for="inputLocation">COUNTRY :
                                            </label>
                                            <input class="form-control" name="country" type="text"
                                            style="color:gray;"type="text" value="<?php echo "$country";?>">
                                    </div>
                                
                                    <div class="col-md-6">
                                        <label class="small mb-2" for="inputLocation">PINCODE :
                                            </label>
                                            <input class="form-control" name="pincode"type="text"
                                            style="color:gray;"type="text" value="<?php echo "$pincode";?>">
                                    </div>

                                </div>


                        </div>
                        <button class="btn btn-outline-danger ms-5 me-5 mb-5" type="submit" name="submit">Save changes</button>
                    </div>


                </div>
            </div>
                                        </form>
        </div>
        
        <div class="viewp" >
            <div class="row">
                
                <div class="col-xl-3">
                    <div class="card mb-3 mb-xl-0">
                        <div class="card-header text-danger">Profile Picture</div>
                        <div class="card-body text-center">
                            <img class="img-fluid rounded-circle mb-1"
                                src="image_uploads/<?php echo $_SESSION['image']; ?>" alt="">
                            <div><b>
                                    <?php echo $_SESSION["username"]; ?>
                                </b></div>
                            <br>
                            <!-- <div class="container-fluid">
                                <input class="profile" type="file" name="uploadfile">
                            </div> -->
                            <button class="btn btn-danger" type="button" onclick="edit()">EDIT PROFILE</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card mb-4">
                        <div class="card-header text-danger"> Users's Details</div>
                        <div class="card-body p-5">
                                <div class="mb-3">
                                    <label class="small mb-2" for="inputUsername">USERNAME : &nbsp;&nbsp;<label
                                            style="font-family:'Montserrat', sans-serif;">
                                            <?php echo "$usname"; ?>
                                        </label>

                                        <!-- <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username"> -->
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-2" for="inputFirstName">FIRST NAME : &nbsp;&nbsp;<label
                                                style="font-family:'Montserrat', sans-serif;">
                                                <?php echo "$fname"; ?>

                                            </label>
                                            <!-- <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name"> -->
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-2" for="inputLastName">LAST NAME : &nbsp;&nbsp;<label
                                                style="font-family:'Montserrat', sans-serif;">
                                                <?php echo "$lname"; ?>

                                            </label>
                                            <!-- <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name"> -->
                                    </div>
                                </div>


                                <div class="row gx-3 mb-3">
                                    <div class="col-md-12">
                                        <label class="small mb-2" for="inputEmailAddress">EMAIL ADDRESS :
                                            &nbsp;&nbsp;<label style="font-family:'Montserrat', sans-serif;">
                                                <?php echo "$email"; ?>
                                            </label>
                                            <!-- <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address"> -->
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-2" for="inputgender">GENDER :
                                            &nbsp;&nbsp;<label style="font-family:'Montserrat', sans-serif;">
                                                <?php echo "$gender"; ?>
                                            </label>
                                            <!-- <input class="form-control" id="inputgender" type="tel"
                                            placeholder="Enter your gender"> -->
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-2" for="inputgroup">BLOOD GROUP :
                                            &nbsp;&nbsp;<label style="font-family:'Montserrat', sans-serif;">
                                                <?php echo "$bloodgroup"; ?>
                                            </label>

                                            <!-- <input class="form-control" id="inputgroup" type="text" name="birthday"
                                                placeholder="Enter your blood group"> -->
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-2" for="inputgroup">PHONE NUMBER :
                                            &nbsp;&nbsp;<label style="font-family:'Montserrat', sans-serif;">
                                                <?php echo "$ph"; ?>
                                            </label>
                                            <!-- <input class="form-control" id="inputgroup" type="text" name="birthday"
                                                placeholder="Enter your number"> -->
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-2" for="inputgroup">ADDRESS :
                                            &nbsp;&nbsp;<label style="font-family:'Montserrat', sans-serif;">
                                                <?php echo "$address"; ?>
                                            </label>
                                            <!-- <input class="form-control" id="inputgroup" type="text" name="birthday"
                                                placeholder="Enter your address"> -->
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-2" for="inputgroup">STATE :
                                            &nbsp;&nbsp;<label style="font-family:'Montserrat', sans-serif;">
                                                <?php echo "$state"; ?>
                                            </label>
                                            <!-- <input class="form-control" id="inputgroup" type="text" name="birthday"
                                                placeholder="Enter your state"> -->
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">

                                    <div class="col-md-6">
                                        <label class="small mb-2" for="inputLocation">COUNTRY :
                                            &nbsp;&nbsp;<label style="font-family:'Montserrat', sans-serif;">
                                                <?php echo "$country"; ?>
                                            </label>
                                            <!-- <input class="form-control" id="inputLocation" type="text"
                                                placeholder="Enter your country"> -->
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-2" for="inputLocation">PINCODE :
                                            &nbsp;&nbsp;<label style="font-family:'Montserrat', sans-serif;">
                                                <?php echo "$pincode"; ?>
                                            </label>
                                            <!-- <input class="form-control" id="inputLocation" type="text"
                                                placeholder="Enter your pincode"> -->
                                    </div>

                                </div>


                        <!-- </div>
                        <button class="btn btn-outline-danger ms-5 me-5 mb-5" type="button">Save changes</button>
                    </div> -->


                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>


</body>