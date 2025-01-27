<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name="Erick";
        $lastname="Chinchilla";
        $edad=18;
        echo "hola $name tiene $edad años";
        echo 'Mi nombre es '.$name .''.$lastname;

        //Coercion de tipos
        $numero = "5";
        $numero2 = 5;
        var_dump(value: $numero==$numero2);
        var_dump(value: $numero===$numero2);

        //Casting Explicito
        $numero3=(int)$numero2;
        
    ?>
</body>
</html>