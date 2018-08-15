<?php
include('dbcon.php');
if(isset($_POST['book_name']))
{
$bookname=$_POST['book_name']; 
$bookid=$_POST['book_id'];
$bookauthor=$_POST['book_author'];
$result1=mysqli_query($con,"update books set book_copies=book_copies-1 where book_name='$bookname' and book_id='$bookid' and book_author='$bookauthor'");
$result2= mysqli_query($con,"select * from books where book_name='$bookname' and book_id='$bookid' and book_author='$bookauthor'"); 
if (mysqli_num_rows($result2) > 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result2)) 
    {
        echo "<br>"."Book name: " . $row["book_name"]."<br>";
        echo "Book id: " . $row["book_id"]."<br>";
        echo "Book author:" . $row["book_author"]. "<br>";
        echo "Number of copies available after issuing:" .$row["book_copies"]. "<br>";
    }
}
else 
{
 $script .= "<script>document.writeln('<center>Issue failed,Try once again.');</script>";
 $script .= "<script>document.writeln('<h4><a href=bookissue.html>Bookissue</a></h4></center>');</script>";
 echo $script;
}
}
?>