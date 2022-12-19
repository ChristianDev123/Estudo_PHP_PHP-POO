<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10</title>
</head>
<body>
    <pre>
    <?php
        require_once("People.php");
        require_once("Student.php");
        require_once("Teacher.php");
        require_once("Employee.php");

        $people1 = new People();
        $people2 = new Student();
        $people3 = new Teacher();
        $people4 = new Employe();

        $people1->setName("Pedro");
        $people2->setName("Maria");
        $people3->setName("Claudio");
        $people4->setName("Fabiana");

        $people2->setCourse("Informática");
        $people3->setSalary(3600.75);
        $people4->setSector("Estoque");

        $people3->receiveIncrease(550.2);
        $people4->changeWork();
        $people2->cancelRegistry();

        print_r($people1);
        print_r($people2);
        print_r($people3);
        print_r($people4);
    ?>
    </pre>
</body>
</html>