<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$id = intval($_GET['id']);

include "../config.php";

if (!$conn) {
  die('Could not connect: ' . mysqli_error($conn));
}

	$sql="SELECT employeedetails.employeename as employeename,
	projectdetails.projectname as projectname,
	salarydetails.salaryperhour as salaryperhour
	FROM ((employeedetails 
	INNER JOIN projectdetails ON employeedetails.employeeid = projectdetails.employeeid) 
	INNER JOIN salarydetails ON employeedetails.employeeid = salarydetails.employeeid) 
	WHERE employeedetails.employeeid  = '".$id."'";


$result = mysqli_query($conn,$sql);

	echo "<table>
		<thead style='background-color: #cce6ff;'> 
		<tr>
		<th>Employee Name</th>
		<th>Project Name</th>
		<th>Salary per hour</th>
		</tr>
		</thead>";
		while($row = mysqli_fetch_array($result)) {
			echo "<tbody>";
		  echo "<tr>";
		  echo "<td>" . $row['employeename'] . "</td>";
		  echo "<td>" . $row['projectname'] . "</td>";
		  echo "<td>" . $row['salaryperhour'] . "</td>";
		  echo "</tr>";
		  echo "</tbody>";
		}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>