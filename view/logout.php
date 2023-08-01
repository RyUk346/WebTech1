<?php

session_start();

if (isset($_SESSION['uname'])) {
    session_destroy();
    header("Location: Login.php");

}

else{
    header("Location: Login.php");
}

?>