<?php

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$conn= new mysqli('localhost','u593948691_root','Flowhite@4321','u593948691_flowhite');

if($conn->connect_error)
{
    die('connection failed:'.$conn->connect_error);
}
else
{
    $stmt=$conn->prepare("insert into contact(name,email,subject,message)values(?,?,?,?)");
    $stmt->bind_param("ssss",$name,$email,$subject,$message);
    $stmt->execute();
    echo("message send");
    $stmt->close();
    $conn->close();
}






?>