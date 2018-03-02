<?php
  session_start();
  if (isset( $_POST["guvenlik"]) &&  $_POST["guvenlik"]==$_SESSION["guvenlik"])
  {
  if (isset( $_POST["email"]) && isset( $_POST["password"])) {
    if( $_POST["email"]=="ada@ada.com" &&  $_POST["password"]=="123" )
    {
      $_SESSION["user"]= $_POST["email"];
      $_SESSION["mesaj"]="Giriş Başarılı";
    }
    else {
      $_SESSION["mesaj"]="Kullanıcı adı veya parola hatalı!!";
    }
  }
  else {
    $_SESSION["mesaj"]="Kullanıcı adı veya parola bilgileri girilmedi!!!";
  }
}else {
  $_SESSION["mesaj"]="Hatalı Güvenlik Kodunu Girdiniz!!";
}
  header("Location: index.php");
 ?>
