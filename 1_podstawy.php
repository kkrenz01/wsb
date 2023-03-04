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
        $firstName = "Janusz";
        $lastName = "Nowak";
        echo "Imię i nazwisko: $firstName $lastName<br>";
        echo 'Imię i nazwisko: $firstName $lastName<br>';

        //heredoc -szybko wyśweietla dane, bardziej czytelny, coś jak {} w PS?
        echo <<< DATA
            <hr>
            Imię: $firstName<br>
            Nazwisko: $lastName
            <br>
        DATA;

        $data = <<< DATA
            <hr>
            Imię: $firstName<br>
            Nazwisko: $lastName
            <br>
        DATA;

        echo $data;


        echo <<< DATA
            <hr>
            Imię: $firstName<br>
            Nazwisko: $lastName
            <br>
        DATA;

        $bin = 0b1010;
        echo $bin; //10

        $bin = 010;
        echo $bin; //8

        $hex = 0xA;
        echo $hex; //16



        ?>
</body>
</html>