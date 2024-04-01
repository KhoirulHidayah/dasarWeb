<?php
// Lokasi penyimpanan file yang diunggah 
$targetDirectory = "images/";
// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) { 
    mkdir($targetDirectory, 0777, true);
}
if ($_FILES['gambar']['name'][0]) {
    $totalFiles = count($_FILES['gambar']['name']);
    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['gambar']['name'][$i];
        $targetFile = $targetDirectory.$fileName;
        // Validasi tipe file dan ukuran file
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");
        $maxFileSize = 5 * 1024 * 1024; // 5 MB
        if (in_array($fileType, $allowedExtensions) && $_FILES['gambar']['size'][$i] <= $maxFileSize) {
            // Pindahkan file yang diunggah ke direktori penyimpanan
            if (move_uploaded_file($_FILES['gambar']['tmp_name'][$i], $targetFile)) { 
                echo "Gambar $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah gambar $fileName.<br>";
            }
        } else {
            echo "File $fileName tidak valid atau melebihi ukuran maksimum yang diizinkan.<br>";
        }
    }
} else {
    echo "Tidak ada gambar yang diunggah.";
}
