<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>General Diary</title>
    <?php include 'GeneralDiary.php';?>
    <h3 align="">Register a New Corruption or Impolicy Report</h3><br />
</head>
<body onload = "getLocation();">
  
    
    <form class= "myForm" method="post" action="../controller/CIAction.php" autocomplete="off">  


      <label for = "category">In which sector do you face or see corruption or impolicy:</label><br>
      <input type="radio" name="category"   value="Education"> Education
      <br>
      <input type="radio" name="category"   value="Hospital"> Hospital
      <br>
      <input type="radio" name="category"   value="Railway"> Railway
      <br>
      <input type="radio" name="category"   value="Daily products"> Daily products
      <br>
      <input type="radio" name="category"   value="Particular Government Service"> Particular Government Service
      <br>
      <input type="radio" name="category"   value="Particular any other institute"> Particular any other institute
      
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
<a href="CIMap.php">Database Page</a>

</body>
<?php include '../templates/footer.php';?>
</html>
