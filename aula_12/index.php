<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12</title>
</head>
<body>
    <pre>
    <?php
        require_once("Bird.php");
        require_once("Fish.php");
        require_once("Mamifer.php");
        require_once("Reptil.php");
        require_once("kangaroo.php");
        require_once("Dog.php");
        require_once("Snake.php");
        require_once("Turtle.php");
        require_once("GoldFish.php");
        require_once("Macaw.php");

        $m = new Mamifer();
        $b = new Bird();
        $r = new Reptil();
        $k = new kangaroo();
        $d = new Dog();
        $t = new Turtle();

        $m->move();
        $d->move();
        $k->move();
        $t->move();

        $d->makeSound();
    ?>
    </pre>
</body>
</html>