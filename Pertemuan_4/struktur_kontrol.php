<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <=100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<br>";

$jarakSaatIni =0;
$jarakTarget = 500;
$peningkatanHarian =30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<br>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br>";

$skorUjian= [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor";

echo "<br>";

$nilaiSiswa= [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if($nilai < 60){
        echo "Nilai: $nilai(Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai(Lulus) <br>";
}

echo "<br>";

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Mengurutkan nilai dari terendah ke tertinggi
sort($nilaiSiswa);

// Menghapus dua nilai terendah dan dua nilai tertinggi
array_shift($nilaiSiswa);
array_shift($nilaiSiswa);
array_pop($nilaiSiswa);
array_pop($nilaiSiswa);

// Menghitung total nilai yang akan digunakan untuk menentukan nilai rata-rata
$totalNilai = array_sum($nilaiSiswa);

// Menghitung rata-rata nilai
$rataRata = $totalNilai / count($nilaiSiswa);

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $totalNilai <br>";
echo "Rata-rata nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $rataRata";

echo "<br>";
$hargaProduk = 120000;
$diskonPersentase = 20;

if ($hargaProduk > 100000) {
    $diskon = ($diskonPersentase / 100) * $hargaProduk;
    $hargaSetelahDiskon = $hargaProduk - $diskon;
    echo "Harga setelah diskon 20%: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.') . "<br>";
} else {
    echo "Harga tanpa diskon: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
}

echo "<br>";
$poin = 600; // Gantilah nilai ini dengan skor sesuai permainan pemain

$totalSkorText = "Total skor pemain adalah: $poin";
$hadiahTambahanText = ($poin > 500) ? "Apakah pemain mendapatkan hadiah tambahan? YA" : "Apakah pemain mendapatkan hadiah tambahan? TIDAK";

echo $totalSkorText . "<br>" . $hadiahTambahanText;

?>