<HTML>
<BODY bgcolor='pink'>

<?php
include('connect.php');
$bid=$_POST['bidder'];
$bat1=$_POST['bat1'];
$sql1="SELECT current FROM batsman WHERE name='dhoni'";
$loop1=mysql_query($sql1,$dbc);
$ro1=mysql_fetch_array($loop1);
if($bat1!=0)
{
if($bat1>$ro1['current'])
mysql_query("UPDATE batsman SET CURRENT='$bat1' ,BIDDER='$bid' WHERE name='dhoni'");
}

$bat2=$_POST['bat2'];
$sql2="SELECT current FROM batsman WHERE name='virat'";
$loop2=mysql_query($sql2,$dbc);
$ro2=mysql_fetch_array($loop2);
if($bat2!=0)
{
if($bat2>$ro2['current'] )
mysql_query("UPDATE batsman SET CURRENT='$bat2'  ,BIDDER='$bid' WHERE name='virat'");
}

$bat3=$_POST['bat3'];
$sql3="SELECT current FROM batsman WHERE name='shikhar'";
$loop3=mysql_query($sql3,$dbc);
$ro3=mysql_fetch_array($loop3);

{
if($bat3>$ro3['current'])
mysql_query("UPDATE batsman SET CURRENT='$bat3' ,BIDDER='$bid' WHERE name='shikhar'"); 
}

$bat4=$_POST['bat4'];
$sql4="SELECT current FROM batsman WHERE name='jadeja'";
$loop4=mysql_query($sql4,$dbc);
$ro4=mysql_fetch_array($loop4);
{
if($sql4>$ro4['current'])
mysql_query("UPDATE batsman SET CURRENT='$bat4'  ,BIDDER='$bid' WHERE name='jadeja'");
}

$bat5=$_POST['bat5'];
$sql5="SELECT current FROM batsman WHERE name='rohit'";
$loop5=mysql_query($sql5,$dbc);
$ro5=mysql_fetch_array($loop5);
{
if($sql5>$ro5['current'])
mysql_query("UPDATE batsman SET CURRENT='$bat5' , BIDDER='$bid' WHERE name='rohit'");
}

$bat6=$_POST['bat6'];
$sql6="SELECT current FROM batsman WHERE name='yuvraj'";
$loop6=mysql_query($sql6,$dbc);
$ro6=mysql_fetch_array($loop6);
{
if($sql6>$ro6['current'])
mysql_query("UPDATE batsman SET CURRENT='$bat6' ,BIDDER='$bid' WHERE name='yuvraj'");
}
echo "<script>"."alert('<?????? BIDDIND DONE ??????>')"."</script>";
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=auction1.php">';  

?>
</BODY>
</HTML>