<?php
if (isset($_FILES['gambar'])) {
    $errors = array();
    $targetDirectory = "images/";

    // Periksa apakah direktori penyimpanan ada, jika tidak maka buat
    if (!file_exists($targetDirectory)) { 
        mkdir($targetDirectory, 0777, true);
    }

    $totalFiles = count($_FILES['gambar']['name']);
    
    // Validasi tipe file yang diunggah (hanya gambar)
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    
    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $file_name = $_FILES['gambar']['name'][$i];
        $file_size = $_FILES['gambar']['size'][$i];
        $file_tmp = $_FILES['gambar']['tmp_name'][$i];
        $file_type = $_FILES['gambar'] ['type'][$i];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Periksa apakah tipe file diizinkan
        if (!in_array($file_ext, $allowedExtensions)) {
            $errors[] = "Ekstensi file $file_name yang diizinkan adalah JPG, JPEG, PNG, atau GIF.";
        }
        if ($file_size > 2097152) {
            $errors[] = "Ukuran file $file_name tidak boleh lebih dari 2 MB.";
        }
        if (empty($errors)) {
            move_uploaded_file($file_tmp, $targetDirectory . $file_name);
            echo "File $file_name berhasil diunggah.<br>";
        } else {
            echo implode("<br>", $errors);
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
