<?php
    //for odc 3-8
    //include "includes/newclasses.php";

    //for odc 9
   include 'includes/autoloader.php';

    ?>

<!DOCTYPE html>
<html lang="en">
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
    //ODC 3-4
        // $pet01 = new Pet();

        // echo $pet01->owner();

        //ODC 5
        // $person1 = new Person();
        // $person1->setName("Arek");
        // echo $person1->name;

        // $person2 = new Person();
        // $person2->setName("Arland");
        // echo $person2->name;

        //ODC 6
        // $person1 = new Person("arek",'Green',24);
        // echo $person1->getName();

        //ODC 8
        // echo Person::$drinkingAge;
        // Person::setDrinkingAge(18);
        // echo Person::$drinkingAge;

        $person1 = new Person/Person("arek",'Green',24);
        echo $person1->getPerson();
        echo "<br>";

        $house1 = new House("Wybickiego", 36);
        echo $house1->getHouse();

    ?>  
</body>
</html>