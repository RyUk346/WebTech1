<nav>
<?php
if (isset($_SESSION['uname'])) {
    echo '<span>Logged in as '.$_SESSION['uname'] .'</span> | ';
    echo '<a href="../view/logout.php">Logout</a>';
} 
else {
    echo '
  <a href>Home</a>  |
  <a href="../view/Login.php">Login</a> |
  <a href="../view/Registration.php">Registration</a>
</nav>';
}


