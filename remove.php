<?php
include('connect.php');
mysql_query("DELETE FROM batsman WHERE BIDDER='kumar'");
header("location:admin.php");
?>
