<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
        function perkenalan(){
            echo "Assalamualaikum, ";
            echo "Perkenalkan, nama saya Khoirul Hidayah<br/>";
            echo "Senang berkenalan dengan Anda<br/>";
        }

        //memanggil fungsi yang sudah dibuat (dua kali)
        perkenalan();
        perkenalan();

        echo "<br>";
        echo "--Fungsi Dengan Parameter--<br>";
        echo "<br>";

        //membuat fungsi
        function perkenalan2($nama, $salam){
            echo $salam.",";
            echo "Perkenalan, nama saya ".$nama."<br/>";
            echo "Senang berkenalan dengan Anda <br/>";
        }

        //memanggil fungsi yang sudah dibuat
        perkenalan2("Hamdana", "Hallo");

        echo "<hr>";

        $saya="Elok";
        $ucapanSalam="Selamat Pagi";

        //memanggil lagi
        perkenalan2($saya, $ucapanSalam);

        echo "<br>";
        echo "--Fungsi Dengan Nilai Default--<br>";
        echo "<br>";

        //memanggil fungsi yang sudah dibuat
        function perkenalan3($nama, $salam="Assalamualaikum"){
            echo $salam.",";
            echo "Perkenalan, nama saya ".$nama."<br/>";
            echo "Senang berkenalan dengan Anda <br/>";
        }

        //memanggil fungsi yang sudah dibuat
        perkenalan3("Hamdana", "Hallo");

        echo "<hr>";

        $saya="Elok";
        $ucapanSalam="Selamat Pagi";

        //memanggil lagi tanpa mengisi parameter salam
        perkenalan3($saya);

        echo "<br>";
        echo "--Fungsi Dengan Membalik Nilai--<br>";
        echo "<br>";

        //membuat fungsi
        function hitungUmur($thn_lahir, $thn_sekarang){
            $umur = $thn_sekarang - $thn_lahir;
            return $umur;
        }

        echo "Umur saya adalah ".hitungUmur(2004, 2024)." tahun";
        
        echo "<br><br>";
        echo "--Memanggil Fungsi di dalam fungsi--<br>";
        echo "<br>";

        //membuat fungsi
        function hitungUmur2($thn_lahir, $thn_sekarang){
            $umur = $thn_sekarang - $thn_lahir;
            return $umur;
        }
        function Perkenalan4($nama, $salam="Assalamualaikum") {
            echo $salam.",";
            echo "Perkenalkan, nama saya".$nama."<br/>";
            //memanggil fungsi lain
            echo "Saya berusia ".hitungUmur2(2004, 2024)."tahun<br/>";
            echo "Senang berkenalan dengan anda <br/>";
        }
        
        //memanggil fungsi perkenalan
        Perkenalan4("Elok");
        
    ?>
    </body>
</html>