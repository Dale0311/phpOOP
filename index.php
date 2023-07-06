<?php 
declare(strict_types = 1);
require "./includes/classes.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Practice</title>
</head>
<body>
    <form method="post">
        <input type="number" placeholder="1" name="num1" required>
        <select name="operator">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="div">/</option>
            <option value="multiply">*</option>
        </select>
        <input type="number" placeholder="2" name="num2" required>

        <button type="submit" name="equals">Equals</button>
    </form>

    <div id="result">
        <?php 
            if(isset($_POST['equals'])){
                $num1 = (int)$_POST['num1'];
                $num2 = (int)$_POST['num2'];
                $operator = (string)$_POST['operator'];
                
                // option 1
                // echo Calculator::calc($num1, $num2, $operator);

                // option 2
                Calculator::$num1 = $num1;
                Calculator::$num2 = $num2;
                Calculator::$operator = $operator;
                echo Calculator::calc2();
            }
        ?>
    </div>
</body>
</html>