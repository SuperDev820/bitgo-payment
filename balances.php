<?php

require 'inc/init.php';
require 'inc/database.php';

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Balances</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="assets/vendor/fontawesome/css/all.css" rel="stylesheet">
    <script src="assets/vendor/axios/axios.min.js"></script>
    <link href="assets/vendor/vue-loading-overlay/vue-loading.css" rel="stylesheet">
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
            <i class="fab fa-microsoft fa-fw"></i>
            <span class="pl-1">Dashboard</span>
          </li>
          <li class="text-muted">
            <i class="fas fa-database fa-fw"></i>
            <span class="pl-1">Balances</span>
          </li>
          <li class="text-muted">
            <i class="fas fa-clipboard-list fa-fw"></i>
            <span class="pl-1">Payments</span>
          </li>
          <li class="text-muted">
            <i class="fas fa-clone fa-fw"></i>
            <span class="pl-1">Chechouts</span>
          </li>
          <li class="text-muted">
            <i class="far fa-file-alt fa-fw"></i>
            <span class="pl-1">Point of Sale</span>
          </li>
          <li class="text-muted">
            <i class="fas fa-toggle-on fa-fw"></i>
            <span class="pl-1">Settings</span>
          </li>
        </ul>
      </div>
      <div class="text-center py-5">
        <button class="btn btn-primary" style="border-radius: 0;" v-on:click="">
          <i class="fa fa-plus circle-plus-icon"></i>
          Accept payments
        </button>
      </div>
    </div>
    <div class="row justify-content-center main">
      <div class="col-lg-8 col-md-8 col-sm-12 col-md-auto" style="margin-bottom: 28px;">
        <div class="w-100 bd-highlight mt-2 mb-5">
          <h2 class="m-0">Balances</h2>
        </div>

        <div class="card shadow-sm mb-4">
          <h5 class="card-header bg-white blue p-3">
            Balances
          </h5>
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <div>
                <span class="t-x3">$0.00</span><br>
                <span>Total balance</span>
              </div>
              <div>
                <button class="btn btn-primary" v-on:click="">Withdraw</button>
              </div>
            </div>
            <ul class="list-group">
              <li v-for="coin in coins" class="list-group-item d-flex justify-content-between align-items-center" :class="{ 'active': isactive === coin.name}"  :key="coin.coin" @click="setActive(coin.name)">
                <div> <img :src="coin.coin_logo" class="icon-sm"> <span class="t-x2 align-middle">{{ coin.name }}</span> </div>
                <div class="d-flex align-items-center">
                  <div class="t-x2 text-right mr-3">
                    <span>{{ coin.rate }} {{ coin.coin.toUpperCase() }}</span><br>
                    <span class="display-4 t-x2">$1.00</span>
                  </div>
                  <div class="circle-arrow-icon blue">
                    <i class="fas fa-long-arrow-alt-up t-x2"></i>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>

        <div class="card shadow-sm mb-4">
          <h5 class="card-header bg-white blue p-3">
            Withdrawals
          </h5>
          <div class="card-body d-flex justify-content-center align-items-center">
            <div>
              <span class="t-x2">No withdrawals created yet.</span>
            </div>
          </div>
        </div>

        <div class="card shadow-sm mb-4">
          <h5 class="card-header bg-white blue p-3">
            Conversions
          </h5>
          <div class="card-body d-flex justify-content-center align-items-center">
            <div>
              <span class="t-x2">No conversions created yet.</span>
            </div>
          </div>
        </div>

        <div class="card shadow-sm mb-4">
          <div style="padding: 1.25rem;">
            <button type="button" class="btn btn-outline-secondary" v-on:click="">Generate Withdrawals CSV</button>
          </div>
        </div>
      </div>

      <div class="footer row justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div class="d-flex justify-content-between py-1" style="border-top: 1px solid #6c757d;">
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
  <script src='assets/js/jquery.min.js'></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/vendor/vue/vue.js"></script>
  <!--Do not remove-->

  <script src="assets/vendor/sweetalert2/sweetalert2.all.min.js"></script>
  <script src="assets/vendor/vue-loading-overlay/vue-loading-overlay%403.js"></script>
  <script src="assets/vendor/vue-countdown/vue-countdown.min.js"></script>
  <script src="assets/js/clipboard.min.js"></script>
  <script src="assets/js/gateway.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/app.js"></script>

</body>

</html>

