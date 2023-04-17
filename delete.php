<?php
$productName= $_GET["productName"];

$mysqli = new mysqli("localhost", "yjshim", "2021103990", "yjshim"); 

if (mysqli_connect_errno()) { 
	printf("Connect failed: %s\n", mysqli_connect_error()); 
	exit(); 
} else { 
	$sql = "DELETE FROM P_CUSTOMER ";
	$sql .= " WHERE productName ='".$productName."'";
	$res = mysqli_query($mysqli, $sql); 
 	if ($res) {
		echo "<center><p>complete deletion of product";
		include "select_product.php";
 	} else {
		echo "<p> failed to delete product.";
		include "select_product.php";
 	}
}
?>
