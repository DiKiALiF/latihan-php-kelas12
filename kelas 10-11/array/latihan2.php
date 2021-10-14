<html>
<head>
<body>
 <style>
     .kotak {
        width:70px;
        height:60px;
        text-align:center;
        margin:3px;
        line-height:30px;
        float:left;
        transition:0.5s;
		background:red;
     }
    div:hover {
        width:70px;
        height:60px;
        transform:rotate(180deg);
    }
     </style>
     </head>

 <h1>Latihan Array Kombinasi</h1>
<?php
$angka = [1,2,3,4,5];
foreach ($angka as $a) : ?>
<div class="kotak"><?php echo "<h2>$a</h2>"?></div>
<?php endforeach ?>
</body>
</html>