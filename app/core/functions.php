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

?>