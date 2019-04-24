<!DOCTYPE html>
<html>
<head>
	<title>List Student</title>
	<style type="text/css">
		table{
			
			border: solid ;
			color: blue;
			border-color: red;
			padding-left: 180px;
		    padding-right: 180px;
		    padding-top: 120px;
		    padding-bottom: 120px;
		    margin-left: 25%;
    		margin-top: 10%;
		}
		span{
			color: red;
			display: block;
			 margin-left: 25%;
			 margin-top: 10px;
			 margin-top: 10px;
			 width: 43.6%;
			 
			position: absolute;
			
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

		try{

			$con=new PDO("mysql:host=localhost;dbname=google","root","");
			$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			$sql="select * from student";

			$stmt=$con->prepare($sql);

			$stmt->execute();

			$stmt->setFetchMode(PDO::FETCH_ASSOC);

			$result=$stmt->fetchAll();

			echo "<span><center>Total Number of Rows=".count($result)."</center><span>";
			$i=1;
			foreach ($result as $value) {
				echo "<tr>";
				echo "<td>$i</td>";
				echo "<td>".$value['id']."</td>";
				echo "<td>".$value['student_name']."</td>";
				echo "<td>".$value['student_mark']."</td>";
				echo "</tr>";
				$i++;
			}


		}catch(PDOException $e){
			echo $e->getMessage();
		}
	?>

</table>

</body>
</html>