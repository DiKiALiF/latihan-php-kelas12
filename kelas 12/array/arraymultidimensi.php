<?php

$data = [
    ['nama' => "Palah",
     'buah' => [
         ['jenis' => "Mangga"],
         ['jenis' => "Apel"],
         ['jenis' => "Pear"]
     ]
    ]
    // ['nama' => "Meylani",
    //  'buah' => "Anggur"]
];

foreach($data as $data2){
    echo "Nama pemilik: " . $data2['nama'] . "<br>";
    echo "Buah kesukaan: ";
    
foreach($data2['buah'] as $data3){
    echo "<li>";
    echo $data3['jenis'];
    echo "</li>";
    
}
}

?>