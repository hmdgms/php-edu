<?php
  $urunler=[
    "eleman",
    76234762,
    "adalar",
    ["23","Mustafa","Tek",],
    7657657,
    ["46","Kaan","Ak",["ada","vada",[1231,12312,26436]]],
    "jhjkhkjhkhjkj"
  ];
function yaz($dizi,$katman=1)
{
  foreach ($dizi as $eleman) {
    if(! is_array($eleman))
    {
      echo str_repeat("-", $katman);
      echo $eleman;
      echo "<br>";
    }
    else{
      yaz($eleman,$katman+1);
    }
  }
}
yaz($urunler);
 ?>
