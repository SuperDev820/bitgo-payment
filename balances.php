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
  <div id="root">
    <div class="side-bar bg-white">
      <div class="d-flex justify-content-md-center p-2 w-100 bd-highlight mt-4 mb-5">
        <div class="bd-highlight blue pr-2">Coinbase</div>
        <div class="bd-highlight pl-2" style="border-left: 1px solid #ccc9c9;">Commerce</div>
      </div>
      <div>
        <ul>
          <li class="text-muted">
            <i class="fab fa-microsoft fa-fw"></i>
            <span>Dashboard</span>
          </li>
          <li class="text-muted">
            <i class="fas fa-database fa-fw"></i>
            <span>Balances</span>
          </li>
          <li class="text-muted">
            <i class="fas fa-clipboard-list fa-fw"></i>
            <span>Payments</span>
          </li>
          <li class="text-muted">
            <i class="fas fa-clone fa-fw"></i>
            <span>Chechouts</span>
          </li>
          <li class="text-muted">
            <i class="far fa-file-alt fa-fw"></i>
            <span>Point of Sale</span>
          </li>
          <li class="text-muted">
            <i class="fas fa-toggle-on fa-fw"></i>
            <span>Settings</span>
          </li>
        </ul>
      </div>
      <div>
        <button class="btn btn-primary btn-block" v-on:click="">Withdraw</button>
      </div>
    </div>
    <div class="row justify-content-md-center main">
      <div class="col-lg-8 col-md-8 col-sm-12 col-md-auto">
        <div class="w-100 bd-highlight mt-2 mb-5">
          <h2 class="m-0">Balances</h2>
        </div>
        <div class="card shadow-sm">
          <h5 class="card-header bg-white blue p-3">
            Balances
          </h5>
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <span>$0.00</span><br>
                <span>Total balance</span>
              </div>
              <div>
                <button class="btn btn-primary btn-block" v-on:click="">Withdraw</button>
              </div>
            </div>
            <ul class="list-group">
              <li v-for="coin in coins" class="list-group-item d-flex justify-content-between align-items-center" :class="{ 'active': isactive === coin.name}"  :key="coin.coin" @click="setActive(coin.name)">
                <div> <img :src="coin.coin_logo" class="icon-sm"> <span class="display-4 t-x2 align-middle">{{ coin.name }}</span> </div>
                <div class="display-4 t-x2 text-right">
                  <span>{{ coin.rate }} {{ coin.coin.toUpperCase() }}</span><br>
                  <span>$1.00</span>
                </div>
              </li>
            </ul>
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

