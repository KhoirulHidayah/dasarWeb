<!DOCTYPE html>
<html>
<head>
    <title>Unggah Gambar</title>
</head>
<body>
    <form id="upload-form" action="upload_ajax_gambar.php" method="post" enctype="multipart/form-data">
        <input type="file" name="gambar[]" id="gambar" multiple="multiple" accept="image/jpeg, image/png, image/gif">
        <input type="submit" name="submit" value="Unggah">
    </form>
    <div id="status"></div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="upload_gambar.js"></script>
</body>
</html>
