<?php
$dizi=array("ada","ds","liman"=>"Bakırköy Feribot Limanı","grafi","Bağcılar","ilce"=>"Güngören",);

for ($i=0; $i < count($dizi); $i++) {
  echo $dizi[$i];
  if ($i<count($dizi)-1) {
    echo " - ";
  }
}
echo "<hr>";
foreach ($dizi as $key => $value) {
  echo $key;
  echo "-";
  echo $value."<br>";
}
 ?>
