<?php
$diaActual = date("n");

$comienzoVerano = 172;
$finalVerano = 263;

if ($diaActual >= $comienzoVerano && $diaActual <= $finalVerano) {
    echo "¡Buen verano!";
} else {
    echo "¡Buen invierno!";
}
?>




