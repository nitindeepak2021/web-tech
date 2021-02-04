<?php

$conn = mysqli_connect('localhost', 'root', '', 'btech52020'); // connection establishing

$sql = "select * from student"; // Preparing SQL 

$result = mysqli_query($conn, $sql);
?>

<table border="1">
	<tr>
		<th>Roll</th>
		<th>Name</th>
	</tr>
<?php while($row = mysqli_fetch_array($result)){ ?>
	<tr>
		<td><?php echo $row['roll'];?></td>
		<td><?php echo $row['name'];?></td>
	</tr>
<?php } ?>
</table>