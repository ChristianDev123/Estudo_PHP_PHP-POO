<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Final</title>
</head>
<body>
    <pre>
        <?php
            require_once("Video.php");
            require_once("Student.php");
            require_once("Visualization.php");

            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 15 de HTML");

            $s[0] = new Student("Jubileu",22,"M","Juba");
            $s[1] = new Student("Creuza",12,"F","creuzita");

            $vis[0] = new Visualization($s[0], $v[2]);
            $vis[1] = new Visualization($s[0], $v[1]);

        ?>
    </pre>
</body>
</html>