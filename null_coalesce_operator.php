<?php
// https://3v4l.org/eUAoJ
$a = isset($b) ? $b : -1;
$a = $b ?? -1;

echo $a;

// https://3v4l.org/DI3jl
$a = null;
$b = null;
$c = 10;
$d = null;

var_dump ($a ?? $b ?? $c ?? $d);