<?php
/*
NIM : 210511041
Nama : Nafisa Nurul Jasmine
Kelas : D
*/
echo "<h3>Menghitung Luas Belah Ketupat</h3>";
// variabel
$a = 5;
$b = 5;
$c = 5;
$d = 5;
$d1 = 8;
$d2 = 8;



// rumus
$luas = 1/2*$d1*$d2;
$keliling = $a+$b+$c+$d;

//output
echo "sisi a = " . $a;
echo "<br/>";
echo "sisi b = " . $b;
echo "<br/>";
echo "sisi c = " . $c;
echo "<br/>";
echo "sisi d = " . $d;
echo "<br/>";
echo "diagonal 1 = " . $d1;
echo "<br/>";
echo "diagonal 2 = " . $d2;
echo "<br/>";
echo "Luas = " . $luas;
echo "<br/>";
echo "Keliling = " . $keliling;
?>