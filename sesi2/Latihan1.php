<?php
    $judulpage ="Latihan Script PHP";
    $konten ="<h3>Latihan Script PHP</h3>";
    $konten .="<p>Dasar Penulisan PHP</p><ul><li>Penulisan Script PHP bersifat case sensitif</li><li>Setiap akhir baris di tandai dengan titik koma</li></ul>"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title><?=$judulpage;?></title>
</head>
<body>
    <?php
    echo $konten;
    ?>
    
</body>
</html>