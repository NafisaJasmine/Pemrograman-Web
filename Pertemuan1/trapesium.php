<?php
/*
NIM : 210511041
Nama : Nafisa Nurul Jasmine
Kelas : D
*/
echo "<h3>Menghitung Luas Trapesium</h3>";
// variabel
$tinggi = 4;
$a = 10;
$b = 5;
$c = 7;
$d = 5;

// rumus
$luas = $a+$b/2 * $tinggi;
$keliling = $a+$b+$c+$d;

//output
echo "Tinggi = " . $tinggi;
echo "<br/>";
echo "sisi a = " . $a;
echo "<br/>";
echo "sisi b = " . $b;
echo "<br/>";
echo "sisi c = " . $c;
echo "<br/>";
echo "sisi d = " . $d;
echo "<br/>";
echo "Luas = " . $luas;
echo "<br/>";
echo "Keliling = " . $keliling;
?>