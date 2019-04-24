<!DOCTYPE html>
<html>
<head>
	<title>List Student</title>
	<style type="text/css">
		table{
			
			border: solid ;
			color: blue;
			border-color: red;
		}

	</style>
</head>
<body>

<table border="1">
	<tr>
		<th>Slno</th>
		<th>Id</th>
		<th>Student Name</th>
		<th>Student Mark</th>
	</tr>
	<!-- Repeat -->
	<?php
		$con=new mysqli("localhost","root","","google");


		$sql="select * from student";

		$query=$con->query($sql);
		$i=1;

		while($row=$query->fetch_assoc()){
			
			echo "<tr>";
			echo "<td>$i</td>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['student_name']."</td>";
			echo "<td>".$row['student_mark']."</td>";
			echo "</tr>";
			$i++;
		}
	?>
	

</table>

</body>
</html>