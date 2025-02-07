<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bunynut Ngoenngok (Ploy)</title>
</head>

<body>
        <h1>phonthida kapkraikaew(Namtarn) TIMETABLES while</h1>
<form method="post" action="">
     TIMETABLES <input type="number" min="2" max="1000" name="a"     required autofocus>
     <button type="submit" name="Submit">OK</button>
</form> <hr>
         
<?php
if (isset($_POST['Submit'])) {
	$m = $_POST ['a'];
	$i=1;
	while($i<=12 ) {
		$x = $m * $i ;
?>
    <?=$m;?> x <?=$i;?> = <?=$x;?> <br>
<?php 
      $i++;
      } // end while
} // end if 
?>
</body>
</html>