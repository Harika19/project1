<?php
include('dbcon.php');
if(isset($_POST['book_name']))
{
$bookname=$_POST['book_name']; 
$bookid=$_POST['book_id'];
$bookauthor=$_POST['book_author'];
$result = mysqli_query($con,"select * from books where book_name='$bookname' or book_id='$bookid' or book_author='$bookauthor'"); 
if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo "<br>"."Book name: " . $row["book_name"]."<br>";
        echo "Book id: " . $row["book_id"]."<br>";
        echo "Book author:" . $row["book_author"]. "<br>";
        echo "Number of copies available:" .$row["book_copies"]. "<br>";
        $script .= "<script>document.writeln('<center><h4><a href=bookissue.html>Issue this book</a></h4></center>');</script>";
        echo $script;
    }
}
else 
{
 $script .= "<script>document.writeln('<center>No copies available');</script>";
 $script .= "<script>document.writeln('<h4><a href=booksearch.html>Search for other book</a></h4></center>');</script>";
 echo $script;
}
}
?>