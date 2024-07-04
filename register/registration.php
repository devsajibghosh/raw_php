<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banking_System</title>
  <!-- link of css custom css -->
  <link rel="stylesheet" href="../asstes/css/custom.css">
  <!-- favicion link -->
  <link rel="shortcut icon" href="../asstes/images/banks.jpg" type="image/x-icon">
  <!-- bootstrap cdn link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark">

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <!-- error mseg start -->
        <?php if (isset($_SESSION['error_msg'])) : ?>
          <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            <strong class="text-danger"><?= $_SESSION['error_msg'];  ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif;
        unset($_SESSION['error_msg']); ?>
        <!-- error msg end  -->

        <div class="card">
          <div class="card-body">
            <h1 class="text-center fw-bolder text-warning fs-3">Register...</h1>
            <form action="registration_post.php" method="post">

              <div class="mb-3">
                <label for="inputName" class="form-label">Full Name</label>
                <input type="text" class="form-control  <?= (isset($_SESSION['name_error'])) ? 'is-invalid' : ' ' ;unset($_SESSION['name_error']);  ?>" placeholder="Enter your name" name="name" value="<?= (isset($_SESSION['old_name'])) ? $_SESSION['old_name'] : '';unset($_SESSION['old_name']); ?>" >
              </div>

              <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="name@example.com" name="email" value="<?= (isset($_SESSION['old_email'])) ? $_SESSION['old_email'] : '';unset($_SESSION['old_email']); ?>">
              </div>

              <div class="mb-3">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
              </div>

              <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" name="confirm_password">
              </div>

              <div class="mb-3 d-flex justify-content-between">
                <span><a href="../index.php" class="text-decoration-none fw-bold text-dark ">📲Login<strong class="dot text-warning">__</strong></a></span>
                <button class="btn btn-md btn-warning text-white px-3 fs-6 fw-bold" type="submit">Sign Up<i class="dot">🧬</i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- script link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>