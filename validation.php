<?php
include('dbcon.php');
if(isset($_POST['uname']))
{
$uname=$_POST['uname']; 
$pass=$_POST['pass'];
$res = mysqli_query($con,"select * from registration1 where uname='$uname' and pass ='$pass'"); 
$count=mysqli_num_rows($res);
if($count)
echo "<script>alert('Welcome $uname');window.location='welcome2.html';</script>";
else
echo "<br/><br/><br/><h2 align='center'>Invalid Username/Password/Try again!!!!!</h2>";
}
?>
