<?php
function dd(...$vars) {
    echo '<strong>Debug Output:</strong><br>';
    
    foreach ($vars as $var) {
        var_dump($var);
        echo '<br>';
    }

    $backtrace = debug_backtrace()[0];

    echo '<strong>Arquivo: </strong>' . $backtrace['file'] . '<br>';
    echo '<strong>Linha: </strong>' . $backtrace['line'] . '<br>';

    die(); 
}

function config($key, $default = null) {
    $config = require_once __DIR__ . '/../config/config.php';
    return $config[$key] ?? $default;
}

?>