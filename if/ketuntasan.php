<?php

$nilai = 75;
if ($nilai >= 75 && $nilai <= 100) {
    echo "Lulus";
}
else if ($nilai < 75 && $nilai >= 0) {
    echo "Tidak Lulus";
}else{
    echo "Nilai Tidak Valid";
}

?>