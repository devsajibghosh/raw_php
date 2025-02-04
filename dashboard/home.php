<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-- css link -->
  <link rel="stylesheet" href="../asstes/css/custom.css">
  <!-- favicon of dashboard -->
   <link rel="shortcut icon" href="../asstes/images/dashboard_icon.png" type="image/x-icon">
     <!-- bootstrap cdn link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark">
  
<div class="container cont_main">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card login_card mt-5">
          <div class="card-header d-flex justify-content-center">
            <h3 class="text-center text-primary fw-bolder font-monospace">Dashboard<i class="dot text-dark">__</i></h3>
              <!-- logout btn -->
            <button type="button" class="btn btn-danger btn-sm position-relative">
              <a href="logout.php" class="text-white fs-5">Logout</a>
              <span class="position-absolute top-0 start-100 translate-middle p-1 bg-success border border-light rounded-circle">
                <span class="visually-hidden">New alerts</span>
              </span>
            </button>

          </div>
          <div class="card-body body_edit">
              <div class="">
                <h4 class="text-center text-success dot">Welcome</h4>
                <hr>
              </div>
              <div class="mb-3">
              <label class="form-label">Name: <?= $_SESSION['admin_name']; ?></label>
              </div>
              <div class="mb-3">
                <label class="form-label">Email: <?= $_SESSION['admin_email'] ?></label>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- script link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>