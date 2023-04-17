<?php
$customerName = $_POST["customerName"];
$productID = $_POST["productID"];
$number = $_POST["number"];

$mysqli = new mysqli("localhost", "yjshim", "2021103990", "yjshim"); 

if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
} else {
 		$sql = "INSERT INTO P_SELLER (customerName, productID, number)
			VALUES ('$customerName', '$productID', '$number');";
		$res = mysqli_query($mysqli, $sql);
	if ($res === TRUE) {
		echo "<p>A record has been inserted.";
	} else {
		printf("Could not insert record: %s\n", mysqli_error($mysqli));
	}
	echo "<p>".$sql;
	mysqli_close($mysqli);
}
?>
