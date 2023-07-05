<?php require "./oop/classes.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $person1 = new person();
        $person1->setFirstname("Albert Dale");
        echo $person1->getFirstname();
        
        $person2 = new person();
        $person2->setFirstname("Joana Marie");
        echo $person2->getFirstname();

    ?>
</body>
</html>