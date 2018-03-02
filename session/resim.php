<?php
session_start();
// header bloğunda reim formatı tanımlanır
header("Content-type:image/jpeg");
//resmin özellikleritanımları

// resmin boyutları
$resim=imagecreatetruecolor(150,50);
// resmin rengi
imagecolorallocate($resim, rand(0,255), rand(0,255), rand(0,255));
$yaziRengi = imagecolorallocate($resim, rand(0,255), rand(0,255), rand(0,255));
//doğrulama kodu
$guvenlik=rand(1000,9999);
imagestring($resim, 9 , 20, 15 , $guvenlik, $yaziRengi);
//resmi oluştur
imagejpeg($resim);
//resmi serverda meşgul etmemesi için kaldır
imagedestroy($resim);
$_SESSION["guvenlik"]=$guvenlik;
 ?>
