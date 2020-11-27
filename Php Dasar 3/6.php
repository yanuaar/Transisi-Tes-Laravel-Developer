<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Dasar 3 - Nomor 6</title>
</head>
<body>
    
<?php

$arr = [ 
    ['f', 'g', 'h', 'i'],
    ['j', 'k', 'p', 'q'],
    ['r', 's', 't', 'u']
];

function cari($arrList = array(), $params){
    $param = $params;
    $arr1 = str_split($param);
    
    $abc = array();
    $as = 0;
    
    for ($i=0; $i < 3; $i++){
        for ($t=0; $t < 4; $t++){
            $abc[$as] = $arrList[$i][$t];
            $as++;
        }
    }

    $qw = count($arr1);
    $status = "true";
    for ($p=0; $p < $qw ; $p++){
        if (in_array($arr1[$p], $abc)) {
            $status="true";
        }
        else{
            $status="false";
            break;
        }
    }
    
    return $status;

}

echo cari($arr, 'fghi');
echo '<br>';
echo cari($arr, 'fghp'); 
echo '<br>';
echo cari($arr, 'fjrstp');

?>

</body>
</html>