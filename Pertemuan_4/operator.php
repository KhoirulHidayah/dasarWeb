<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$bisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a ==$b;
$hasilTidakSama = $a !=$b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

$hasilIndentik =$a == $b;
$hasilTidakIndentik =$a !== $b;

//restoran
$restoranKursiTotal = 45;
$restoranKursiTerisi = 28;

$kursiKosong = $restoranKursiTotal - $restoranKursiTerisi;
$persenKursiKosong = ($kursiKosong / $restoranKursiTotal) * 100;

echo "Jumlah kursi yang masih kosong: {$kursiKosong} kursi<br>";
echo "Persentase kursi yang masih kosong: {$persenKursiKosong}%<br>";

?>
