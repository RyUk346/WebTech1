<!DOCTYPE html>
<html>
<head>
    <title>Service Status</title>
    <?php 
session_start();
include '../templates/head.php';
include '../templates/sidenav.php';
include '../templates/nav2.php';
?>
   
    <h3 align="">Check Service Status</h3><br />
    
    <form method="post" action="" enctype="multipart/form-data" novalidate> 
      <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>
 

<ul>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Service Type</a>
    <div class="dropdown-content">
      <a href="GenDiaSt.php">General Diary</a>
      <a href="CorSerSt.php">Emergency Corona Service</a>
      <a href="PanSigSt.php">Panic Signal</a>
      <a href="SusRegSt.php">Suspect Registry</a>
      <a href="ResSerSt.php">Rescue Service</a>
    </div>
  </li>
</ul>  


</form>
</div>
<br />
</div>
</body>
<?php include '../templates/footer.php';?>
</html>
