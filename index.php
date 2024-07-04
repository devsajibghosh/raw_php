<main?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banking_System</title>
  <!-- link of css custom css -->
  <link rel="stylesheet" href="./asstes/css/custom.css">
  <!-- favicion link -->
  <link rel="shortcut icon" href="./asstes/images/banks.jpg" type="image/x-icon">
  <!-- bootstrap cdn link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="background-animation">
  
  <div class="container cont_main">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card login_card mt-5">
          <div class="card-header">
            <h3 class="text-center text-primary fw-bolder font-monospace">Login<i class="dot text-dark">__</i></h3>
          </div>
          <div class="card-body body_edit">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="example@gmail.com" value="<?= (isset($_SESSION['send_old_email'])) ? $_SESSION['send_old_email'] : '';unset($_SESSION['send_old_email']); ?>">
              </div>

              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="type your password" value="<?= (isset($_SESSION['send_old_password'])) ? $_SESSION['send_old_password'] : '';unset($_SESSION['send_old_password']); ?>">
              </div>

              <div class="mb-3">
                <strong><a href="./register/registration.php" class="text-decoration-none font-monospace ">🤵🏻Register<span class="dot text-warning">__</span></a></strong>
              </div>
              <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  </main>
  <!-- script link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>