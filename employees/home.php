
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Material Design for Bootstrap</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <link rel="stylesheet" href="public/css/mdb.min.css" />
  <link rel="stylesheet" href="public/css/admin.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
    crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
  <header>
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
           


        
        <input type="button" id="employee_project" value="Dashboard" class="list-group-item list-group-item-action py-2 ripple"/>
         <input type="button" id="personaldetails" value="Employees" class="list-group-item list-group-item-action py-2 ripple"/>
          <input type="button" id="projectdetails" value="Project" class="list-group-item list-group-item-action py-2 ripple"/>
           <input type="button" id="salarydetails" value="Salary" class="list-group-item list-group-item-action py-2 ripple"/>


        </div>
      </div>
    </nav>

    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <a class="navbar-brand" href="#">
          <img src="public/img/tracktrace.png" height="25" alt="" loading="lazy" />
        </a>
      </div>
    </nav>
  </header>
  <main style="margin-top: 58px">
     
     <section class="mb-4">
        <div class="card">
          <div class="card-header py-3">
            <div id="employee_project_div"class="test">
            </div>
      </section>
     </div>
  </main>
  <script>
            
         $("#employee_project").click(function(){  
            $("#employee_project_div").load('employee_project/view.php');
        });
        $("#personaldetails").click(function(){  
            $("#employee_project_div").load('personaldetails/view.php');
        });
        $("#projectdetails").click(function(){  
            $("#employee_project_div").load('projectdetails/view.php');
        });
        $("#salarydetails").click(function(){  
            $("#employee_project_div").load('salarydetails/view.php');
        });

    </script>
</body>
</html> 

</div>

