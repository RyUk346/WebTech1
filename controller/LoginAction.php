<?php include '../templates/nav.php';?>

<?php
session_start();
// define variables and set to empty values
$userErr = $passErr = "";
$username = $password = "";
$errCount = 0;

if (isset($_SESSION['uname'])) {
    header('Location: ../view/dashboard.php');


} else{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $isValid = true;
    $username = check_input($_POST['username']);
    $password = check_input($_POST['password']);
   
    if (empty($_POST["username"])) {
        $userErr = "Username is required";
        $errCount = $errCount + 1;
        $_SESSION['username_err_msg'] = "User name can not be empty.";
        $isValid = false;
    } else {
        $username = check_input($_POST["username"]);

        if (strlen($username) <2 ) {
            // code...
            $userErr = "Minimum 2 characters required";
            $errCount = $errCount + 1;
        }elseif (!preg_match("/^[a-zA-Z_\-.]*$/", $username)) {
            $userErr = "Username can contain alpha numeric characters, period, dash or underscore only!";
            $username ="";
            $errCount = $errCount + 1;
        } else{
            if (isset($_POST['rmbm'])) {
                $time = time();
                setcookie('username', $username, $time + 120);
                setcookie('password', $password, $time + 120);
            }
        }

    }

    if (empty($_POST["password"])) {
        $passErr = "Password is required";
        $errCount = $errCount + 1;
        $_SESSION['pass_err_msg'] = "Password can not be empty.";
        $isValid = false;
    } else {
        $password = check_input($_POST["password"]);
    }

    if (strlen($password) <8 ) {
        // code...
        $passErr = "Minimum 8 characters required";
        $errCount = $errCount + 1;
    }

    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[%$#@]).+$/", $password)) {
        /*
        ^ starts the string
        (?=.*[a-z]) Atleast a lower case letter
        (?=.*[A-Z]) Atleast an upper case letter
        (?!.* ) no space
        (?=.*\d%$#@) Atleast a digit and atleast one of the specified characters.
        .{8,16} between 8 to 16 characters
        */
        $passErr .= " Password must contain atleast a digit, a lower case and an upper case letter, atleast one of the [%$#@] and no space.";
        $password ="";
        $errCount = $errCount + 1;
    }

    if ($errCount < 1){
        $time = time();
        if (isset($_POST['rmbm'])) {
            setcookie('username', $username, $time + 60);
            setcookie('password', $password, $time + 60);
        }

        require_once '../model/login.php';

            // db login goes here
            $dt = loginUser($username);
            if ($dt) {
                $user_found = true;
                if ($password === $dt['password']){
                    $_SESSION['uname'] = $username;
                    $_SESSION['ugroup'] = $dt['acc_group'];
                    echo "Thanks for logging in.";
                    header('Location: ../view/dashboard.php');
                } else{
                    $passErr .= "Password Wrong!";
                }
            } else{
                $user_found = false;
            }

            if (!$user_found){
                echo $userErr .= "No account found!";
            }

            //exit;
        }
        else{
            header("Location: ../view/Login.php");
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