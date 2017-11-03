<html>

<body>

<?php
$number = rand(1,6);
$number2 = rand(1,6);
echo $number;
echo "</br>";
echo $number2;
echo "</br>";
if ($number == 1 xor $number2 == 1) {
	echo "Almost snake eyes";
} elseif ($number == 1 and $number2 == 1) {
	echo "Snake eyes";
} elseif ($number == 6 xor $number2 == 6) {
	echo "Winner";
} elseif ($number == 6 xor $number2 == 6) {
	echo "Double Winner";
} else {
	echo "Sorry you lose";
}
?>

</body>

</html>
