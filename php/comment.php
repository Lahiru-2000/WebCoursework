<?php


$host="localhost";
$username="root";
$password="";
$dbname="commentdb";




$conn=@mysqli_connect("localhost","root","","commentdb") or die("<p>Unable to coonect<?p>");
if(!$conn)
{
    echo "connection failed :" . mysqli_connect_error();
    exit(); 
}

include '../html/commentSuccess.html';

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phn'];
$comment=$_POST['com'];


$sql="INSERT INTO comment(Id,Name,Email,Contact,Comment) VALUES('0','$name','$email','$phone','$comment')" or die("Unable to add");
$rs=mysqli_query($conn,$sql);


?>