<?php 
session_start();
$firstname="";
$lastname="";
$gmail="";
$numar="";
$course="";
$errors=array();


$db=mysqli_connect('localhost','root','','formular');


if(isset($_POST['submit'])){
    $firstname=mysqli_real_escape_string($db,$_POST['firstname']);
    $lastname=mysqli_real_escape_string($db,$_POST['lastname']);
    $gmail=mysqli_real_escape_string($db,$_POST['gmail']);
    $course=mysqli_real_escape_string($db,$_POST['course']);


    if(count($errors)===0){
        $query="INSERT INTO user (firstname,lastname,gmail,course) VALUES  ('$firstname','$lastname','$gmail','$course')";
        mysqli_query($db,$query);
        $_SESSION['firstname']='$firstname';
        $_SESSION['SUCCESS']='Succes';
        header('location: finish.php');
    }
}
?>