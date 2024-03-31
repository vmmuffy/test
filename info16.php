<?php
$data = '2024/01/29';

$time = strtotime($data);

//echo date('d/m/Y', $time);
echo new Dat($time);