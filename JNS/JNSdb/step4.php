<?php
include_once('header.php');
$_POST = $_SESSION['order'];
?>
  <body>
    <!-- Page Content -->
    <div class="container order-options">

      <div class="row">
        <div class="col-lg-12">
          <div class="order-options-title">COMPLETE YOUR ORDER</div>
        </div>
      </div>

      <div class="row">
        <form action="step5.php" method="post">
          <input type="hidden" name="step" value="5">
          <input type="hidden" name="type" value="<?php echo $_POST['type']?>">
          <input type="hidden" name="words" value="<?php echo $_POST['words']?>">
          <input type="hidden" name="quantity" value="<?php echo $_POST['quantity']?>">
          <input type="hidden" name="turnaround" value="<?php echo $_POST['turnaround']?>">
          <input type="hidden" name="quality" value="<?php echo $_POST['quality']?>">
          <input type="hidden" name="total" value="<?php echo $_POST['total']?>" required>
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

<?php include_once('footer.php'); ?>

</body>
</html>
