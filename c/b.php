<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>พรธิดา กาพย์ไกรเเก้ว(น้ำตาล)</title>
</head>

<body>
	<h1> พรธิดา กาพย์ไกรเเก้ว(น้ำตาล)</h1>
    
 <form method="post" action="">
 	ตัวเลข <input type="number" name="a" min="0" max="100"required
    autofocus><br><br>
 
    ชื่อ-สกุล <input type="text" name="b" required><br><br>
    จังหวัด<select name="province">
    	<option value="ขอนแก่น">ขอนแก่น</option>
        <option value="มหาสารคาม">มหาสารคาม</option>
        <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
        <option value="อุดรธานี">อุดรธานี</option>
      </select><br><br>
       วันเดือนปีเกิด <input type="date" name="birthday"> <br><br><br>
      
    <button type="submit">ok</button><br><br>
</form>
<hr>

<?php
echo @$_POST['a']."<br>";
echo @$_POST['b']."<br>";
echo @$_POST['province']."<br>";
echo @$_POST['birthday']."<br>";
?>
</body>
</html>
