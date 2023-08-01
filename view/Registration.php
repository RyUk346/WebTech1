<?php

session_start();
include '../templates/head.php';
include '../templates/nav.php';
// define variables and set to empty values
$nameErr = $emailErr = $degreeErr = $genderErr = $userErr = $passErr = $confrmPassErr = $dobErr = "";
$name = $email = $gender = $username = $password = $cnfrmPass = "";
$dob = $successmsg = "";
$dobdd = $dobmm = $dobyy = "";
$errCount = 0;
$message = '';
$error = '';
?>
 




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <h3 align="">Register a New Account</h3><br />
    <script src="js/registration.js"></script>

<style>

        .make-it-center{
            margin: auto;
            width: 50%;
        }

        body{
            background: #eeeaea;
            margin: auto;
            width: 50%;
            border: 1px solid #3e3c3c;
            padding: 20px;

        }

        .lefterr{
            margin-left: -10%;
        }

        .required:after {
            content:"*";
            color: red;
        }
        .error{
            color: red;
        }

        /* The sidebar menu */
        .sidenav {
            height: 100%; /* Full-height: remove this if you want "auto" height */
            width: 220px; /* Set the width of the sidebar */
            position: fixed; /* Fixed Sidebar (stay in place on scroll) */
            z-index: 1; /* Stay on top */
            top: 0; /* Stay at the top */
            left: 0;
            background-color: #111; /* Black */
            overflow-x: hidden; /* Disable horizontal scroll */
            padding-top: 20px;
        }

        /* The navigation menu links */
        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
        }

        /* When you mouse over the navigation links, change their color */
        .sidenav a:hover {
            color: #f1f1f1;
        }

    </style>

</head>
<body>    
    <div class="donor-info make-it-center">
    
    <form method="post" action="../controller/RegistrationAction.php" onsubmit="return isValidreg(this); "enctype="multipart/form-data" novalidate> 

        <br>
        Name:<input type="text" name="name" placeholder=" At least two word" value="<?php echo $name;?>"> <br>

        <?php echo isset($_SESSION['name_err_msg']) ? $_SESSION['name_err_msg'] : "" ?>

        <span id="name_msg" style="color:red"></span>

        <br><br>

        E-mail: <input type="text" name = "email" placeholder="example@gmail.com" value="<?php echo $email;?>" ><br>

        <?php echo isset($_SESSION['email_err_msg']) ? $_SESSION['email_err_msg'] : "" ?>
        <span id="email_msg" style="color:red"></span>

        <br><br>

        User Name:<input type="text" name = "username" placeholder="specialchars not allowed" value="<?php echo $username;?>"><br>

        <?php echo isset($_SESSION['username_err_msg']) ? $_SESSION['username_err_msg'] : "" ?>

        <span id="username_msg" style="color:red"></span>

        <br><br>

        Password:<input type="password" name = "password" placeholder="min8UpLowNumSpChar"><br>

        <?php echo isset($_SESSION['password_err_msg']) ? $_SESSION['password_err_msg'] : "" ?>

        <span id="password_msg" style="color:red"></span>

        <br><br>

        Confirm Password:<input type="password" name = "cnfrmPass" placeholder="min8UpLowNumSpChar"><br>

        <?php echo isset($_SESSION['cnfrmPass_err_msg']) ? $_SESSION['cnfrmPass_err_msg'] : "" ?>

        <span id="cnfrmPass_msg" style="color:red"></span>

        <br><br>

        <fieldset>
            Gender:<input type="radio" id="male" name="gender" value="male" <?php if ($gender === 'male'){ echo 'checked';}?> >
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female" <?php if ($gender === 'female'){ echo 'checked';}?> >
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="other" <?php if ($gender === 'other'){ echo 'checked';}?> >
            <label for="other">Other</label><br>

            <?php echo isset($_SESSION['gender_err_msg']) ? $_SESSION['gender_err_msg'] : "" ?>

            <span id="gender_msg" style="color:red"></span>


            Date of Birth:<input type="date" name="dob" value="<?php echo $dob;?>">
             <br><br>
        </fieldset>
        <?php echo isset($_SESSION['dob_err_msg']) ? $_SESSION['dob_err_msg'] : "" ?>

        <span id="dob_msg" style="color:red"></span>

        <style>
            .button {
              background-color: #FFFFFF; 
              border: none;
              color: white;
              padding: 16px 32px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 1600px;
              margin: 4px 2px;
              transition-duration: 0.4s;
              cursor: pointer;
            }

            .button1 {
              background-color: #3399FF; 
              color: black; 
              border: 12px solid #3399FF;
            }

            .button1:hover {
              background-color: #0080FF; 
              color: black; 
              border: 12.5px solid #0080FF;
            }




</style>

        <input type="submit" name="submit" class="button1" value="Register"><br>
     

    </form>

</body>
<?php include '../templates/footer.php';?>
</html>
