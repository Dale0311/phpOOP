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
        
        $person1 = new person("dale", "male", 22);// constructor data
        
        echo $person1->getter("name");
        echo $person1->setter("name", "Spongebob");
        echo $person1->getter("name");

    ?>
</body>
</html>