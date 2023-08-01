<!DOCTYPE html>
<html lang="en" dir="dir">
<head>
<meta charset="utf-8">
<title>Location and Info</title>
</head>
<body>
 
<table border= = 1 cellspacing = 0 cellpadding = 10>
<tr>
<td>#</td>
<td>Name</td>
<td>Details</td>
<td>Maps</td>
</tr>

<?php
require '../model/connection.php';
$rows = mysqli_query($conn, "SELECT * FROM generaldiarycfabuse ORDER BY id DESC");
$i = 1;

foreach($rows as $row) : 
?>

<tr>
	<td><?php echo $i++; ?></td>
	<td><?php echo $row["category"]; ?></td>
	<td><?php echo $row["details"]; ?></td>
	<td style = "width:450px; height:450px;"><iframe src='https://www.google.com/maps?q= <?php echo $row["latitude"]; ?>, <?php echo $row["longitude"]; ?>&hl=es;z=14&output=embed' style= "width: 100%;  height: 100%;"> </td>
</tr>
<?php endforeach; ?>
</body>
</html>