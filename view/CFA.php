<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
    <title>General Diary</title>
    <?php include 'GeneralDiary.php';?>
    <h3 align="">Register a New Child & Female Abuse Report</h3><br />
</head>
<body onload = "getLocation();">
 
    
     <form class= "myForm" method="post" action="../controller/CFAAction.php" autocomplete="off">  


      <label for = "category">Choose Category:</label><br>
      <input type="radio" name="category"   value="Child"> Child 
      <input type="radio" name="category"   value="Female"> Female 
      <br><br>
      <?php echo isset($_SESSION['category_err_msg']) ? $_SESSION['category_err_msg'] : ""; ?><br><br>

      <label for="details">Details:</label>
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
<a href="CFAMap.php">Database Page</a>


</body>
<?php include '../templates/footer.php';?>
</html>