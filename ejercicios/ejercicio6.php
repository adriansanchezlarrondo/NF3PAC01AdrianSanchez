<?php
session_start();

if (isset($_SESSION['pageLoads'])) {
    $_SESSION['pageLoads']++;
} else {
    $_SESSION['pageLoads'] = 1;
}

echo "Esta página ha sido cargada " . $_SESSION['pageLoads'] . " veces.";
?>




