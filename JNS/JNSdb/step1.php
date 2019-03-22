<?php
include_once('header.php');
?>
<body>
  <!-- Page Content -->
  <div class="container order-main">
    <div class="row">
      <div class="col-lg-12">
        <div class="order-main-title">SELECT THE TYPE OF CONTENT</div>
      </div>
    </div>
    <div class="row articles">
      <form class="" action="step2.php" method="post">
        <?php
          $articles = mysqli_query($link, 'SELECT * FROM tbl_article');
          if(mysqli_num_rows($articles) == 0) {
            echo '<div class="form-row">There are no articles available at this moment.</div>';
          } else {
            $count = 1;
            foreach ($articles as $article) {
              if ($count == 1) {
                echo '<div class="form-row col-xs-12">';
              }
              if ($article['art_id'] == 1) {
                echo '<div id="select_content_'.$article['art_id'].'" class="content-type active">';
              } else {
                echo '<div id="select_content_'.$article['art_id'].'" class="content-type">';
              }
              echo '<i class="far fa-newspaper content-type-icon"></i>';
              echo '<label for="art'.$article['art_id'].'">'.mb_strtoupper($article['art_name']).'</label>';
              if ($article['art_id'] == 1) {
                echo "<script>console.log(1)</script>";
                echo '<input type="radio" id="art1" name="type" value="1" title="'.$article['art_name'].'" required checked>';
              } else {
                echo '<input type="radio" id="art'.$article['art_id'].'" name="type" value="'.$article['art_id'].'" title="'.$article['art_name'].'" required>';
              }
              echo '</div>';
              $count++;
              if ($count == 5) {
                echo '</div>';
                $count = 1;
              }
            }
          }
          mysqli_close($link);
        ?>
        <input type="hidden" name="step" value="2">
        <div class="row">
          <div class="col-lg-12">
            <div class="continue">
              <button type="submit" class="btn">CONTINUE</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

</body>
<?php include_once('footer.php'); ?>
</html>
