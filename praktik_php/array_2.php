<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Data Dosen</title>
        <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        </style>
    </head>
    <body>
        <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'];
            echo"Nama : {$Dosen ['nama']} <br>";
            echo"Domisili : {$Dosen ['domisili']} <br>";
            echo"Jenis Kelamin : {$Dosen ['jenis_kelamin']} <br>";

            echo "<br>";
            echo "--Menambahkan style--<br>";
            echo "<br>";
        ?>

        <h2>Data Dosen</h2>
        <table>
        <tr>
            <th>Detail</th>
            <th>Informasi</th>
        </tr>
        <?php
            foreach ($Dosen as $key => $value) {
                echo "<tr>";
                echo "<td>{$key}</td>";
                echo "<td>{$value}</td>";
                echo "</tr>";
            }
        ?>
    </table>

    </body>
</html>