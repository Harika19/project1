<?php
include('dbcon.php');
if(isset($_POST['uname']))
{
$uname=$_POST['uname']; 
$pass=$_POST['pass']; 
$email=$_POST['email']; 
$phno=(float)$_POST['phone'];
$gender=$_POST['gen']; 
$day=(int)$_POST['day']; 
$month=(int)$_POST['month']; 
$year=(int)$_POST['year']; 
$dob = "$day-$month-$year";
$query = "INSERT INTO registration1 VALUES ('$uname', '$pass', '$email', '$phno', '$gender', '$dob')";
$res = mysqli_query($con,$query); 
if($res)
{
$script = "<script>alert('User Registration Successful');</script>";
$script .= "<script>document.writeln('<center><h4><u>User Details</u></h1>');</script>";
$script .= "<script>document.writeln('Your username is:<b> $uname</b><br/>');</script>"; 
$script .= "<script>document.writeln('Your password is:<b> $pass</b><br/>');</script>";
$script .= "<script>document.writeln('Login with your username and password');</script>";
$script .= "<script>document.writeln('<h4><a href=login.html>login</a> </h4></center>');</script>";
echo $script;
}
else
	echo "<script>alert('User Registration Failed'); window.location = 'registration.html'; </script>";
}
?>
