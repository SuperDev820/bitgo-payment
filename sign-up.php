<?php

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign Up</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="assets/vendor/fontawesome/css/all.css" rel="stylesheet">
    <link href="assets/vendor/vue-loading-overlay/vue-loading.css" rel="stylesheet">
    <!--load all styles -->
</head> 
<body class="multicoin-body">
  <div id="root" class="container">
    <div class="row justify-content-md-center mt-5">
      <div class="col-lg-6 col-sm-12 col-md-6 col-md-auto">
        <div class="d-flex justify-content-md-center p-2 w-100 bd-highlight mb-4">
          <div class="bd-highlight pr-2" style="color: blue;">Coinbase</div>
          <div class="bd-highlight pl-2" style="border-left: 1px solid #ccc9c9;">Commerce</div>
        </div>
        <div class="card shadow-sm">
          <div class="card-header bg-white p-3">
            <h5 class="card-title m-0 pl-3">Sign Up</h5>
          </div>
          <div class="card-body">
            <div class="form-group m-3">
              <div class="input-group mb-4 mr-sm-2">
                <input type="email" name="email" class="form-control" placeholder="Your email address">
              </div>
              <div class="input-group mb-4 mr-sm-2">
                <input type="password" naem="password" class="form-control" placeholder="Your password">
              </div>
              <div class="input-group mb-4 mr-sm-2">
                <input type="password" name="confirmed" class="form-control" placeholder="Confirmed password">
              </div>
            </div>
            <div class="form-group m-3">
              <button class="btn btn-primary btn-block" v-on:click="">Sing Up</button>
            </div>
            <div class="m-3">
              <div class="d-flex justify-content-between">
                <p>Already have an account?</p>
                <a href="sign-in.php">Log in here</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src='assets/js/jquery.min.js'></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/vendor/vue/vue.js"></script>
  <!--Do not remove-->

</body>

</html>

