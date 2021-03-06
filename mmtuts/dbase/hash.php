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
        // echo 'arek';
        // echo "<br>";
        // echo password_hash("arek", PASSWORD_DEFAULT);

        $input = "test123";
        $hashedPwdInDb = password_hash("test123", PASSWORD_DEFAULT);

        echo password_verify($input, $hashedPwdInDb);
    ?>

</body>
</html>