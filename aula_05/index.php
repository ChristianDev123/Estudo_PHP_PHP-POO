<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05</title>
</head>
<body>
    <pre>
    <?php
        require_once("BankAccount.php");
        $account1 = new BankAccount();
        $account2 = new BankAccount();
        
        $account1->setNumAccount(1111);
        $account1->openAccount("cc");
        $account1->setOwner("Jubileu");

        $account2->setNumAccount(2222);
        $account2->openAccount("cp");
        $account2->setOwner("Creuza");

        $account1->deposit(300);
        $account2->deposit(500);

        $account2->withdraw(100);

        print_r($account1);
        print_r($account2);

    ?>
    </pre>
</body>
</html>