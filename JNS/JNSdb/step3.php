<?php
if(isset($_SESSION['jns_session'])) {
  header("Location: step4.php");
}
include_once('header.php');

//Check for login
if(isset($_POST['user_login'])) {
  //Prevent SQL injection
  $email = filter_var(trim($_POST['user_login']), FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass_login']), FILTER_SANITIZE_STRING);
  //Encrypt Password
  $encrypted_pass = hash('sha256', $pass);
  $search_user = mysqli_query($link, "SELECT * FROM users WHERE user_email='$email'");
  if($search_user) {
    $pass = filter_var($_POST['pass_login'], FILTER_SANITIZE_STRING);
    $encrypted_pass = hash('sha256', $pass);
    var_dump($encrypted_pass);
    $sql = "SELECT * FROM users WHERE user_email='$email' AND password='$encrypted_pass'";
    $search_user = mysqli_query($link, $sql);
    mysqli_close($link);
    if ($search_user) {
      foreach ($search_user as $user) {
        if($user['is_deleted'] == 1) {
          echo "<script>swal('Error', 'This Email has been suspended by the admin', 'error');</script>";
        } else {
          //Start session
          $_SESSION['user_id'] = $user['user_id'];
          $_SESSION['user_name'] = $user['user_name'];
          $_SESSION['user_lastname'] = $user['user_lastname'];
          $_SESSION['user_email'] = $user['user_email'];
          $_SESSION['jns_session'] = rand(1,2000);
          $_SESSION['order'] = $_POST;
          header("Location: step4.php");
        }
      }
    } else {
      echo "<script>swal('Error', 'Wrong credentials, try again.', 'error');</script>";
    }
  } else {
    echo "<script>swal('Error', 'Email not registered', 'error');</script>";
  }
}
//Check for register
if(isset($_POST['user'])) {
  //Prevent SQL injection
  $email = filter_var(trim($_POST['user']), FILTER_SANITIZE_STRING);
  $search_user = mysqli_query($link, "SELECT * FROM users WHERE user_email='$email'");
  if($search_user->num_rows == 0) {
    $pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
    $encrypted_pass = hash('sha256', $pass);
    mysqli_query($link, "INSERT INTO users (user_email,password) VALUES ('$email','$encrypted_pass')");
    $last_id = $link->insert_id;
    $search_user = mysqli_query($link, "SELECT * FROM users WHERE user_id=$last_id");
    mysqli_close($link);
    foreach ($search_user as $user) {
      //Start session
      $_SESSION['user_id'] = $user['user_id'];
      $_SESSION['user_name'] = $user['user_name'];
      $_SESSION['user_lastname'] = $user['user_lastname'];
      $_SESSION['user_email'] = $user['user_email'];
      $_SESSION['jns_session'] = rand(1,2000);
      $_SESSION['order'] = $_POST;
      header("Location: step4.php");
    }
  } else {
    echo "<script>swal('Error', 'Email already registered', 'error');</script>";
  }
}
?>
  <body>
    <div class="container order-account col-md-12">
      <div class="row">
        <div class="col-lg-12">
          <div class="order-options-title">ACCOUNT DETAILS</div>
        </div>
      </div>
      <div class="row col-md-12">
        <form method="post">
          <div class="account-title">ALREADY HAVE AN ACCOUNT?</div>
          <div class="form-row accounts">
            <div id="select_option_1" class="email-type">
              <i class="fas fa-user-alt account-icon"></i>
              <input type="email" name="user_login" class="user-control" placeholder="Enter email" required>
            </div>
            <div id="select_option_1" class="password-type">
              <i class="fas fa-at account-icon"></i>
              <input type="password" name="pass_login" class="pass-control" placeholder="Password" required>
            </div>
          </div>
          <input type="hidden" name="step" value="4">
          <input type="hidden" name="type" value="<?php echo $_POST['type']?>">
          <input type="hidden" name="words" value="<?php echo $_POST['words']?>">
          <input type="hidden" name="quantity" value="<?php echo $_POST['quantity']?>">
          <input type="hidden" name="turnaround" value="<?php echo $_POST['turnaround']?>">
          <input type="hidden" name="quality" value="<?php echo $_POST['quality']?>">
          <input type="hidden" name="total" value="<?php echo $_POST['total']?>">
          <div class="form-row">
            <div class="col-lg-12">
              <div class="continue">
                <button type="submit" name="button" class="btn">LOGIN</button>
              </div>
            </div>
          </div>
        </form>
        <form method="post">
          <div class="account-title">REGISTER A NEW ACCOUNT</div>
          <div class="form-row accounts">
            <div id="select_option_2" class="email-type">
              <i class="fas fa-user-alt account-icon"></i>
              <input type="email" name="user" class="user-control" placeholder="Enter email" required>
            </div>
            <div id="select_option_2" class="password-type">
              <i class="fas fa-at account-icon"></i>
              <input type="password" name="pass" class="pass-control" placeholder="Password" required>
            </div>
          </div>
          <div class="form-row">
            <div class="col-lg-12">
              <div class="continue">
                <button type="submit" name="button" class="btn">REGISTER</button>
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

<?php include_once('footer.php'); ?>

</body>
</html>
