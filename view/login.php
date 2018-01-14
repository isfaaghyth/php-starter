<?php include_once '../public/header.php'; ?>
<?php include_once '../app/data/User.php'; ?>
<?php if (isset($_SESSION['login'])) header("location:home.php"); ?>

<section id="login">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
                <h1>Masuk</h1>
                    <form role="form" action="<?php $_PHP_SELF ?>" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="me@mail.com">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <span class="character-checkbox" onclick="showPassword()"></span>
                            <span class="label">Show password</span>
                        </div>
                        <input type="submit" id="btn-login" name="login" class="btn btn-custom btn-primary btn-block" value="Log in">
                    </form>
                    <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Forgot your password?</a>
                    <hr>
        	    </div>
    		</div>
    	</div>
    </div>
</section>

<?php
   if (isset($_POST['login'])) {
      $email = $_POST['email'];
      $pass = $_POST['password'];
      $users = new User();
      foreach($users->getByEmail($email) as $user):
         if (isset($user['email'])) {
            if ($user['password'] == $pass) {
               $_SESSION['login'] = true;
               header("location:home.php");
               break;
            } else {
               header("location:login.php?err=401");
            }
         } else {
            header("location:login.php?err=403");
         }
      endforeach;
   }
?>

<?php include_once '../public/footer.php'; ?>
