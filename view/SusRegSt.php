<!DOCTYPE html>
<html lang="en" dir="dir">
<head>
<meta charset="utf-8">
<title>Suspect Registry Status</title>
<?php include 'ServiceStatus.php';?>
</head>
<body>
 
<table border= = 1 cellspacing = 0 cellpadding = 10>
<tr>
<td>ID</td>
<td>Status</td>
</tr>

<?php
require '../model/connection.php';
$rows = mysqli_query($conn, "SELECT * FROM susregst ORDER BY id DESC");
$i = 1;

foreach($rows as $row) : 
?>

<tr>
  <td><?php echo $i++; ?></td>
  <td><?php echo $row["status"]; ?></td>
</tr>

<?php endforeach; ?>

</body>
<?php include '../templates/footer.php';?>
</html>
