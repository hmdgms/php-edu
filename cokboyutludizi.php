<?php

  $urunler=[
    ["23","Mustafa","Tek",],
    ["46","Kaan","Ak",],

  ];
foreach ($urunler as $dizi) {
  foreach ($dizi as $key => $value) {
    echo $value;
    if($value!=$dizi[count($dizi)-1])  echo " - ";
  }
  echo "<br>";
}
 ?>
