<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <title>Yönetim Paneli</title>

</head>
 <body class="text-center">
   <?php session_start(); ?>

   <div class="container-fluid">
     <nav class="navbar navbar-light bg-light justify-content-between">
       <?php if(! isset( $_SESSION["user"])): ?>
      <form class="form-inline" action="login.php" method="post">
         <img src="resim.php" class="img-fluid img-thumbnail " height="25px" alt="">
         <input type="number" name="guvenlik" id="guvenlik" class="form-control" placeholder="Güvenlik Kodu" required autofocus>
         <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required >
         <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Parola" required>
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Giriş Yap</button>
      </form>
    <?php else: ?>
      <span><a href="logout.php">Çıkış Yap</a></span>
    <?php endif; ?>
    <?php
       if(isset($_SESSION["mesaj"]))
     {
       echo $_SESSION["mesaj"];
      // unset($_SESSION["mesaj"]);
     }
    ?>
     </nav>
      </div>

  </div>

</body>
</html>
