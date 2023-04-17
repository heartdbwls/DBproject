<html>
<head>
<TITLE>주문</TITLE><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<center>
	<br>고객명과 구매하고싶은 상품 번호와 수량을 입력하시오.<br><br><br>
	<br>단, 주문 하나 당 한 개의 품목에 대해서만 주문 가능.<br><br><br>
	<form action="order.php" method="POST">
 		<p>customerName: <input type="text" name="customerName" size="30">
 		<p>productID: <input type="text" name="productID" number="30">
 		<br>number:<br> 
 		<select name=number><option>수량
 		<option value=1개>1개
 		<option value=2개>2개
 		<option value=3개>3개
 		<option value=4개>4개
 		<option value=5개>5개 
 		<option value=6개>6개 
 		<option value=7개>7개 
 		<option value=8개>8개
		<option value=9개>9개 
		<option value=10개 이상>10개 이상
		</select>
 		<p><input type="submit" name="submit" value="주문"><input type=reset value=reset></p>
 	</form>
		<a href=index.html>go to main</a>
</body>
</html>

