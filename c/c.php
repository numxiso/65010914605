<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>พรธิดา กาพย์ไกรเเก้ว(น้ำตาล)</title>
</head>

<body>
	<h1> พรธิดา กาพย์ไกรเเก้ว(น้ำตาล)</h1>
    
<html> 
<head> 


<body>
 <br>
<img src="../img/ยุงลาย-800x400.jpg" width="449" height="242">
<form name="form1" method="post" action="register.php" >
  <table width="485" border="0" cellspacing="1" cellpadding="1">
  <p>&nbsp;</p> 
<tr> 
      <td colspan="2"><h2>สมัครสมาชิกชมรมคนรักยุงลายประเทศไทย</h2></td> 
    </tr> 
    <tr> 
      <td width="102">ชื่อ-สกุล</td> 
      <td width="376"><input name="inName" type="text" id="inName" /></td> 
    </tr> 
    <tr> 
      <td>เพศ</td> 
      <td><input name="inSex" type="radio" value="หญิง" checked /> หญิง 
  <input name="inSex" type="radio" value="ชาย" /> ชาย </td> 
    </tr> 
    <tr> 
      <td>ที่อยู่</td> 
      <td><textarea name="inAddress" cols="30" rows="3" id="inAddress"></textarea></td> 
    </tr> 
    <tr> 
      <td>เบอร์โทรศัพท์</td> 
      <td><input name="inPhone" type="text" id="inPhone" /></td> 
    </tr> 
    <tr> 
      <td>ระดับการศึกษา</td> 
      <td><select name="inEdu" id="inEdu"> 
        <option value="1">ต่ำกว่าปริญญาตรี</option> 
        <option value="2">ปริญญาตรี</option> 
        <option value="3">ปริญญาโท</option> 
        <option value="4">ปริญญาเอก</option> 
      </select></td> 
    </tr> 
    <tr> 
      <td height="169">เวลาว่างชอบทำอะไร</td> 
      <td><p>
        <input type="checkbox" name="inFood[]" value="ตบยุง" /> 
          ตบยุง</p>
        <p>
  <input type="checkbox" name="inFood[]" value="เล่นเกม" />เล่นเกม</p>
        <p>
          <input type="checkbox" name="inFood[]" value="เพาะพันธุ์ยุง" />เพาะพันธุ์ยุง        </p>
        <p>
          <input type="checkbox" name="inFood[]" value="พายุงไปเดินเล่น" /> 
        พายุงไปเดินเล่น </p>
    </t>  </tr> 
    <tr> 
      <td>Username</td> 
      <td><label> 
        <input name="inUsername" type="text" id="inUsername" /> 
      </label></td> 
    </tr> 
    <tr>
     
    </tr> 
    
    </tr> 
    <tr> 
     <td>Password</td> 
      <td><input name="inPassword" type="password" id="inPassword" /></td>
      <td>&nbsp;</td> 
      <td><input type="submit" name="Submit" value="สมัครสมาชิก" />  
 <input type="reset" name="Reset" value="ยกเลิก" />  
  <input type="button" name="Button" value="พิมพ์หน้านี้" onClick="window.print()" /></td> 
    </tr> 
</table> 
</form> 
</body> 
</html> 
<?php 
 echo "<b>ชื่อ :</b> $_POST[inName] <br />" ; 
 echo "<b>เพศ :</b> $_POST[inSex] <br />" ; 
 echo "<b>ที่อยู่ :</b> ",nl2br($_POST[inAddress]) ; 
 echo "<br /><b>เบอร์โทรศัพท์ :</b> $_POST[inPhone] <br />" ; 
 
 if ($_POST[inEdu] == 1) { 
  $edu = "ต่ำกว่าปริญญาตรี" ; 
 } elseif ($_POST[inEdu] == 2) { 
  $edu = "ปริญญาตรี" ; 
 } elseif ($_POST[inEdu] == 3) { 
  $edu = "ปริญญาโท" ; 
 } elseif ($_POST[inEdu] == 4) { 
  $edu = "ปริญญาเอก" ; 
 } 
 echo "<b>ระดับการศึกษา :</b> $edu <br />" ; 
 
 echo "<b>เวลาว่างชอบทำอะไร :</b> <br />" ; 
 if (isset($_POST[inFood])) { 
 foreach ( $_POST[inFood] as $food ) { 
echo "<li>$food</li>" ; 
} 
} 

echo "<br/><b>Username :</b> $_POST[inUsername] <br />" ; 
echo "<b>Password :</b> $_POST[inPassword] <br />" ; 
echo "<b>IP Address :</b> $_POST[inIP]" ; 
?> 