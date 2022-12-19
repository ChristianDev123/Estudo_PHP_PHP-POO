<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>
<body>
    <?php
        require_once("Pen.php");
        $p1 = new Pen();
        $p1->color = "azul";
        $p1->penTip = 0.5;
        $p1->capped = false;
        $p1->turnUnCapped();
        $p1->write();
        print_r($p1);
        echo "<br>";
        $p2 = new Pen();
        $p2->color = "vermelho";
        $p2->limit = 50;
        $p2->turnCapped();
        print_r($p2);
    ?>
</body>
</html>