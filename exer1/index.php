<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Formular</h2>
    <form action="index.php" method="POST">
    <p>Firstname: <input type="text" name="firstname"></p>
    <p>Lastname: <input type="text" name="lastname"></p>
    <p>Gmail: <input type="text" name="gmail"></p>
    <p>Number: <input type="text" name="numar"></p>
    <p>Profession:  <br>
        <input type="radio" name="course" value="WEB">WEB <br>
        <input type="radio" name="course" value="Contabil">Contabil <br>
        <input type="radio" name="course" value="Meneger"> Meneger <br>
    </p>
    <input type="submit" name="submit">
    </form>
</body>
</html>