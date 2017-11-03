<html>

<body>

<?php
$number = rand(1,6);
echo $number;
if ($number = 1) {
	echo "Almost snake eyes";
} elseif ($number = 6) {
	echo "Winner";
} else {
	echo "Sorry you lose";
}
?>

</body>

</html>
