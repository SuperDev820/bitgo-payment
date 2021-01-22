<?php

session_start();
if(empty($_SESSION["userId"])) {
    header('Location: sign-in.php');
}

require '../inc/init.php';
require '../inc/database.php';

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Checkouts</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="../assets/vendor/fontawesome/css/all.css" rel="stylesheet">
    <script src="../assets/vendor/axios/axios.min.js"></script>
    <link href="../assets/vendor/vue-loading-overlay/vue-loading.css" rel="stylesheet">
    <!--load all styles -->
</head> 
<body class="multicoin-body">
  <div id="root" >
    <div class="side-bar bg-white">
      <div class="d-flex justify-content-md-center t-x2 p-2 w-100 bd-highlight mt-4 mb-5">
        <div class="bd-highlight blue pr-2 t-bold">coinbase</div>
        <div class="bd-highlight pl-2" style="border-left: 1px solid #6c757d;">Commerce</div>
      </div>
      <div style="flex-grow: 1;">
        <ul>
          <li class="text-muted">
            <a href="dashboard.php">
              <i class="fab fa-microsoft fa-fw"></i>
              <span class="pl-1">Dashboard</span>
            </a>
          </li>
          <li class="text-muted">
            <a href="balances.php">
                <i class="fas fa-database fa-fw"></i>
                <span class="pl-1">Balances</span>
            </a>
          </li>
          <li class="text-muted">
            <a href="payments.php">
              <i class="fas fa-clipboard-list fa-fw"></i>
              <span class="pl-1">Payments</span>
            </a>
          </li>
          <li class="text-muted">
            <a href="checkouts.php">
              <i class="fas fa-clone fa-fw"></i>
              <span class="pl-1">Chechouts</span>
            </a>
          </li>
          <li class="text-muted">
            <a href="sales-point.php">
              <i class="far fa-file-alt fa-fw"></i>
              <span class="pl-1">Point of Sale</span>
            </a>
          </li>
          <li class="text-muted">
            <a href="settings.php">
              <i class="fas fa-toggle-on fa-fw"></i>
              <span class="pl-1">Settings</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="text-center py-5">
        <button class="btn btn-primary btn-rec" v-on:click="">
          <i class="fa fa-plus circle-plus-icon"></i>
          Accept payments
        </button>
      </div>
    </div>
    <div class="row justify-content-center main">
      <div class="col-lg-8 col-md-8 col-sm-12 col-md-auto" style="margin-bottom: 28px;">
        <div class="page-title d-flex justify-content-between w-100 bd-highlight">
          <h2 class="m-0">Checkouts</h2>
          <div class="pt-3">
            <a href="../auth/sign-out.php">
              <i class="fas fa-sign-out-alt fa-fw"></i>
              <span>Sign out</span>
            </a>
          </div>
        </div>

        <div class="card shadow-sm mb-4">
          <div class="card-header bg-white p-3 d-flex justify-content-between align-items-center">
            <h4 class="blue m-0">
              Checkouts
            </h4>
            <button class="btn btn-outline-primary btn-rec" v-on:click="">
              Create checkout
            </button>
          </div>
          <div class="card-body">
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between align-items-center" style="border-bottom: 1px solid rgba(0, 0, 0, 0.125);border-top: none;">
                <div class="d-flex align-items-center">
                  <img src="../assets/img/paymagnet.png" class="icon-md mr-2">
                  <div>
                    <span class="t-x2">testone</span><br>
                    <span class="text-muted">test one</span>
                  </div>
                </div>
                <div class="t-x2 text-right">
                  <span>Donation</span>
                </div>
              </li>
            </ul>
            <div class="pagination d-flex justify-content-between align-items-center">
              <div>
                <span class="t-x2">1-1 of 1 checkouts</span>
              </div>
              <div>
                <button class="btn btn-default prev-btn mr-2" v-on:click="">
                  <i class="fa fa-angle-left"></i>
                </button>
                <button class="btn btn-default next-btn" v-on:click="">
                  <i class="fa fa-angle-right"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer row justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div class="d-flex justify-content-between py-2" style="border-top: 1px solid #6c757d;">
            <div>
              Docs
            </div>
            <div>
              Contact Us
            </div>
            <div>
              Status
            </div>
            <div>
              Terms of Service
            </div>
            <div>
              Privacy Policy
            </div>
            <div>
              <span class="pr-1">@ Coinbase</span>
              <span class="pl-1" style="border-left: 1px solid;">Commerce</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src='../assets/js/jquery.min.js'></script>
  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/vendor/vue/vue.js"></script>
  <!--Do not remove-->

  <script src="../assets/vendor/sweetalert2/sweetalert2.all.min.js"></script>
  <script src="../assets/vendor/vue-loading-overlay/vue-loading-overlay%403.js"></script>
  <script src="../assets/vendor/vue-countdown/vue-countdown.min.js"></script>
  <script src="../assets/js/clipboard.min.js"></script>
  <script src="../assets/js/gateway.js"></script>
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/app.js"></script>

</body>

</html>

