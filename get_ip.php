<?php
$localIpAddress = $_SERVER['SERVER_ADDR'];
$externalIpAddress = file_get_contents('https://api64.ipify.org?format=json');
echo json_encode(['localIp' => $localIpAddress, 'externalIp' => json_decode($externalIpAddress, true)['ip']]);
?>
