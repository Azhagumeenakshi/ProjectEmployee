<?php 
    include "../config.php";
  if (isset($_POST['submit'])) {
    $employeename = mysqli_real_escape_string($conn,$_POST['employeename']);
    $phonenumber = mysqli_real_escape_string($conn,$_POST['phonenumber']);
    $emailid = mysqli_real_escape_string($conn,$_POST['emailid']);
    $address = mysqli_real_escape_string($conn,$_POST['address']);

    $sql = "INSERT INTO `employeedetails`(`employeename`, `phonenumber`, `emailid`, `address`) VALUES ('$employeename','$phonenumber','$emailid','$address')";

     if(mysqli_query($conn,$sql))
        {
            echo '<script>alert("Employee created successfully")</script>';
        }
  }
    $sqlshow = "SELECT * FROM employeedetails";

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


        <a href="personaldetails/create.php">
          <button>Create Employee</button>
        </a>
    <div id="personaldetails" class="container">
                  <table class="table table-striped mb-0">
                    <thead style="background-color: #80d4ff;">
                       <tr>
                        <th>Employee Name</th>
                        <th>Phone number</th>
                        <th>Email ID</th>
                        <th>Address</th>
                        </tr>

                    </thead>
                    <tbody>
                                    <?php
                            if ($show->num_rows > 0) {
                                while ($row = $show->fetch_assoc()) {
                        ?>
                                    <tr>
                                   <td><?php echo $row['employeename']; ?><br /></td>
                                    <td><?php echo $row['phonenumber']; ?><br /></td>
                                    <td><?php echo $row['emailid']; ?><br /></td>
                                    <td><?php echo $row['address']; ?><br /></td>
                                    </tr>                       

                        <?php       }
                            }
                        ?>  
                    </tbody>
                  </table>
    </div> 
</body>
</html>

