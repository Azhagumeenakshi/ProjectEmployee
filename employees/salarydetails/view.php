<?php 
include "../config.php";
    if(isset($_POST['submit']))
    {
        $salaryperhour = mysqli_real_escape_string($conn,$_POST['salaryperhour']);
        $employeeid = mysqli_real_escape_string($conn,$_POST['employeeid']);
        
        $sql_insert =
        "INSERT INTO `salarydetails`(`salaryperhour`, `employeeid`)
            VALUES ('$salaryperhour','$employeeid')";
         

          if(mysqli_query($conn,$sql_insert))
        {
            echo '<script>alert("Salary added successfully")</script>';
        }
    }

  $sqlshow = "SELECT salarydetails.salaryperhour, employeedetails.employeename
FROM salarydetails
INNER JOIN employeedetails ON salarydetails.employeeid=employeedetails.employeeid";

$show = $conn->query($sqlshow);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<style>
    th{
        font-weight: bold;
    font-size: 25px;
    }
    td{
        font-size: 15px;
    }
</style>
</head>

<body>
       <a href="salarydetails/create.php">
          <button>Create Salary</button>
        </a>
    <div class="container">
        
    <table class="table table-striped mb-0">
                    <thead style="background-color: #80d4ff;">
            <tr>
            <th>Employee Name</th>
            <th>Salary</th>
            </tr>
        </thead>
        <tbody> 
            <?php
                if ($show->num_rows > 0) {
                    while ($row = $show->fetch_assoc()) {
            ?>
                        <tr>
                        <td><?php echo $row['employeename']; ?></td>
                        <td><?php echo $row['salaryperhour']; ?></td>
                        </tr>                       

            <?php       }

                }

            ?>   
        </tbody>
    </table>
    </div> 
</body>
</html>

