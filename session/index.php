<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <title>Document</title>
  <link rel="stylesheet" href="signin.css">
</head>
 <body class="text-center">
   <?php session_start(); ?>
   <div class="container-fluid">

   <div class="alert alert-success" role="alert">
     <?php
       if(isset($_SESSION["user"])) echo $_SESSION["user"]." - "; ?>
       <?php  if(isset($_SESSION["user"])) : ?>
        <a href="logout.php">Çıkış Yap</a>
      <?php else: ?>
        Giriş Yapınız...
      <?php endif;  ?>
      <?php
         if(isset($_SESSION["mesaj"]))
       {
         echo $_SESSION["mesaj"];
        // unset($_SESSION["mesaj"]);
       }
      ?>

   </div>
   <form class="form-signin" action="login.php" method="post">
     <h1 class="h3 mb-3 font-weight-normal">Kullanıcı Bilgileri ile Giriş Yapınız</h1>
     <img src="resim.php" class="img-fluid img-thumbnail" alt="">
     <label for="guvenlik" class="sr-only">Güvenlik Kodu</label>
     <input type="number" name="guvenlik" id="guvenlik" class="form-control" placeholder="Güvenlik Kodu" required autofocus>
     <label for="inputEmail" class="sr-only">Email address</label>
     <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required >
     <label for="inputPassword" class="sr-only">Parola</label>
     <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Parola" required>
     <div class="checkbox mb-3">
       <label>
         <input type="checkbox" value="remember-me"> Remember me
       </label>
     </div>

     <button class="btn btn-lg btn-primary btn-block" type="submit">Giriş Yap</button>
     <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
   </form>
  </div>

</body>
</html>
