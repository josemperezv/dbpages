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

    <!-- Page Content -->
    <div class="container order-options">

      <div class="row">
        <div class="col-lg-12">
          <div class="order-options-title">COMPLETE YOUR ORDER</div>
        </div>
      </div>

      <div class="row">
        <form class="" action="step5.php" method="post">
          <input type="hidden" name="step" value="5">
          <input type="hidden" name="type" value="<?php echo $_POST['type']?>">
          <input type="hidden" name="words" value="<?php echo $_POST['words']?>">
          <input type="hidden" name="quantity" value="<?php echo $_POST['quantity']?>">
          <input type="hidden" name="turnaround" value="<?php echo $_POST['turnaround']?>">
          <input type="hidden" name="quality" value="<?php echo $_POST['quality']?>">
          <input type="hidden" name="total" value="<?php echo $_POST['total']?>">
          <div class="label text-center">PAY NOW TO COMPLETE YOUR ORDER</div>
          <div class="form-row options">
            <div class="option-text">
              <input type="text" class="form-control valuetext" placeholder="0" id="total" value="<?php echo $_POST['total']?>" readonly disabled>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="continue">
                <button type="submit" name="button" class="btn paypal">PAYPAL <i class="fab fa-paypal"></i></button>
                <button type="submit" name="button" class="btn stripe">STRIPE <i class="fab fa-stripe-s"></i></button>
              </div>
            </div>
          </div>
        </form>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="continue">
            <form action="index.php" method="post">
              <button type="submit" name="button" class="btnedit">EDIT YOUR ORDER</button>
            </form>
          </div>
        </div>
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

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery/functions.js"></script>

</body>
</html>