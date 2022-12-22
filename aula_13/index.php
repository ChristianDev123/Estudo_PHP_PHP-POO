<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13</title>
</head>
<body>
    <pre>
    <?php
        require_once("Dog.php");
        $d = new Dog();
        $d->reactFrase("Olá");
        $d->reactFrase("Vai Apanhar");
        $d->reactHour(11,45);
        $d->reactHour(21,00);
        $d->reactOwner(true);
        $d->reactOwner(false);
        $d->reactAgeWeight(2,12.5);
        $d->reactAgeWeight(17,4.5);
    ?>
    </pre>
</body>
</html>