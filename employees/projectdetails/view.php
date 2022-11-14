<?php 
    include "../config.php";
    if(isset($_POST['submit']))
    {
        $projectname = mysqli_real_escape_string($conn,$_POST['projectname']);
        $employeeid = mysqli_real_escape_string($conn,$_POST['employeeid']);
        
        $sql_insert =
        "INSERT INTO `projectdetails`(`projectname`, `employeeid`)
            VALUES ('$projectname','$employeeid')";

          if(mysqli_query($conn,$sql_insert))
        {
            echo '<script>alert("Project created successfully")</script>';
        }
    }

      $sqlshow = "SELECT projectdetails.projectname, employeedetails.employeename
    FROM projectdetails
    INNER JOIN employeedetails ON projectdetails.employeeid=employeedetails.employeeid";

    $show = $conn->query($sqlshow);
     $conn->close();
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
        <a href="projectdetails/create.php">
          <button>Create Project</button>
        </a>
    <div class="container">
    <table class="table table-striped mb-0">
                    <thead style="background-color: #80d4ff;">
            <tr>
            <th>Employee Name</th>
            <th>Project</th>
             </tr>
        </thead>

        <tbody> 
            <?php
                if ($show->num_rows > 0) {

                    while ($row = $show->fetch_assoc()) {

            ?>
                        <tr>
                        <td><?php echo $row['employeename']; ?><br /></td>
                        <td><?php echo $row['projectname']; ?><br /></td>
                        </tr>                       

            <?php       }
                }
            ?>  
        </tbody>
      </table>
    </div> 
</body>
</html>

