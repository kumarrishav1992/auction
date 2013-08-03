<html>
<head>
<script>
document.getElementById('time').innerHTML=new Date().toLocaleString();
</script>
<style>
#bat
{
position:absolute;
left:10px;
top:10px;}
#bid
{
position:relative;
left:800px;
top:0px;}


</style>
</head>
<body bgcolor='pink'>
<?php 
$today_dt=date('d/m/y');
$expire_dt ='05/08/13';

if ($expire_dt < $today_dt)
{echo "<script>"."alert('<?????? BIDDIND DATE OVER ??????>')"."</script>";
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=auction1.php">';    }
//header("Location: auction1.php");
?>
<div id='bid'>
<tr><th>YOUR BID(in $)</th></tr>
<table>
<form name='form' method='post' action='bidclose.php'>
<tr><td>DHONI</td><td><input type='text' name='bidder'></td></tr>
<tr><td>
<select name="bat1"><option>0</option><option>1000</option><option>2000</option><option>3000</option><option>4000</option><option>5000</option><option>10000</option><option>15000</option></select>
</td></tr>
<tr><td>VIRAT</td></tr>
<tr><td>
<select name="bat2"><option>0</option><option>1000</option><option>2000</option><option>3000</option><option>4000</option><option>5000</option><option>10000</option><option>15000</option></select>
</td></tr>
<tr><td>SHIKHAR</td></tr>
<tr><td>
<select name="bat3"><option>0</option><option>1000</option><option>2000</option><option>3000</option><option>4000</option><option>5000</option><option>10000</option><option>15000</option></select>
</td></tr>
<tr><td>JADEJA</td></tr>
<tr><td>
<select name="bat4"><option>0</option><option>1000</option><option>2000</option><option>3000</option><option>4000</option><option>5000</option><option>10000</option><option>15000</option></select>
</td></tr>
<tr><td>ROHIT</td></tr>
<tr><td>
<select name="bat5"><option>0</option><option>1000</option><option>2000</option><option>3000</option><option>4000</option><option>5000</option><option>10000</option><option>15000</option></select>
</td></tr>
<tr><td>YUVRAJ</td></tr>
<tr><td>
<select name="bat6"><option>0</option><option>1000</option><option>2000</option><option>3000</option><option>4000</option><option>5000</option><option>10000</option><option>15000</option></select>
</td></tr>
<input type='submit'>
</form>
</table>
</div>
<div id='bat'>
<?php
include ("connect.php"); 
$sql="SELECT * FROM batsman";
$loop=mysql_query($sql,$dbc);
$today_dt=date('d/m/y');
echo "CURRENT DATE:-".$today_dt."</BR>";
echo "BIDDING WILL CLOSE ON 05/08/2013";
echo "<table border='1'>";
echo "<tr><td>PIC</td><td>PLAYER</td><td>STARTING PRICE($)</td><td>CURRENT PRICE($)</td><td>HIGHEST BIDDER</td></tr>";
while($row = mysql_fetch_array($loop))
  {
  echo "<tr>";
  echo "<td>".'<img src=' .'upload/'.$row['avatar']." height='100' width='100'>"."</td>";
  echo "<td>" ."<font color='orange' size='5' face='COMIC SANS MS'>". $row['NAME'] ."</font>". "</td>";
  echo "<td>" . $row['START']. "</td>";
   echo "<td>" . $row['CURRENT'] . "</td>";
      echo "<td>" . $row['BIDDER'] . "</td>";
  echo "</tr>";
  
  }
echo "</table>";

?>
</div>
</body>
</html>