<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "uploads/"; // Direktori tujuan untuk menyimpan file
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $maxFileSize = 5 * 1024 * 1024;
    if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) { 
            echo "File berhasil diunggah.";

            // Create Thumbnail
            $thumbnailWidth = 200;
            list($width, $height) = getimagesize($targetFile);
            $aspectRatio = $width / $height;
            $thumbnailHeight = round($thumbnailWidth / $aspectRatio);

            $thumbnail = imagecreatetruecolor($thumbnailWidth, $thumbnailHeight);
            $source = imagecreatefromjpeg($targetFile); // Ganti sesuai jenis file yang diunggah (jpeg, png, dll)

            imagecopyresampled($thumbnail, $source, 0, 0, 0, 0, $thumbnailWidth, $thumbnailHeight, $width, $height);

            $thumbnailPath = $targetDirectory . "thumbnail_" . basename($_FILES["fileToUpload"]["name"]);
            imagejpeg($thumbnail, $thumbnailPath); // Ganti sesuai dengan jenis file yang diunggah (jpeg, png, dll)

            imagedestroy($thumbnail);
            imagedestroy($source);

            echo "Thumbnail berhasil dibuat: <img src='$thumbnailPath' alt='Thumbnail'>";
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}
?>
