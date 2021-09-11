<?php

$jenis = "Makanan";
$nama = "Ayam Goreng";
$jumlah = 3;
$mie = 15000;
$nasi = 10000;
$ayam = 20000;
$air = 8000;
$jus = 10000;
$kopi = 12000;

echo "<code>+++ Restoran Colak Colek +++ <br>";
echo "============================</code><br>";

if($jenis == "Makanan" || $jenis == "makanan" || $jenis == "MAKANAN") 
{
    echo "Jenis Makanan : $jenis <br>";
    if ($nama == "Ayam Goreng" || $nama == "ayam goreng" || $nama == "AYAM GORENG" || $nama == "Ayam goreng")
    {
        echo "Nama Pesanan : $nama <br>";
        echo "Jumlah : $jumlah <br>";
        $total = $ayam * $jumlah;
        echo "Total : $total <br>";
        if ($total >= 50000)
        {
            $diskon = 20/100 * $total;
            echo "Diskon 20% : $diskon <br>";
            $bayar = $total - $diskon;
            echo "Total Bayar : $bayar";
        } else if ($total < 50000)
        {
            echo "Diskon 20% : 0 <br>";
            echo "Total Bayar : $total";
        }
    }
    else if ($nama == "Mie Goreng" || $nama == "mie goreng" || $nama == "MIE GORENG" || $nama == "Mie goreng")
    {
        echo "Nama Pesanan : $nama <br>";
        echo "Jumlah : $jumlah <br>";
        $total = $mie * $jumlah;
        echo "Total : $total <br>";
        if ($total >= 50000)
        {
            $diskon = 20/100 * $total;
            echo "Diskon 20% : $diskon <br>";
            $bayar = $total - $diskon;
            echo "Total Bayar : $bayar";
        } else if ($total < 50000)
        {
            echo "Diskon 20% : 0 <br>";
            echo "Total Bayar : $total";
        }
    }
    else if ($nama == "Nasi Goreng" || $nama == "nasi goreng" || $nama == "NASI GORENG" || $nama == "Nasi goreng")
    {
        echo "Nama Pesanan : $nama <br>";
        echo "Jumlah : $jumlah <br>";
        $total = $nasi * $jumlah;
        echo "Total : $total <br>";
        if ($total >= 50000)
        {
            $diskon = 20/100 * $total;
            echo "Diskon 20% : $diskon <br>";
            $bayar = $total - $diskon;
            echo "Total Bayar : $bayar";
        } else if ($total < 50000)
        {
            echo "Diskon 20% : 0 <br>";
            echo "Total Bayar : $total";
    }
} else {
    echo "404: Not Found";  
} 
}

else if($jenis == "Minuman" || $jenis == "minuman" || $jenis == "MINUMAN") 
{
    echo "Jenis Pesanan : $jenis <br>";
    if ($nama == "Air Mineral" || $nama == "air mineral" || $nama == "AIR MINERAL" || $nama =="Air mineral")
    {
        echo "Nama Pesanan : $nama <br>";
        echo "Jumlah : $jumlah <br>";
        $total = $air * $jumlah;
        echo "Total : $total <br>";
        if ($total >= 50000)
        {
            $diskon = 20/100 * $total;
            echo "Diskon 20% : $diskon <br>";
            $bayar = $total - $diskon;
            echo "Total Bayar : $bayar";
        } else if ($total < 50000)
        {
            echo "Diskon 20% : 0 <br>";
            echo "Total Bayar : $total";
        }
    }
    else if ($nama == "Jus" || $nama == "jus" || $nama == "JUS")
    {
        echo "Nama Pesanan : $nama <br>";
        echo "Jumlah : $jumlah <br>";
        $total = $jus * $jumlah;
        echo "Total : $total <br>";
        if ($total >= 50000)
        {
            $diskon = 20/100 * $total;
            echo "Diskon 20% : $diskon <br>";
            $bayar = $total - $diskon;
            echo "Total Bayar : $bayar";
        } else if ($total < 50000)
        {
            echo "Diskon 20% : 0 <br>";
            echo "Total Bayar : $total";
        }
    }
    else if ($nama == "Kopi" || $nama == "kopi" || $nama == "KOPI")
    {
        echo "Nama Pesanan : $nama <br>";
        echo "Jumlah : $jumlah <br>";
        $total = $kopi * $jumlah;
        echo "Total : $total <br>";
        if ($total >= 50000)
        {
            $diskon = 20/100 * $total;
            echo "Diskon 20% : $diskon <br>";
            $bayar = $total - $diskon;
            echo "Total Bayar : $bayar";
        } else if ($total < 50000)
        {
            echo "Diskon 20% : 0 <br>";
            echo "Total Bayar : $total";
}   
    } else {
        echo "404: Not Found";  
    } 
} else {
    echo"404: Not Found";
}
?>