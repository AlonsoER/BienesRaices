<?php

function conectarDB(): mysqli
{
    $db = mysqli_connect('localhost', 'root', 'root', 'bienes_raices');

    if (!$db) {
        echo "Error, no se pudo conectar :'(";
        exit;
    }
    mysqli_set_charset($db, 'utf8');
    return $db;
}
