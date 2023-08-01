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
    <title>Rescue Service</title>
    
    <h3 align="">If you need rescue service, fill up the form properly.</h3><br />
</head>
<body onload = "getLocation();">
 
    
      <form class= "myForm" method="post" action="../controller/RescueServiceAction.php" autocomplete="off">

      <label for="rescue">Which type of service do you need?</label>
      <br>
      <input type="radio" id="rescue" name="rescue"   value="Fire Service"> Fire Service
      <br>
      <input type="radio" id="rescue" name="rescue"   value="Medical Service"> Medical Service
      <br>
      <input type="radio" id="rescue" name="rescue"   value="Ambulance Service"> Ambulance Service
      <br>
      <?php echo isset($_SESSION['rescue_err_msg']) ? $_SESSION['rescue_err_msg'] : ""; ?><br><br>

      <label for="volunteer">Do you need immidiate local volunteer?</label>
      <br>
      <input type="radio" id="volunteer" name="volunteer"   value="Yes"> Yes
      <br>
      <input type="radio" id="volunteer" name="volunteer"   value="No"> No
      <br>
      <?php echo isset($_SESSION['local_err_msg']) ? $_SESSION['local_err_msg'] : ""; ?><br><br>


      <label for="location">Please give your location, if you need service in a differnet location from your current location.</label>
      <br>
      <input type="text" name="location" id="location">
      <?php echo isset($_SESSION['location_err_msg']) ? $_SESSION['location_err_msg'] : "" ?>

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
<a href="ResSerMap.php">Database Page</a>

</body>
<?php include '../templates/footer.php';?>
</html>
