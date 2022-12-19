<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>
<body>
    <pre>
    <?php
        require_once("Pen.php");
        $p1 = new Pen;
        $p1->model = "BIC crystal";
        $p1->color = "Blue";
        $p1->turnCapped();
        print_r($p1);
    ?>
    </pre>
</body>
</html>