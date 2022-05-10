<?php
    include_once __DIR__ . "/classes/Products.php";
    include_once __DIR__ . "/classes/User.php";
    include_once __DIR__ . "/classes/Food.php";
    include_once __DIR__ . "/classes/Gioco.php";
    include_once __DIR__ . "/classes/CreditCard.php";

    $cart = new Gioco("Osso", 4.00, "cani");

    $admin = new User("Thom", "Ricco", "1988/04/22", "Thomrc", "thomricco@gmail.com");

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php  echo $cart->getTipologia(). " </br>";  
        ?>
    
    <?php  echo $admin->getName(). " </br>";  
    ?>
    
</body>
</html>