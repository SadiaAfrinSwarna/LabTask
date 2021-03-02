<?php
$servername="localhost";
$username="root";
$password="";
$dbname="myDB";

$conn = new mysqli($servername,$username, $password, $dbname);

if($conn->connect_error)
{
    die("Connection failed:".$conn->connect_error);
}
$fname ="Sadia";
$lname ="red";
$age = 24;
$email ="sadia@gmail.com";


$sql = "INSERT INTO Users (fname, lname,age, email) VALUES ('$fname', '$lname',$age,' $email')";
$res = $conn->query($sql);
if($res)
{
    echo "New record inserted";
}
else
{
   echo "An Error occured";
}

$conn->close();
?>