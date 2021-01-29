<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Store</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Source+Sans+Pro&display=swap');
        h1 { font-family: 'Playfair Display', serif; }
        body { font-family: 'Source Sans Pro', sans-serif; }
    </style>
</head>
<body>
    <?php
    //Designación de variables
    $name = "PHP Store";
    $credit = 1000;
    $products["PC"]=750;
    $products["Automóvil"]=15000;
    $products["iPhone"]=1000;
    $products["Tostadora"]=75;
    //Fin de la designación

    //Comienza el frontend
    echo "<h1>¡Bienvenido a ".$name."!</h1>";
    echo "<h3>Tienes actualemente $".$credit." en tu cartera</h3>";
    foreach ($products as $key => $value) {
        echo "<p>Precio de ".$key.": $".$value.".</p>";
    }
    //Fin del frontend
    ?>
</body>
</html>