<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Użytkownicy z bazy</h4>

<?php
    require_once "../scripts/connect.php";
    $sql = "SELECT * FROM `users`;";
    $result = $conn->query($sql); # -> zamiast . dla obiektów
    //$user = $result->fetch_assoc();
    //echo "$user[firstName]";

    while($user = $result->fetch_assoc()) {
        echo <<< USER
            Imię i nazwisko: $user[firstName] $user[lastName]<br>
    USER;
    }


?>

</body>
</html>