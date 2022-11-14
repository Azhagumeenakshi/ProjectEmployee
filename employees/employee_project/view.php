
<?php
    include "../config.php";
    $sql = "SELECT employeeid,employeename FROM `employeedetails`";
    $all_categories = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>

<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("displayData").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("displayData").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","employee_project/display_details.php?id="+str,true);
    xmlhttp.send();
  }
}
</script>

</head>
<body>

<h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Employee Project Details</h3>
            <form method="POST"  action="">
            <div class="form-group">
              <div class="row">
                <div class="col-12">
                  <select id="employeename" name="employeename"  onchange="showUser(this.value)" class="select form-control-lg">
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
                  </div>
                </div>
              </div>
            </form>


        <div id="displayData">
           </div>



</body>
</html>
