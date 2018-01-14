<?php
   include_once '../public/header.php';
   //cek session login, klau udah logout, direct ke login
   if (!isset($_SESSION['login'])) {
      header("location:view/login.php");
      die;
   }
?>

<div class="container">
   <div class="row">
      <div class="jumbotron">
        <h1>Hai!</h1>
        <p>Selamat datang.</p>
        <p><a class="btn btn-primary btn-lg" href="https://github.com/isfaaghyth" role="button">Learn more</a></p>
      </div>
   </div>
</div>

<?php include_once '../public/footer.php'; ?>
