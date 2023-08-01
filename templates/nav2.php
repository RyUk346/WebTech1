<nav>
<?php
if (isset($_SESSION['uname'])) {

    echo '<span><a href="../view/GeneralDiary.php">General Diary</a> | </span>';
    echo '<span><a href="../view/EmergencyCoronaService.php">Emergency Corona Service</a> | </span>';
    echo '<span><a href="../view/PanicSignal.php">Panic Signal</a> | </span>';
    echo '<span><a href="../view/SuspectRegistry.php">Suspect Registry</a> |</span> ';
    echo ' <span><a href="../view/RescueService.php">Rescue Service</a> | </span>';
    echo '<span><a href="../view/ServiceStatus.php">Service Status</a></span>';
   
    } 
    else {
    echo '
    
        <a href= "../view/logout.php">Logout</a>
 
</nav>';
}
?>
