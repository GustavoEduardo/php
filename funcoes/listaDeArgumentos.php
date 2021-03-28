<?php
function soma(...$numeros) {
    $result = 0;    
    foreach ($numeros as $n) {
        $result += $n;
    }
    return $result;
}

echo "Resultado: ".soma(1, 2.9, 3, 4, 5);
?>