<?php

echo "<p>Diketahui alas sebuah segitiga siku - siku adalah 5cm dan tingginya sebesar 3cm.
<br>Berapa luas segitiga siku - siku tersebut?</p>";
$x = 5;
$y = 3;
$luas = $x * $y/2;
echo "Diketahui:
<ul>
  <li>Alas =  " .$x. " cm</li>
  <li>Tinggi = " .$y. " cm</li>
  <li>Luas = Alas * Tinggi /2</li>
</ul>";
echo "Jadi luas segitiga tersebut adalah " . $luas . " cm<sup>2</sup> ";


echo "<p>Diketahui jari - jari suatu lingkaran adalah 7cm.
<br>Berapa luas lingkaran tersebut?</p>";
$r = 7;
$lingkaran = 22/7 * $r * $r;
echo "Diketahui:
<ul>
  <li>Jari - jari =  " .$r. " cm</li>
  <li>Luas = π * r<sup>2</sup></li>
</ul>";
echo "Jadi luas lingkaran tersebut adalah " . $lingkaran . " cm<sup>2</sup>";

echo "<p>Diketahui alas suatu jajar genjang adalah 3cm , dan tingginya 4cm.
<br>Berapa luas dari jajar genjang tersebut?</p>";
$a = 3;
$t = 4;
$jajar = $a * $t;
echo "Diketahui:
<ul>
  <li>Alas =  " .$a. " cm</li>
  <li>Tinggi =  " .$t. " cm</li>
  <li>Luas = Alas * Tinggi</li>
</ul>";
echo "Jadi luas jajar genjang tersebut adalah " . $jajar . " cm<sup>2</sup>";

 ?>
