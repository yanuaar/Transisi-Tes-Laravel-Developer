<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Dasar 2 - Nomor 5</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $strInput=$_POST['name'];
    echo 'Input : ' . $strInput;
    
    $hasil = str_split($strInput);
    echo '<br> Hasil : ';

    for ($i=0; $i < count($hasil);$i++){
        if($i==0){
            $a=ord($hasil[$i]);
            echo chr($a+1);
        }
        else if($i % 2 == 0) {
            $a=ord($hasil[$i]);
            echo chr($a+($i+1));
        }
        else{
            $a=ord($hasil[$i]);
            echo chr($a-($i+1));
        }
    }
}
?>

<br>
<br>
<form action="" method="post">
    <input type="text" name="name" placeholder="Input"><br>
    <input type="submit">
</form>
</body>
</html>