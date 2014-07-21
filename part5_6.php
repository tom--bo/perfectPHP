<?php
// phpの参照
function array_pass($array)
{
    $array[0] *=2;
    $array[1] *=2;
}

function array_pass_ref(&$array)
{
    $array[0] *= 2;
    $array[1] *= 2;
}

$a = 10;
$b = 20;

$array = array($a, &$b);
// array_pass($array);
array_pass_ref($array);

echo $a.'<br>';
echo $b.'<br>';