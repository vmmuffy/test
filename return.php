<?php
header("Access-Control-Alow-Origin: *");
header("Access-Control-Alow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Content-Type: application/json");
echo json_encode($array);
exit;