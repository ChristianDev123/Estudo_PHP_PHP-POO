<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11</title>
</head>
<body>
    <pre>
    <?php
        require_once("Visitant.php");
        require_once("Student.php");
        require_once("ScholarshipStudent.php");
        /*$visitant1 = new Visitant();
        print_r($visitant1);*/

        $student1 = new Student();
        $student1->setName("Pedro");
        $student1->setRegistry(1111);
        $student1->setAge(16);
        $student1->setGender("M");
        $student1->setCourse("Informática");
        print_r($student1);


        $scholarStudent1 = new ScholarshipStudent();
        $scholarStudent1->setRegistry(1112);
        $scholarStudent1->setName("Jubileu");
        $scholarStudent1->setScholarship(12.5);
        $scholarStudent1->setCourse("Administração");
        $scholarStudent1->setAge(17);
        $scholarStudent1->payTuition();
        print_r($scholarStudent1);
    ?>
    </pre>
</body>
</html>