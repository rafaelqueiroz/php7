<?php
$a = isset($b) ? $b : -1;
$a = $b ?? -1;

echo $a;
// results: -1
$a = null;
$b = null;
$c = 10;
$d = null;

var_dump ($a ?? $b ?? $c ?? $d);
// results: 10