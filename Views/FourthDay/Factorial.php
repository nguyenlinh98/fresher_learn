<?php
//  Tính giao thừa
function fact($n)
{
    $fact = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fact = $fact * $i;

    }
    echo $n . "! =" . $fact;
}

fact(7);
