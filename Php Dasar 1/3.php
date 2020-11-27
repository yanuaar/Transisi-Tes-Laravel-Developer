<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Dasar 1 - Nomor 3</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	function unibitri($input)
	{
		$arr_input = explode(' ', $input);

		// unigram
		$unigram = '';
		foreach ($arr_input as $item) {
			$unigram .= $item.', ';
		}
		$unigram = substr($unigram, 0, -2);

		// bigram
		$x = 0;
		$bigram = '';
		foreach ($arr_input as $item) {
			if ($x < 1) {
				$bigram .= $item.' ';
				$x++;
			} else {
				$bigram .= $item.', ';
				$x = 0;
			}
		}
		$bigram = substr($bigram, 0, -2);

		// trigram
		$y = 0;
		$trigram = '';
		foreach ($arr_input as $item) {
			if ($y < 2) {
				$trigram .= $item.' ';
				$y++;
			} else {
				$trigram .= $item.', ';
				$y = 0;
			}
		}
		$trigram = substr($trigram, 0, -2);


		$result = 'Unigram : '. $unigram . '<br>';
		$result .= 'Bigram : '. $bigram . '<br>';
		$result .= 'Trigram : '. $trigram;

		return $result;
	}
	
	$strInput = $_POST["name"];
	echo 'Input : ' .$strInput;
	$resultAll = unibitri($strInput);
	echo '<br><br>' . $resultAll;
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