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
    <title>Emergency Corona Service</title>
    <h3 align="">Corona Help Service</h3><br />
</head>
<body onload = "getLocation();">
 
    
    <form class= "myForm" method="post" action="../controller/EmergencyCoronaServiceAction.php" autocomplete="off">   


      <label for = "category">Which kind of service do you need?</label><br>
      <input type="radio" id="category" name="category"   value="Doctor's Appointment"> Doctors Appointment
      <br>
      <input type="radio" id="category" name="category"   value="Ambulance"> Ambulance
      <br>
      <input type="radio" id="category" name="category"   value="Oxygen"> Oxygen
      <br>
      <input type="radio" id="category" name="category"   value="Call Center"> Call Center
      <br>
      <input type="radio" id="category" name="category"   value="Health Care Advise"> Health Care Advise
      <br>
      <input type="radio" id="category" name="category"   value="Mother Care"> Health Mother Care
      <br>
      <input type="radio" id="category" name="category"   value="Contact icddrb"> Contact iccddrb for corona test
      <br>

      
      <?php echo isset($_SESSION['category_err_msg']) ? $_SESSION['category_err_msg'] : ""; ?><br><br>

      <label for="details">Please Provide Some Details:</label>
      <input type="text" name="details" id="details">

     <?php echo isset($_SESSION['details_err_msg']) ? $_SESSION['details_err_msg'] : "" ?>

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
<a href="EmerCorMap.php">Database Page</a>
</body>
<?php include '../templates/footer.php';?>
</html>
