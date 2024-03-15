<?php
// Crear una variable que guarde un numero
$numero = 10;

// Verificar si el numero es negativo, positivo o cero
if ($numero < 0) {
    echo "El numero es negativo";
} elseif ($numero > 0) {
    echo "El numero es positivo";
} else {
    echo "El numero es cero";
}
?>
<br> 

<?php
$meses_estaciones = array(
    "enero" => "invierno",
    "febrero" => "invierno",
    "marzo" => "primavera",
    "abril" => "primavera",
    "mayo" => "primavera",
    "junio" => "verano",
    "julio" => "verano",
    "agosto" => "verano",
    "septiembre" => "otoño",
    "octubre" => "otoño",
    "noviembre" => "otoño",
    "diciembre" => "invierno"
);

// Mes para verificar su estacion
$mes_a_verificar = "marzo";

// Usar switch para determinar la estación del año
switch ($meses_estaciones[$mes_a_verificar]) {
    case "invierno":
        echo "$mes_a_verificar invierno.";
        break;
    case "primavera":
        echo "$mes_a_verificar primavera.";
        break;
    case "verano":
        echo "$mes_a_verificar verano.";
        break;
    case "otoño":
        echo "$mes_a_verificar otoño.";
        break;
}
?>



