<?php
include_once('header.php');
include_once('conn.php');
?>
<body>
  <!-- Page Content -->
  <div class="container order-options">
    <div class="row">
      <div class="col-lg-12">
        <?php
        $art_id = filter_var($_POST['type'], FILTER_SANITIZE_NUMBER_INT);
        $art_desc = mysqli_query($link,"SELECT * FROM tbl_article WHERE art_id = $art_id");
        foreach ($art_desc as $art) {
          $article = $art;
        }
        mysqli_close($link);
        ?>
        <div class="order-options-title"><?php echo mb_strtoupper($article['art_name']); ?></div>
        <div class="order-options-subtitle">DETAILS</div>
      </div>
    </div>
    <div class="row">
      <form class="" action="step3.php" method="post">
        <input type="hidden" id="type_writting" name="type" value="<?php echo $article['art_id'] ?>">
        <input type="hidden" name="step" value="3">
        <div class="form-row options">
          <div id="select_option_1" class="option-type">
            <i class="fas fa-calculator option-type-icon"></i>
            <div class="option-type-title">WORD COUNT</div>
          </div>
          <div id="select_option_1" class="option-type2">
            <i class="fas fa-calculator option-type-icon2"></i>
            <input type="number" id="words" name="words" class="form-control" value="" min="<?php echo $article['art_min_word_count'] ?>" max="10000" step="50" required oninput="calc();return false;">
          </div>
        </div>
        <div class="form-row options">
          <div id="select_option_2" class="option-type">
            <i class="far fa-copy option-type-icon"></i>
            <div class="option-type-title">QUANTITY</div>
          </div>
          <div id="select_option_2" class="option-type2">
            <i class="far fa-copy option-type-icon2"></i>
            <input type="number" id="quantity" name="quantity" class="form-control" value="" min="<?php echo $article['art_min_pages'] ?>" max="100" step="1" required oninput="calc();return false;">
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
              <input type="radio" id="opt12" name="turnaround" value="1.45" title="EXPRESS TURNAROUND" onchange="calc();return false;">
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
            <input type="text" class="form-control valuetext" placeholder="0" id="total" name="total" readonly required>
          </div>
        </div>
        <div class="label">SUBJECT</div>
        <div class="form-row options">
          <div class="option-text">
            <input type="text" class="subject" id="subject" name="subject" placeholder="Subject" required>
          </div>
        </div>
        <div class="label">KEYWORDS</div>
        <div class="form-row options">
          <div class="option-text">
            <input type="text" class="subject" id="subject" name="keywords" placeholder="Keywords">
          </div>
        </div>
        <div class="form-row">
          <div class="label">INCLUDE FREE IMAGES</div>
          <div class="form-group">
            <select class="form-control" name="images" style="height: initial;" required>
              <option value="1">Yes</option>
              <option value="2" selected>No</option>
            </select>
          </div>
        </div>
        <div class="label">DESCRIPTION</div>
        <div class="form-row">
          <div class="options">
            <textarea class="form-control description" id="DescriptionArea" rows="3" name="description"></textarea>
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

<?php include_once('footer.php'); ?>

</body>
</html>
