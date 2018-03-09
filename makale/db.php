<?php

// mysql'e bağlan
$baglanti = mysqli_connect('localhost', 'root', '');
// hata varsa uyar ve çalışmayı durdur
if(!$baglanti) {
    echo 'Mysqli bağlantı hatası: ' . mysqli_connect_errno();
    exit;
}
// deneme isimli veritabanını seç
mysqli_select_db($baglanti,'deneme');
// personel tablosundan kullanıcı adını seç
$sorgu = mysqli_query($baglanti, 'select username from personel');
// sonuçları ekrana yazdır
while($sonuc = mysqli_fetch_assoc($sorgu)) {
    echo $sonuc['username'].'<br />';
}
// satır sayısını ekrana yazdır
echo 'Sorgu sonucu ' . mysqli_num_rows($sorgu). ' kayıt listelenmiştir.';
// veritabanı bağlantısını kapat
mysqli_close($baglanti);
?>
----------------------------------------------------------------------------------------------------------
<?php
$con=mysqli_connect("localhost","my_user","my_password","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT Lastname,Age FROM Persons ORDER BY Lastname";

if ($result=mysqli_query($con,$sql))
  {
  while ($obj=mysqli_fetch_object($result))
    {
    printf("%s (%s)\n",$obj->Lastname,$obj->Age);
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);
?>
