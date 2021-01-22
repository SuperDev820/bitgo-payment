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
    <title>Settings</title>
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
          <h2 class="m-0">Settings</h2>
          <div class="pt-3">
            <a href="../auth/sign-out.php">
              <i class="fas fa-sign-out-alt fa-fw"></i>
              <span>Sign out</span>
            </a>
          </div>
        </div>

        <div class="card shadow-sm mb-4">
          <h4 class="card-header bg-white blue p-3">
            Profile
          </h4>
          <div class="card-body">
            <div>
              <h5>Contact Information</h5>
              <div class="mb-2">
                <span class="pr-2 t-bold">Account email address</span>
                <span style="color: #06dcdc;"><i class="fa fa-check fa-fw pr-1"></i>Verified</span>
              </div>
              <span class="text-muted">Used to sign in to your account and notify you when payments have been received.</span>
              <input type="email" disabled name="account_email" class="form-control my-3 w-30" value="office@creo-it.com">
              <hr/>
              <div class="mb-2">
                <span class="pr-2 t-bold">Support email address</span>
                <span style="color: #06dcdc;"><i class="fa fa-check fa-fw pr-1"></i>Verified</span>
              </div>
              <span class="text-muted">Your support email is used on receipts to allow customers to contact you about their purchases and payment.</span>
              <input type="email" disabled name="support_email" class="form-control my-3 w-30" value="office@creo-it.com">
            </div>

            <hr/>

            <div class="d-flex justify-content-between">
              <div>
                <h5>Password</h5>
                <span class="text-muted">Your password is used to secure access to your account. You'll need your existing password on hand to change it.</span>
              </div>
              <div class="ml-5">
                <button class="btn btn-primary btn-rec" v-on:click="">
                  Change password
                </button>
              </div>
            </div>

            <hr/>

            <div class="d-flex justify-content-between align-items-center">
              <div>
                <h5>Local Currency</h5>
                <span class="text-muted">The value of cryptocurrency in your account is also represented in your local currency.</span>
              </div>
              <div class="w-20">
                <select name="local_currency" class="custom-select">
                  <option value="eur">EUR</option>
                  <option value="usd">USD</option>
                  <option value="gbp">GBP</option>
                </select>
              </div>
            </div>

            <hr/>

            <div class="d-flex justify-content-between align-items-center">
              <div>
                <h5>Preferred Email Language</h5>
                <span class="text-muted">The language you would prefer to receive your emails in.</span>
              </div>
              <div class="w-20">
                <select name="email_language" class="custom-select">
                  <option value="english">English</option>
                  <option value="french">French</option>
                  <option value="russian">Russian</option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <div class="card shadow-sm mb-4">
          <div class="card-header bg-white p-3">
            <h4 class="blue m-0">
              Branding
            </h4>
          </div>
          <div class="card-body">
            <div>
              <h5>Name</h5>
              <span class="text-muted">Make your business name clear to your customers</span>
              <input type="text" disabled name="business_name" class="form-control my-3 w-30" value="paymagnet">
            </div>

            <hr/>

            <div>
              <h5>Logo</h5>
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex">
                  <img src="../assets/img/paymagnet.png" class="icon-lg mr-2">
                  <div>
                    <span class="text-muted">Your logo will be displayed on checkouts and receipts. We recommend using an image size of 120*120.</span>
                  </div>
                </div>
                <div class="ml-5">
                  <div class="mb-2">
                    <button class="btn btn-primary btn-rec" style="width: 130px;" v-on:click="">
                      Change
                    </button>
                  </div>
                  <div>
                    <button class="btn btn-outline-danger btn-rec" style="width: 130px;" v-on:click="">
                      Remove
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <hr/>

            <div>
              <h5>Color</h5>
              <span class="text-muted">Your primary brand color is used as the accent color on your checkout and receipts.</span>
              <div class="d-flex align-items-center mt-3">
                <div class="brand-main-color mr-2" style="background: #456D9C"></div>
                <div>
                  <div class="d-flex mb-1">
                    <div class="brand-color mr-1" style="background: #8897a7;"></div>
                    <div class="brand-color mr-1" style="background: #456D9C;"></div>
                    <div class="brand-color mr-1" style="background: #5a97c4;"></div>
                    <div class="brand-color mr-1" style="background: #71b7bc;"></div>
                    <div class="brand-color mr-1" style="background: #9bbf6a;"></div>
                    <div class="brand-color mr-1" style="background: #2a651d;"></div>
                  </div>
                  <div class="d-flex">
                    <div class="brand-color mr-1" style="background: #a973a9;"></div>
                    <div class="brand-color mr-1" style="background: #e76c6d;"></div>
                    <div class="brand-color mr-1" style="background: #e38484;"></div>
                    <div class="brand-color mr-1" style="background: #ed9356;"></div>
                    <div class="brand-color mr-1" style="background: #e3b14d;"></div>
                    <div class="brand-color mr-1" style="background: #997c61;"></div>
                  </div>
                </div>
              </div>
              <input type="text" disabled name="brand_color" class="form-control my-3 w-15" value="#456D9C">
            </div>
          </div>
        </div>

        <div class="card shadow-sm mb-4">
          <h4 class="card-header bg-white blue p-3">
            Withdrawals
          </h4>
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <div>
                <h5>Convert your crypto into cash</h5>
                <span class="text-muted">Using a Coinbase account, you can instantly sell your crypto on Coinbase Commerce for cash or USD Coin.</span>
              </div>
              <div class="ml-5">
                <button class="btn btn-outline-primary btn-rec" v-on:click="">
                  Add account
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="card shadow-sm mb-4">
          <h4 class="card-header bg-white blue p-3">
            Active cryptocurrencies
          </h4>
          <div class="card-body">
            <ul class="list-group">
              <li v-for="coin in coins" class="list-group-item d-flex justify-content-between align-items-center" :class="{ 'active': isactive === coin.name}"  :key="coin.coin" @click="setActive(coin.name)">
                <div> <img :src="coin.coin_logo" class="icon-sm"> <span class="t-x2 align-middle">{{ coin.name }}</span> </div>
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" checked>
                </div>
              </li>
            </ul>
          </div>
        </div>

        <div class="card shadow-sm mb-4">
          <h4 class="card-header bg-white blue p-3">
            API keys
          </h4>
          <div class="card-body">
            <div class="text-center py-2">
              <span class="t-x2">Create an API key to create and update charges using the Coinbase Commerce API.</span><br>
              <a href="#" class="blue">Learn more</a>
            </div>
          </div>
          <div class="card-footer bg-white text-right">
            <button type="button" class="btn btn-link">Create an API key</button>
          </div>
        </div>

        <div class="card shadow-sm mb-4">
          <h4 class="card-header bg-white blue p-3">
            Whitelisted domains
          </h4>
          <div class="card-body">
            <div class="text-center py-2">
              <span class="t-x2">If you prefer to control where your payment buttons are allowed to be embedded, add your domains and subdomains here.</span>
            </div>
          </div>
          <div class="card-footer bg-white text-right">
            <button type="button" class="btn btn-link">Whitelist a domain</button>
          </div>
        </div>

        <div class="card shadow-sm mb-4">
          <h4 class="card-header bg-white blue p-3">
            Close accont
          </h4>
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <div>
                <span class="text-muted">To close your account you will first need to delete your cloud backup. You can do this under the <span class="t-bold">Manage speed phrase back up</span> section.</span>
              </div>
              <div class="ml-5">
                <button class="btn btn-outline-danger btn-rec" v-on:click="">
                  Close account
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

