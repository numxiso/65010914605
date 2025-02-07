<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>phonthida kapkraikaew(Namtarn)</title>
</head>

<body>
        <h1>phonthida kapkraikaew(Namtarn)</h1>

<form method="post" action="">
     Student ID <input type="text" name="a" required autofocus>
     <button type="submit" name="Submit">OK</button>
</form> <hr>
         
<?php
     if (isset($_POST['Submit'])) {
		 $std = $_POST['a'];
		 $y = substr($std,0,2);
		 echo "<img             src='http://202.28.32.211/picture/student/{$y}/{$std}.jpg' width='600'>" ;
}
?>
</body>
</html>