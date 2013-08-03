<html>
<body bgcolor='black'>
<table border='3' style='position:relative;top:40px; left:570px;'><tr><td><FONT COLOR=red FACE="cooper black" SIZE=10>ADMIN</FONT></td></tr></table>
<div style='position:relative;top:20px; left:500px;'>
<?php 
echo "<a href='auction1.php'>HOME</a>";
?></div>
<div style='position:relative; left:790px;'>
</div>
<table border='2' align='center'>
<form action="remove.php" name='form2' method='post'>
<FONT COLOR='WHITE'>USERNAME:-</FONT><input type='text' name="use">
<input type='submit' value='REMOVE USER'>
</form>
</td>
</table>
<table border ='1' style='position:relative;top:50px;border-color:white;'>
<tr><td><FONT COLOR=WHITE FACE="Geneva, Arial" SIZE=3>PLAYER NAME</FONT></td><td><FONT COLOR=WHITE FACE="Geneva, Arial" SIZE=3>NAME</FONT></td><td><FONT COLOR=WHITE FACE="Geneva, Arial" SIZE=3><center>STARTING PRICE</center></FONT></td><td><FONT COLOR=WHITE FACE="Geneva, Arial" SIZE=3>HIGHEST BIDDER</FONT></td></tr>
<?php

echo "<h3>BIDDING RESULT</h3>";
echo "<tr><td><FONT COLOR='red' FACE='Geneva, Arial' SIZE=3>PLAYER</FONT></td><td><FONT COLOR='RED' FACE='Geneva, Arial' SIZE=3>STARTING PRICE</FONT></td><td><FONT COLOR='red' FACE='Geneva, Arial' SIZE=3><center>FINAL PRICE</center></FONT></td><td><FONT COLOR='red' FACE='Geneva, Arial' SIZE=3>HIGHEST BIDDER</FONT></td></tr>";
include ("connect.php"); 
$sql="SELECT * FROM batsman";
$loop=mysql_query($sql,$dbc);
while($row = mysql_fetch_array($loop))
  {
  echo "<tr>"."<td>"."<font color='blue' size='3' face='COMIC SANS MS'>".$row['NAME']."</font>"."</td>"."<td>"."<font color='blue' size='3' face='COMIC SANS MS'>".$row['START']."</font>"."</td>"."<td>"."<font color='blue' size='3' face='COMIC SANS MS'>".$row['CURRENT']."</font>"."</td>"."<td>"."<font color='blue' size='3' face='COMIC SANS MS'>".$row['BIDDER']."</font>"."</td>"."</tr>";
  }
?>
</table>
</body>
</html>