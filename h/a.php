<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Beautydior</title>
</head>

<body>
<h1>Beautydior</h1>

<?php
$host = "localhost";
$user = "root";
$pwd = "";
$db = "shop";

$conn = mysqli_connect($host,$user,$pwd)or die("เชื่องต่อฐานข้อมูลไม่ได้"); mysqli_select_db ($conn,$db) or die ("เลือกฐานข้อมูลไม่ได้");

$sql = "SELECT * FROM products ORDER BY products.`p_id` ASC";
$rs = mysqli_query($conn,$sql);

while ($data = mysqli_fetch_array ($rs)){
	$img = $data ['p_id'].".".$data ['p_ext'];
	echo "<img src='images/{$img}' width='240'> <br>";
	echo $data['p_id']."<br>";
	echo "ชื่อสินค้า: ".$data['p_name']."<br>";
	echo $data['p_price']."บาท <hr>";
}
mysqli_close($conn);
?>
</body>
</html>
