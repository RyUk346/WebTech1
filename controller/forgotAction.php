<?php
require_once '../model/model.php';
require_once '../model/getUser.php';
session_start();

include '../templates/nav.php';
// define variables and set to empty values
$userErr = $passErr = "";
$username = $password = ""; 
$errCount = 0;

$email = "";
$emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (empty($_POST["email"])) {
        $emailErr = "Email is required for this action!";
        $errCount = $errCount + 1;
    } else {
        $email = check_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $email="";
            $errCount = $errCount + 1;
        }
    }

    if ($errCount < 1){
         $user_found = false;
         $userRes = getUserEmail($email);
            if ($userRes) {
                $user_found = true;
                
                // match. now check pw
                
                    echo "<br><div style='color: green; text-align: center'>You are  </br></div>".$userRes['name'];
                    echo "<div style='color: green; text-align: center'> Your Password is  </br></div>".$userRes['password'];
                
            }
            if (!$user_found){
            echo $userErr .= "No account found!";
        }
        }
        

    }



  function check_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>