<?php

class Dikdortgen
{
  // alanları/özellikleri tanımladık
  var $genislik;
  var $yukseklik;
//kurucuyu tanımladık
  function __construct($a, $b)
  {
    $this->genislik=$a;
    $this->yukseklik=$b;
  }
//davranışları tanımladık
  function Cevre()
  {
    return 2 * ( $this->genislik + $this->yukseklik);
  }
  function Alan()
  {
    return  $this->genislik * $this->yukseklik;
  }
}

$dk=new Dikdortgen(5, 10);
$dik=new Dikdortgen(7, 15);
//$dk->genislik=5;
//$dk->yukseklik=10;

echo "<strong>";
echo "1. Dikdörtgen";
echo "</strong>";
echo "<br>";
echo "Genişlik=".$dk->genislik;
echo "<br>";
echo "Yükseklik=".$dk->yukseklik;
echo "<br>";
echo "Alan=".$dk->Alan();
echo "<br>";
echo "Çevre=".$dk->Cevre();

echo "<hr>";
echo "<strong>";
echo "2. Dikdörtgen";
echo "</strong>";
echo "<br>";
echo "Genişlik=".$dik->genislik;
echo "<br>";
echo "Yükseklik=".$dik->yukseklik;
echo "<br>";
echo "Alan=".$dik->Alan();
echo "<br>";
echo "Çevre=".$dik->Cevre();


 ?>
