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
            <th>Miasto</th>
            <th>Województwo</th>
            <th>Państwo</th>
            </tr>
    <!-- </table> -->
    <?php
        require_once "../scripts/connect.php";
        //$sql = "SELECT * FROM `users` ;";
        #$sql = "SELECT * FROM `users` INNER JOIN `cities` ON `users`.`city_id`=`cities`.id;";
        $sql = "SELECT * FROM `users` INNER JOIN `cities` ON `users`.`city_id`=`cities`.id INNER JOIN `states` ON `states`.`id`=`cities`.`id` INNER JOIN `countries` ON `countries`.`id`=`states`.`country_id`;";
        $result = $conn->query($sql);
        while($user = $result->fetch_assoc()) {
            echo <<< TABLEUSERS
                <tr>
                    <td>$user[firstName]</td>
                    <td>$user[lastName]</td>
                    <td>$user[birthday]</td>
                    <td>$user[city]</td>
                    <td>$user[state]</td>
                    <td>$user[country]</td>
                </tr>

            <!-- Imię: $user[firstName]<br> -->
            TABLEUSERS;
        }
        echo "</table";

    ?>

    
</body>
</html>