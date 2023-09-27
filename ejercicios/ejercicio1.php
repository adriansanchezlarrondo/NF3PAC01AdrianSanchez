<?php
date_default_timezone_set("Europe/Madrid");
$diaActual = date("d-m-Y");

$haceDosDias = date("d-m-Y", strtotime("-2 days"));
$siguienteMes = date("F Y", strtotime("+1 month"));
$diasSiguienteMes = date("t", strtotime("+1 month")) - date("j");
$mesesHastaSiguienteAgno = 12 - date("n");

echo "Hace dos días fue $haceDosDias.</br>";
echo "El próximo mes es $siguienteMes.</br>";
echo "Quedan $diasSiguienteMes días para el próximo mes.</br>";
echo "Quedan $mesesHastaSiguienteAgno meses en el año actual.";
?>



