<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>PHP Starter</title>
      <link rel="stylesheet" href="../public/css/bootstrap.min.css">
      <link rel="stylesheet" href="../public/css/style.css">
   </head>
   <body>
      <?php session_start(); ?>
      <?php if(isset($_SESSION['login'])): ?>
         <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                   <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
               </button> <a class="navbar-brand" href="../index.php">Hai!</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Profile</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="../public/_destroy.php">Logout</a></li>
               </ul>
            </div>
         </nav>
      <?php endif; ?>
