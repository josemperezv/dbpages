<?php include_once('header.php'); ?>

<body>
<?php
if( $_POST['total'] && $_POST['type'] && $_POST['words'] && $_POST['quality'] && $_POST['turnaround']) {
  echo "<script>swal('Done!', 'Your order has been placed', 'success');
  setTimeout(function(){
    window.location.replace('index.php');
  }, 3000);
  </script>";
} else {
  echo "<script>swal('Ooops!', 'Something went wrong :(, try again!', 'error');
  setTimeout(function(){
    window.location.replace('index.php');
  }, 3000);
  </script>";
}
?>
</body>
