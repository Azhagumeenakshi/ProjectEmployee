
<?php
    include "../config.php";

    $sql = "SELECT employeeid,employeename FROM `employeedetails`";
    $all_categories = mysqli_query($conn,$sql);
  
?>
  
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

</style>
<body>

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Salary Details</h3>
  <form  method="POST"  action="view.php">
    <label for="employeeid">Employee Name</label>
    
        <select id="employeeid" name="employeeid">
        <option value="selectemployee" selected>---Select employee---</option>
            <?php
                
                while ($employee = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $employee["employeeid"];?>">
                    <?php echo $employee["employeename"];?>
                </option>
            <?php
                endwhile;
                
            ?>
        </select>

    <label for="salaryperhour">Salary</label>
    <input type="text" id="salaryperhour" name="salaryperhour" >

  
    <input type="submit" name="submit" value="Submit">
  </form>
</div>
</div>
      </div>
    </div>
  </div>
</section>

</body>
</html>
