<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/table.css">
    <title>Użytkownicy</title>
</head>
<body>

    <h4>Użytkownicy</h4>
    <table>
        <tr>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Data urodzenia</th>
            </tr>
    </table>
    <?php
        require_once "../scripts/connect.php";
        $sql = "SELECT * FROM `users` ;";
        $result = $conn->query($sql);
        while($user = $result->fetch_assoc()) {
            echo <<< TABLEUSERS
            Imię: $user[firstName]<br>
            TABLEUSERS;
        }

    ?>

    
</body>
</html>