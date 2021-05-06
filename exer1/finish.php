<?php $db=mysqli_connect('localhost','root','','formular');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Finish</h1>
<h1>Afisarea datelor</h1>

<?php

$query="SELECT * FROM user";
$result=mysqli_query($db,$query);
if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_array($result);
}


?>

<h4><?php echo $row['firstname']; ?></h4>

<a href="/php/php/exer1/edit.php"><button type="submit">Editare</button></a>
















</body>
</html>