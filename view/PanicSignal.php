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
    <title>Panic Signal</title>
    <h3 align="">If you are in danger, click the panicked button</h3><br />
</head>
<body onload = "getLocation();">
 
    
     <form class= "myForm" method="post" action="../controller/PanicSignalAction.php" autocomplete="off"> 

      <label for = "category">Check the button if you are panicked:</label><br>
      <input type="radio" id="category" name="category"   value="Panicked"> Panicked
      <br>
      <?php echo isset($_SESSION['panic_err_msg']) ? $_SESSION['panic_err_msg'] : ""; ?><br><br>

      <label for="volunteer">Do you need immidiate local volunteer?</label>
      <br>
      <input type="radio" id="volunteer" name="volunteer"   value="Yes"> Yes
      <br>
      <input type="radio" id="volunteer" name="volunteer"   value="No"> No
      <br>
      <?php echo isset($_SESSION['local_err_msg']) ? $_SESSION['local_err_msg'] : ""; ?>
      <br><br>


       <input type="hidden" name="latitude" id="latitude" value="">
       <input type="hidden" name="longitude" id="longitude" value="">



    <br><br>

    <button type="submit" name="submit">Submit</button><br>

     


</form>
<script type="text/javascript">
 function getLocation(){
  if(navigator.geolocation){
    navigator.geolocation.getCurrentPosition(showPosition, showError);
  }
 }
 function showPosition(position){
  document.querySelector('.myForm input[name= "latitude"]').value = position.coords.latitude;
   document.querySelector('.myForm input[name= "longitude"]').value = position.coords.longitude;
 }
 function showError(error){
    switch(error.code){
    case error.PERMISSION_DENIED:
      alert("You must Allow the request for geolocation to fill out the form");
      location.reload();
      break;
    }


 }

</script>
<br>
<a href="PanSigMap.php">Database Page</a>

</body>
<?php include '../templates/footer.php';?>
</html>
