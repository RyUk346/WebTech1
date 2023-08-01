<?php 
session_start();
include '../templates/head.php';
include '../templates/sidenav.php';
include '../templates/nav2.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
    <title>Suspect Registry</title>
    
    <h5 align="">If you think someone is a potential criminal, help us to provide the details that you know about the person. </h5>
    <br />
</head>
<body>
 
    
     <form class= "myForm" method="post" action="../controller/SuspectRegistryAction.php" autocomplete="off"> 


      <label for="suspectname ">If you know suspect's name, write it, otherwise leave it.</label>
      <br>
      <input type="text" name="suspectname" id="suspectname">
      <br><br>

      <label for="crimetype ">Please tell us about the crime type. One word is enough. If you think it needs explanation, feel free to write about it.</label>
      <br>
      <input type="text" name="crimetype" id="crimetype">
      <?php echo isset($_SESSION['crimet_err_msg']) ? $_SESSION['crimet_err_msg'] : "" ?><br><br>

      <label for="age ">Please give a probable age of the suspect.</label>
      <br>
      <input type="number" name="age" id="age" value="age">
      
      <?php echo isset($_SESSION['age_err_msg']) ? $_SESSION['age_err_msg'] : "" ?><br><br>

      <label for="numberr">If you feel safe to talk with our representative, give your contact number, otherwise ignore it.</label>
      <br>
      <input type="tel" id="numberr" name="numberr" placeholder="+88-01303-961530" pattern="+[0-9]{3}[0-9]{5}[0-9]{6}" required><br><br>
    
      

      <label for="adderss">Please give suspect's address, if you know.</label>
      <br>
      <input type="text" name="address" id="address" value="">
      <?php echo isset($_SESSION['location_err_msg']) ? $_SESSION['location_err_msg'] : "" ?>
    


    <br><br>

    <button type="submit" name="submit">Submit</button><br>

     


</form>

</body>
<?php include '../templates/footer.php';?>
</html>
