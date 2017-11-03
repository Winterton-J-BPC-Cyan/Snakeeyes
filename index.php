<html>

<body>

<?php
$number = rand(1,6);
$number2 = rand(1,6);
echo $number;
echo "</br>";
echo $number2;
echo "</br>";
if ($number == 1 or $number2 == 1) {
	echo "Almost snake eyes";
} elseif ($number == 6 or $number2 == 6) {
	echo "Winner";
} if ($number == 1 and $number2 == 1) {
	echo "Snake eyes";
} else {
	echo "Sorry you lose";
}
?>

</body>

</html>
