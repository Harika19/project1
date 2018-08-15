<?php
$server ="localhost";
$username="";
$password="";
$db ="test";
$con = mysqli_connect($server,$username,$password,$db);
if(!$con)
{
  echo "not connected";
  }
else
{
echo "connected...";
}
?>

