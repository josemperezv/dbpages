<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Order - Step 1</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  </head>

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
    <div class="container order-main">

      <div class="row">
        <div class="col-lg-12">
          <div class="order-main-title">SELECT THE TYPE OF CONTENT</div>
        </div>
      </div>

      <div class="row articles">
        <form class="" action="step2.php" method="post">
          <div class="form-row">
          <div id="select_content_1" class="content-type active">
            <i class="far fa-newspaper content-type-icon"></i>
            <label for="art1">ARTICLE WRITING</label>
            <input type="radio" id="art1" name="type" value="1" title="ARTICLE WRITING" required checked>
          </div>

          <div id="select_content_2" class="content-type">
            <i class="far fa-newspaper content-type-icon"></i>
            <label for="art2">BLOG WRITING</label>
            <input type="radio" id="art2" name="type" value="2" title="BLOG WRITING">
          </div>

          <div id="select_content_3" class="content-type">
            <i class="far fa-newspaper content-type-icon"></i>
            <label for="art3">WEBSITE WRITING</label>
            <input type="radio" id="art3" name="type" value="3" title="WEBSITE WRITING">
          </div>

          <div id="select_content_4" class="content-type">
            <i class="far fa-newspaper content-type-icon"></i>
            <label for="art4">SOCIAL MEDIA CONTENT</label>
            <input type="radio" id="art4" name="type" value="4" title="SOCIAL MEDIA CONTENT">
          </div>
        </div>

        <div class="form-row">
          <div id="select_content_5" class="content-type">
            <i class="far fa-newspaper content-type-icon"></i>
            <label for="art5">EMAILS & NEWSLETTERS</label>
            <input type="radio" id="art5" name="type" value="5" title="EMAILS & NEWSLETTERS">
          </div>

          <div id="select_content_6" class="content-type">
            <i class="far fa-newspaper content-type-icon"></i>
            <label for="art6">E-BOOKS</label>
            <input type="radio" id="art6" name="type" value="6" title="E-BOOKS">
          </div>

          <div id="select_content_7" class="content-type">
            <i class="far fa-newspaper content-type-icon"></i>
            <label for="art7">CREATIVE WRITING</label>
            <input type="radio" id="art7" name="type" value="7" title="CREATIVE WRITING">
          </div>

          <div id="select_content_8" class="content-type">
            <i class="far fa-newspaper content-type-icon"></i>
            <label for="art8">TECHNICAL WRITING</label>
            <input type="radio" id="art8" name="type" value="8" title="TECHNICAL WRITING">
          </div>
        </div>

        <div class="form-row">
          <div id="select_content_9" class="content-type">
            <i class="far fa-newspaper content-type-icon"></i>
            <label for="art9">PRODUCT DESCRIPTIONS</label>
            <input type="radio" id="art9" name="type" value="9" title="PRODUCT DESCRIPTIONS">
          </div>

          <div id="select_content_10" class="content-type">
            <i class="far fa-newspaper content-type-icon"></i>
            <label for="art10">PRODUCT REVIEWS</label>
            <input type="radio" id="art10" name="type" value="10" title="PRODUCT REVIEWS">
          </div>

          <div id="select_content_11" class="content-type">
            <i class="far fa-newspaper content-type-icon"></i>
            <label for="art11">RESUMES & COVER LETTERS</label>
            <input type="radio" id="art11" name="type" value="11" title="RESUMES & COVER LETTERS">
          </div>

            <div id="select_content_12" class="content-type">
              <i class="far fa-newspaper content-type-icon"></i>
              <label for="art12">COPYWRITING</label>
              <input type="radio" id="art12" name="type" value="12" title="COPYWRITING">
            </div>
          </div>

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