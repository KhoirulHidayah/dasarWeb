<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form method="post" action="proses_validasi.php">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama">
        <br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"> <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $errors = array();
    // Validasi Nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }
    // Validasi Email
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }
    // Jika ada kesalahan validasi
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // Lanjutkan dengan pemrosesan data jika semua validasi berhasil
        // Misalnya, menyimpan data ke database atau mengirim email
        echo "Data berhasil dikirim: Nama $nama, Email = $email";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>
        <input type="submit" value="Submit">
    </form>
    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                var nama = $("#nama").val();
                var email = $("#email").val();
                var valid = true;
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false; // Perbaikan: tambahkan tanda sama dengan (=) untuk mendefinisikan nilai valid
                } else {
                    $("#nama-error").text(""); // Perbaikan: hapus karakter 'г' yang tidak valid
                }
                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false; // Perbaikan: tambahkan tanda sama dengan (=) untuk mendefinisikan nilai valid
                } else {
                    $("#email-error").text(""); // Perbaikan: hapus karakter 'г' yang tidak valid
                }
                if (!valid) {
                    event.preventDefault(); // Perbaikan: tambahkan tanda seru (!) untuk memastikan valid bernilai false
                    // Menghentikan pengiriman form jika validasi gagal
                }
            });
        });
    </script>
</body>
</html>

//menambahkan password
<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi (Ajax)</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi (Ajax)</h1>
    <form id="myForm" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>
        <input type="button" value="Submit" id="submit">
    </form>
    <div id="result"></div>
    <script>
        $(document).ready(function() {
            $("#submit").click(function() {
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                $.ajax({
                    type: "POST",
                    url: "proses_validasi_ajax.php", // Ganti dengan URL file PHP yang sesuai
                    data: { nama: nama, email: email, password: password },
                    success: function(response) {
                        $("#result").html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = array();
    // Validasi Nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }
    // Validasi Email
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }
    // Validasi Password
    if (empty($password)) {
        $errors[] = "Password harus diisi.";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password minimal terdiri dari 8 karakter.";
    }
    // Jika ada kesalahan validasi
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // Lanjutkan dengan pemrosesan data jika semua validasi berhasil
        // Misalnya, menyimpan data ke database atau mengirim email
        echo "Data berhasil dikirim: Nama $nama, Email = $email, Password = $password";
    }
}
?>
