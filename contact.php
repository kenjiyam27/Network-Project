<?php
$username="root";
$password="";
$database_name="Project";

$conn=mysqli_connect($server_name,$username,$password,$database_name);


if(isset($_POST['save']))
{
 $name =$_POST['name'];
 $email=$_POST['elec_mail'];
 $message = $_POST['message'];
 

 #$pdo= new PDO("mysql:host=localhost;dbname=Project;charset=utf8mb4","root","");

 $sql_query = "INSERT INTO contact_details (name,elec_mail,message) VALUES ('$name','$email','$message')";
 
 mysqli_close($conn);
}
?>