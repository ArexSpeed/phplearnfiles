<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    //regular
       // $string = "Hello I am Arek, my surename is Arek";

    //    preg_match("/Arek/", $string);
    //    if(preg_match_all("/Arek/", $string, $array)){
    //        print_r($array);
    //    }
    // 
      ////Replace  
    // $string2 = preg_replace("/Arek/", "John", $string);

    // echo $string2;

    //$string = "Hello I am Arek, my surename is Arek";

    //echo preg_match_all("/Arek/", $string); //ilosc wystepowania
    //echo preg_match_all("/A.*/", $string, $array); //wyswietla wszystko po pierwszym znalezieniu danej liter (A)
    //print_r($array);

    //echo preg_match_all("/A.*m/", $string, $array); //wyswietla wszystko po pierwszym znalezieniu danej liter (A) i konczy na danej(m)
    //print_r($array);

    // $string = "Hello me 1name2 is Arek, my surename is 1Arek2";
    // echo preg_match_all("/1.*?2/", $string, $array); //wysiwetla pomiedzy znakami i je dzieli na tablice
    // print_r($array);


    $string = "Hello me name is 123Arek, my surename is Arek";
    echo preg_match_all("/\S{3}/", $string, $array); //wysiwetla pomiedzy znakami i je dzieli na tablice
    print_r($array);

        //search for
        // preg_match("/\s{1}/", $string, $array); //search string
        // preg_match("/\S{1}/", $string, $array); //search no string z _all dzieli bez spacji na tablice 
        // preg_match("/\d{1}/", $string, $array); // search digit
        // preg_match("/\D{1}/", $string, $array); // search no digit z _all dzieli na tablice na tyle znakow ile wybierzemy {3}

    
    ?>
    <br><br><br>
    <a href="randstr.php">RAnd</a>
</body>
</html>