<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>


<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Personal Details</h3>
            <form  method="POST"  action="view.php">

              <div class="row">
                <div class="col-12">

                  <div class="form-outline">
                    
                    <input type="text" id="employeename" class="form-control form-control-lg" name="employeename" >
                    <label class="form-label" for="employeename">Employee Name</label>
    
                  </div>

                </div>
                </div>

                <div class="row">
                <div class="col-12">

                  <div class="form-outline">
                    <input type="text" id="phonenumber" class="form-control form-control-lg" name="phonenumber" >
                    <label class="form-label" for="phonenumber">Phone number</label>
    

                  </div>

                </div>
                </div>
                <div class="row">
                <div class="col-12">

                  <div class="form-outline">
                    <input type="text" id="emailid" class="form-control form-control-lg" name="emailid" >
                    <label class="form-label" for="emailid">Email ID</label>
    
                    
                  </div>

                </div>
                </div>
                <div class="row">
                <div class="col-12">

                  <div class="form-outline">
                    
                    <input type="text" id="address" class="form-control form-control-lg" name="address" >
                    <label class="form-label" for="address">Address</label>
    
    
                  </div>

                </div>
                </div>
               
              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" name="submit" type="submit" value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>