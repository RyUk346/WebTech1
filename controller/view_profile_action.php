<!DOCTYPE html>
<html>
<head>
    <title>View Profile</title>
</head>
<body>

<?php
include '../templates/head.php';
session_start();
include '../templates/nav.php';
include '../templates/sidenav.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>View Profile</title>
</head>
<body>

<?php
// define variables and set to empty values
$userErr = $passErr = "";
$username = $password = "";
$errCount = 0;

if (isset($_SESSION['uname'])) {

    echo "<h1> Welcome ".$_SESSION['uname']."</h1>";
    echo '
    <fieldset>
    <legend> <b>Profile:</b></legend>
    
    ';


    require_once '../model/getUser.php';
    $item = getUserAccount($_SESSION['uname']);

    //var_dump($item);
    if ($_SESSION['uname'] === $item['username']){
        // match. now check pw
        if (isset($item['ppic_abs_path'])) {
            echo '<img src="' . $item['ppic_abs_path'] . '"width="150" height="150"> <br><a href="../view/profile_picture.php">Change</a> <br>';
        }else{
            echo '<img src="#" width="150" height="150"> <br><a href="../view/profile_picture.php">Change</a> <br>';

        }
        echo '<br><div> Name: '. $item['name'] . '</div> <br>';
        echo '<div> Email: '. $item['email'] . '</div> <br>';
        echo '<div> Gender: '. $item['gender'] . '</div> <br>';
        echo '<div> Date of Birth: '. $item['dob'] . '</div> <br>';
        //echo '<div> Account Type: '. $item['acc_group'] . '</div> <br>';
    }

    echo '<b><a href="../view/edit_profile.php"> Edit Profile ' . '</a></b> <br><br>';
    echo '</fieldset>';

} else{
    header('Location: ../view/Login.php');
}

?>

<br>
<br>
</body>
<?php include '../templates/footer.php';?>
</html>