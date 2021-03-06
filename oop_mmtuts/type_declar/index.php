<?php
    declare(strict_types = 1);
    include "includes/class-autoload.php"
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    body{
        background-color: #333;
        color: #ddd;
    }
    </style>
</head>
<body>
    
    <?php
        $person1 = new Person();

        try{
            $person1->setName("Arek");
            echo $person1->getName();
        }catch (TypeError $e){
            echo "Error! ". $e->getMessage();
        }

        ?>
        <form action="includes/calc.inc.php" method="post">
            <p>My own calculator</p>
            <input type="number" name="num1" placeholder="First number">
            <select name="oper">
                <option value="add">Add</option>
                <option value="sub">Sub</option>
                <option value="div">Div</option>
                <option value="mul">Mul</option>
           </select>
           <input type="number" name="num2" placeholder="Second number">
           <button type="submit" name="submit">Calc</button>
        </form>


</body>
</html>