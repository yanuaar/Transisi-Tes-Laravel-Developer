<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Dasar 1 - Nomor 2</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function hitungUppercase($words) {
    return strlen(preg_replace('/[^A-Z]+/', '', $words));
    }
    function hitungLowercase($words) {
    return strlen(preg_replace('/[^a-z]+/', '', $words));
    }
    
    $strInput = $_POST["name"];
    $resultUp = hitungUppercase($strInput);
    $resultLow = hitungLowercase($strInput);
    echo 'Input = ' .$strInput;
    echo '<br><br>';
    echo 'Jumlah Uppercase = ' .$resultUp.'.';
    echo '<br><br>';
    echo 'Jumlah Lowercase = ' .$resultLow.'.';
}
?>

<br>
<br>
<form action="" method="post">
    <input type="text" name="name" placeholder="input"><br>
    <input type="submit">
</form>
</body>
</html>