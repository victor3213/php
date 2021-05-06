<?php  $db=mysqli_connect('localhost','root','','formular')  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_POST['submit'])){

        $old_gmail=mysqli_real_escape_string($db,$_POST['old_gmail']);
        $old_course=mysqli_real_escape_string($db,$_POST['old_course']);
        $new_gmail=mysqli_real_escape_string($db,$_POST['new_gmail']);
        $new_course=mysqli_real_escape_string($db,$_POST['new_course']);

        $query="UPDATE `user` SET `gmail`='$new_gmail',`course`='$new_course' WHERE `gmail`='$old_gmail' AND `course`='$old_course'";
        if(mysqli_query($db,$query)){
            echo "succes";
        }
        else{
            echo "gresala";
        }
        
    }
?>
<?php

    if(isset($_POST['sub'])){
        $gmail=mysqli_real_escape_string($db,$_POST['gmail']);
        $query="DELETE FROM `user` where `gmail`='$gmail'";
        if(mysqli_query($db,$query)){
            echo "succes";
        }
        else{
            echo "gresala";
        }
    }

?>
<h2>Modificare </h2>
<form action="edit.php" method="POST">
    <p>Old gmail: <input type="text" name="old_gmail"></p>
    <p>Old course: <br>
        <input type="radio" name="old_course" value="WEB">WEB <br>
        <input type="radio" name="old_course" value="Contabil">Contabil <br>
        <input type="radio" name="old_course" value="Meneger"> Meneger <br>
    </p>
    <p>New gmail: <input type="text" name="new_gmail"></p>
    <p>New course: <br>
        <input type="radio" name="new_course" value="WEB">WEB <br>
        <input type="radio" name="new_course" value="Contabil">Contabil <br>
        <input type="radio" name="new_course" value="Meneger"> Meneger <br>
    </p>
    <a href=",/php/php/exer1/editshow.php"><button type="submit" name="submit">Submit</button></a>
</form>
<h2>Stergerea unui elev</h2>
<form action="edit.php" method="POST">
<p>Gmail: <input type="text" name="gmail"></p>
<input type="submit" name="sub">
</form>
    
</body>
</html>
