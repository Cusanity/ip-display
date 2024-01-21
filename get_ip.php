<?php
$serverIpAddress = $_SERVER['SERVER_ADDR'];
echo json_encode(['ip' => $serverIpAddress]);
?>
