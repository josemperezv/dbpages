<?php include_once('header.php'); ?>
  <body>

    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="https://jnswriting.com/">JNS WRITING</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      </div>
    </nav>

    <div class="container order-account">
      <div class="row">
        <div class="col-lg-12">
          <div class="order-options-title">ACCOUNT DETAILS</div>
        </div>
      </div>
      <div class="row">
        <form class="" action="step4.php" method="post">
          <div class="account-title">ALREADY HAVE AN ACCOUNT</div>
          <div class="form-row accounts">
            <div id="select_option_1" class="email-type">
              <i class="fas fa-user-alt account-icon"></i>
              <input type="email" name="user" class="user-control" placeholder="Enter email">
            </div>
            <div id="select_option_1" class="password-type">
              <i class="fas fa-at account-icon"></i>
              <input type="password" name="pass" class="pass-control" placeholder="Password">
            </div>
          </div>
          <div class="account-title">REGISTER A NEW ACCOUNT</div>
          <div class="form-row accounts">
            <div id="select_option_2" class="email-type">
              <i class="fas fa-user-alt account-icon"></i>
              <input type="email" name="user" class="user-control" placeholder="Enter email">
            </div>
            <div id="select_option_2" class="password-type">
              <i class="fas fa-at account-icon"></i>
              <input type="password" name="pass" class="pass-control" placeholder="Password">
            </div>
          </div>
          <div class="form-row">
            <div class="col-lg-12">
              <div class="continue">
                <button type="submit" name="button" class="btn">CONTINUE</button>
              </div>
            </div>
          </div>
          <input type="hidden" name="step" value="4">
          <input type="hidden" name="type" value="<?php echo $_POST['type']?>">
          <input type="hidden" name="words" value="<?php echo $_POST['words']?>">
          <input type="hidden" name="quantity" value="<?php echo $_POST['quantity']?>">
          <input type="hidden" name="turnaround" value="<?php echo $_POST['turnaround']?>">
          <input type="hidden" name="quality" value="<?php echo $_POST['quality']?>">
          <input type="hidden" name="total" value="<?php echo $_POST['total']?>">
        </form>
      </div>
    </div>

  <footer id="footer-section">
    <div class="footer-main">
      <div class="container">
        <div class="row">
          <nav class="footer-nav">
          </nav>
        </div>
      </div>
    
      <div class="footer text-center">
        Copyright JNS Consulting Group
      </div>
    </div>  
  </footer>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>