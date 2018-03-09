<?php
$host='localhost';
$db_kullanici='root';
$parola='12345';
// mysql'e bağlan
$baglanti = mysqli_connect($host, $db_kullanici, $parola);
// hata varsa mesaj ver ve çalışmayı durdur
if(!$baglanti) {
    echo 'Mysqli bağlantı hatası: ' . mysqli_connect_errno();
    exit;
    //die("Mysql hatası:".mysqli_connect_errno());
}
// deneme isimli veritabanını seç
mysqli_select_db($baglanti,'makale');
// personel tablosundan kullanıcı adını seç
$sorgu = mysqli_query($baglanti, 'select * from makaleler');
// array/dizi dönen veriyi ekrana yazdır
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/master.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <title>Makale Sistemi</title>
</head>
<body>
  <div class="container containe-fluid">
  <?php
  while($sonuc = mysqli_fetch_assoc($sorgu)) : ?>
  <h2><?= $sonuc['baslik'] ?></h2>
  <img src="resimler/<?= $sonuc['resim'] ?>" title="<?= $sonuc['baslik'] ?>" class="img-rounded center-block">
  <h3><?= $sonuc['ozet'] ?></h3>
  <p><?= $sonuc['icerik'] ?></p>
  <hr>
  <?php endwhile;
  /*
  ** Object dönen verinin yazdırılması

  while($sonuc = mysqli_fetch_object($sorgu)) {
      echo $sonuc->ad.' '.$sonuc->soyad.'<br />';
  }
  */
  // satır sayısını ekrana yazdır
  echo 'Sorgu sonucu ' . mysqli_num_rows($sorgu). ' kayıt listelenmiştir.';
  // veritabanı bağlantısını kapat
  mysqli_close($baglanti);
   ?>
 </div>
</body>
</html>
