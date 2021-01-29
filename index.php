<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Store</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@800&family=Source+Sans+Pro&display=swap');
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
    echo "<h3>Tienes actualmente $".$credit." en tu cartera</h3>";
    foreach ($products as $key => $value) {
        echo "<p>Precio de ".$key.": $".$value.".</p>";
        //Pedazo de jugada me acabo de aventar
        if ($credit < $value) {
            echo "<p style='color:gray'>¿Puedes comprarlo?: <p style='color:red'>No</p></p><hr>";
        }
            else {
                echo "<p style='color:gray'>¿Puedes comprarlo?: <p style='color:green'>Sí</p></p><hr>";
            }
        }
        echo iva_calc(750,0.223);
    //Fin del frontend

    //Funciones
    function iva_calc($amount,$iva){
        $calculate_iva = $amount*$iva;
        $amount = round($amount+$calculate_iva,2);
        return $amount;
    }
    ?>
</body>
</html>