<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
        echo "--Fungsi Rekrusif--<br>";
        echo "<br>";
        //function tampilkanHaloDunia(){
          //  echo "Halo Dunia! <br>";

            //tampilkanHaloDunia();
        //}
        //tampilkanHaloDunia();

        function tampilkanAngka(int $jumlah, int $indeks = 1){
            echo "Perulangan ke-($indeks) <br>";

            //panggil diri sendiri selama $indeks <= $jumlah
            if ($indeks < $jumlah){
                tampilkanAngka($jumlah, $indeks+1);
            }
        } 
        tampilkanAngka(20);    
        
        echo "<br>";
        echo "--Kasus Menu Bertingkat--<br>";
        echo "<br>";
        $menu =[
            [
                "nama" => "Beranda"
            ],
            [
                "nama" => "Berita",
                "subMenu" => [
                    [
                        "nama" => "Wisata",
                        "subMenu" => [
                            [
                                "nama" => "Pantai"
                            ],
                            [
                                "nama" => "Gunung"
                            ]
                        ]
                    ],
                    [
                        "nama" => "Kuliner"
                    ],
                    [
                        "nama" => "Hiburan"
                    ]
                ]
            ],
            [
                "nama" => "Tentang"
            ],
            [
                "nama" => "Kotak"
            ]
        ];
        
        function tampilanMenuBertingkat (array $menu) {
            echo "<ul>";
            foreach($menu as $key => $item) {
                echo "<li>{$item['nama']}";
                if (isset($item['subMenu'])) {
                    tampilanMenuBertingkat($item['subMenu']);
                }
                echo "</li>";
            }
            echo"</ul>";
        }
        tampilanMenuBertingkat($menu);
        ?>
    </body>
</html>