<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>phonthida kapkraikaew(Namtarn)</title>
</head>

<body>
        <h1>phonthida kapkraikaew(Namtarn)</h1>
        
<form method="post" action="">
     จำนวน <input type="number" min="1" max="1000" name="a" required autofocus>
     <button type="submit" name="Submit">OK</button>
</form> <hr>
         
<?php
if (isset($_POST['Submit'])) {
	$c = $_POST['a'];
	echo "แสดงจำนวน $c รูป <br>";
	for($i=1; $i<=$c; $i++) {
?>
  <img src="imag.jpeg" width="200">
<?php  
      } // end for
} // end if 
?>
</body>
</html>