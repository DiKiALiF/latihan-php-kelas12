<?php

$menu = [
    ['nama' => "Olahraga",
        'submenu' => [['cabang' => "Sepakbola",
            'dunia' => [['bidang' => "Sepakbola Nasional"],
                        ['bidang' => "Sepakbola Internasional"]]],
        ['cabang' => "Bulutangkis",
            'dunia' => [['bidang' => "Bulutangkis Nasional"],
                        ['bidang' => "Bulutangkis Internasional"]]],
        ['cabang' => "Atletik",
            'dunia' => [['bidang' => "Atletik Nasional"],
                        ['bidang' => "Atletik Internasional"]]]]],
    ['nama' => "Ekonomi",
        'submenu' => [['cabang' => "Saham",
            'dunia' => [['bidang' => "Saham Nasional"],
                        ['bidang' => "Saham Internasional"]]],
        ['cabang' => "Bank",
            'dunia' => [['bidang' => "Bank Nasional"],
                        ['bidang' => "Bank Internasional"]]]]],                   
    ['nama' => "Politik",
        'submenu' => [['cabang' => "Partai",
            'dunia' => [['bidang' => "Partai Nasional"],
                        ['bidang' => "Partai Internasional"]]]]]
    ];

echo "Artikel : Detik.com";
echo "<br>";
echo "Isi berita : ";
echo "<br><br>";

foreach($menu as $menu2){    
    echo "<li>";
    echo $menu2['nama'];
    echo "</li>";

foreach($menu2['submenu'] as $menu3){
    echo "<ul><li>";
    echo $menu3['cabang'];
    echo "</li></ul>";

foreach($menu3['dunia'] as $menu4){
    echo "<ul><ul><li>";
    echo $menu4['bidang'];
    echo "</li></ul></ul>";

}
}
}

?>