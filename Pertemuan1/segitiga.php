<?php
/*
NIM : 210511041
Nama : Nafisa Nurul Jasmine
Kelas : D
*/
echo "<h3>Menghitung Luas Segitiga</h3>";
// variabel
$alas = 5;
$tinggi = 8;
$a = 5;
$b = 8;
$c = 8;


// rumus
$luas = 1/2*$alas*$tinggi;
$keliling = 2*$a+$b+$c;

//output
echo "Alas = " . $alas;
echo "<br/>";
echo "Tinggi = " . $tinggi;
echo "<br/>";
echo "sisi a = " . $a;
echo "<br/>";
echo "sisi b = " . $b;
echo "<br/>";
echo "sisi c = " . $c;
echo "<br/>";
echo "Luas = " . $luas;
echo "<br/>";
echo "Keliling = " . $keliling;
?>