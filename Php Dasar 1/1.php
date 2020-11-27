<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nilai = array(72,65,73,78,75,74,90,81,87,65,55,69,72,78,79,91,100,40,67,77,86);
    $jumlah = 0;
    $max = max($nilai);
    $min = min($nilai);
    
    for ($i=0; $i < count($nilai); $i++) { 
        echo $nilai[$i] . ' ';
        $jumlah+=$nilai[$i];
    }
    
    echo '<br> Nilai Rata- rata adalah ' . $jumlah/count($nilai);
    echo '<br> Nilai Tertinggi adalah ' . $max;
    echo '<br> Nilai Terendah adalah ' . $min;
    ?>
</body>
</html>