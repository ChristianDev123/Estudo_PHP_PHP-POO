<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09</title>
</head>
<body>
    <pre>
    <?php
        require_once("People.php");
        require_once("Book.php");

        $peoples = array();
        $peoples[0] = new People("Pedro", 22, "M");
        $peoples[1] = new People("Maria", 31, "F");
        
        $books = array();
        $books[0] = new Book("PHP Básico", "José da Silva", 300, $peoples[0]);
        $books[1] = new Book("POO com PHP", "Maria de Souza", 500, $peoples[0]);
        $books[2] = new Book("PHP Avançado", "Ana Paula", 800, $peoples[1]);

        $books[0]->showDetails();
    ?>
    </pre>
</body>
</html>