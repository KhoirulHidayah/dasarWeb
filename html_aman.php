<!DOCTYPE html>
<html>
<head>
    <title>HTML Aman</title>
</head>
<body>

<?php
$input = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa apakah data 'input' telah dikirimkan melalui POST
    if(isset($_POST['input'])) {
        $input = $_POST['input'];
        // Menghindari serangan XSS dengan mengonversi karakter khusus
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    }

    // Memeriksa apakah elemen 'email' telah didefinisikan dalam $_POST
    $email = "";
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
        // Memeriksa apakah input adalah email yang valid
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Lanjutkan dengan pengolahan email yang aman
            echo "Email yang dimasukkan adalah email yang valid.";
        } else {
            // Tangani input yang tidak valid
            echo "Email yang dimasukkan tidak valid.";
        }
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Input: <input type="text" name="input" value="<?php echo $input; ?>"><br><br>
    Email: <input type="email" name="email" value="<?php echo $email; ?>"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
// Menampilkan input yang telah diamanahkan
echo "Input yang diamankan: " . $input;
?>

</body>
</html>
