<html>
<body align='center' BGCOLOR='PINK'>
<table border ='1' width='50%' style='position:relative;top:50px;border-color:white;'>
<?php
$today_dt=date('d/m/y');
$expire_dt ='05/08/13';

if ($expire_dt != $today_dt)
{echo "<script>"."alert('<??????  RESULT WILL DECLARE ON 05/08/13 ??????>')"."</script>";
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=auction1.php">';    }
?>

<?php
echo "<h3>BIDDING RESULT</h3>";
echo "<tr><td><FONT COLOR='red' FACE='Geneva, Arial' SIZE=3>PLAYER</FONT></td><td><FONT COLOR='RED' FACE='Geneva, Arial' SIZE=3>STARTING PRICE</FONT></td><td><FONT COLOR='red' FACE='Geneva, Arial' SIZE=3><center>FINAL PRICE</center></FONT></td><td><FONT COLOR='red' FACE='Geneva, Arial' SIZE=3>HIGHEST BIDDER(WINNER)</FONT></td></tr>";
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