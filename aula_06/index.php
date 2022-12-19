<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06</title>
</head>
<body>
    <h1>Projeto Controle POO</h1>
    <pre>
    <?php
        require_once("RemoteControll.php");
        $c1 = new RemoteControll();
        $c1->turnOn();
        $c1->turnOff();
        $c1->plusVolume();
        $c1->lowerVolume();
        $c1->openMenu();
    ?>
    </pre>
</body>
</html>