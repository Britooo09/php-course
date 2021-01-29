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
    $ivaRate = 0.0825;
    $products["PC"]=750;
    $products["Automóvil"]=15000;
    $products["iPhone"]=1000;
    $products["Tostadora"]=75;
    //Fin de la designación

    //Comienza el frontend
    echo "<h1 style='text-align:center'>¡Bienvenido a ".$name."!</h1>";
    echo "<h3>Tienes actualmente $".$credit." en tu cartera</h3><hr><hr>";
    foreach ($products as $key => $value) {
        $pFinal = iva_calc($value,$ivaRate);
        echo "<h3 style='font-family:Playfair Display'>".$key."</h3><p>".$pFinal." (IVA incluido).</p>";
        //Pedazo de jugada me acabo de aventar
        if ($credit < $pFinal) {
            echo "<p style='color:red'>Fondos insuficientes</p><hr>";
        }
            else {
                echo "<p style='color:green'>Artículo disponible</div></p><hr>";
            }
        }
    //Fin del frontend

    //Funciones
    function iva_calc($amount,$ivaRate){
        $calcular_iva = $amount*$ivaRate;
        $amountIva = round($amount+$calcular_iva,2);
        return $amountIva;
    }
    ?>
</body>
</html>