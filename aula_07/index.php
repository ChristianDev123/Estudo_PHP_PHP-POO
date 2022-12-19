<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07</title>
</head>
<body>
    <pre>
    <?php
        require_once("Fighter.php");
        $fighters = [];
        array_push($fighters, new Fighter("Pretty Boy", "França", 31, 1.75, 68.9, 11, 3, 1));
        array_push($fighters, new Fighter("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3));
        array_push($fighters, new Fighter("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1));
        array_push($fighters, new Fighter("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2));
        array_push($fighters, new Fighter("UFOCobol", "Brasil", 37, 1.7, 119.3, 5, 4, 3));
        array_push($fighters, new Fighter("Nedaart", "EUA", 30, 1.81, 105.7, 12, 2, 4));
        $fighters[3]->status();
    ?>
    </pre>
</body>
</html>