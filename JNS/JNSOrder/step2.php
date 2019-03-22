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
          <div class="order-options-title">CONTENT DETAILS</div>
        </div>
      </div>

      <div class="row">
        <form class="" action="step3.php" method="post">

      <input type="hidden" id="type_writting" name="type" value="<?php echo $_POST['type'] ?>">
      <input type="hidden" name="step" value="3">

      <div class="form-row options">
        <div id="select_option_1" class="option-type">
          <i class="fas fa-calculator option-type-icon"></i>
          <div class="option-type-title">WORD COUNT</div>
        </div>

        <div id="select_option_1" class="option-type2">
          <i class="fas fa-calculator option-type-icon2"></i>
          <input type="number" id="words" name="words" class="form-control" value="" min="50" max="10000" step="50" required oninput="calc();return false;">
        </div>
      </div>

      <div class="form-row options">
        <div id="select_option_2" class="option-type">
          <i class="far fa-copy option-type-icon"></i>
          <div class="option-type-title">QUANTITY</div>
        </div>

        <div id="select_option_2" class="option-type2">
          <i class="far fa-copy option-type-icon2"></i>
          <input type="number" id="quantity" name="quantity" class="form-control" value="" min="1" max="100" required oninput="calc();return false;">
        </div>
      </div>

      <div class="form-row">
        <div id="select_option_3" class="option-type">
          <i class="far fa-clock option-type-icon"></i>
          <div class="option-type-title">TURNAROUND</div>
        </div>

        <div id="select_option_3" class="input-type3">
          <div>
            <label class="optionlabel active" for="opt11">Standard</label>
            <input type="radio" id="opt11" name="turnaround" value="1" title="STANDARD TURNAROUND" checked required onchange="calc();return false;">
          </div>
          <div>
            <label class="optionlabel" for="opt12">Express</label>
            <input type="radio" id="opt12" name="turnaround" value="1.35" title="EXPRESS TURNAROUND" onchange="calc();return false;">
          </div>
        </div>
      </div>

      <div class="form-row">
        <div id="select_option_4" class="option-type">
          <i class="fas fa-check option-type-icon"></i>
          <div class="option-type-title">QUALITY</div>
        </div>

        <div id="select_option_4" class="input-type3">
          <div>
            <label class="optionlabel1 active" for="opt21">Standard</label>
            <input type="radio" id="opt21" name="quality" value="1" title="STANDARD QUALITY" checked required onchange="calc();return false;">
          </div>
          <div>
            <label class="optionlabel1" for="opt22">Premium</label>
            <input type="radio" id="opt22" name="quality" value="1.35" title="PREMIUM QUALITY" onchange="calc();return false;">
          </div>
        </div>
      </div>

      <div class="label">APPROXIMATE VALUE</div>

      <div class="form-row options">
        <div class="option-text">
          <input type="text" class="form-control valuetext" placeholder="0" id="total" name="total" readonly>
        </div>
      </div>

      <div class="label">SUBJECT</div>

      <div class="form-row options">
        <div class="option-text">
          <input type="text" class="subject" id="subject" placeholder="Subject">
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="continue">
            <button type="submit" name="button" class="btn">CONTINUE</button>
          </div>
        </div>
      </div>


    </form>

    </div>

    </div>

  <footer id="footer-section2">
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