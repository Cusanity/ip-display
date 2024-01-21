<?php
$localIpAddress = $_SERVER['SERVER_ADDR'];

// Function to fetch external IP address with error handling
function getExternalIpAddress() {
    $externalIpAddress = @file_get_contents('https://api64.ipify.org?format=json');

    if ($externalIpAddress === false) {
        // Handle error if unable to fetch external IP
        return null;
    }

    $externalIpData = json_decode($externalIpAddress, true);

    if (json_last_error() === JSON_ERROR_NONE && isset($externalIpData['ip'])) {
        return $externalIpData['ip'];
    } else {
        // Handle error if unable to parse JSON or extract IP
        return null;
    }
}

$externalIpAddress = getExternalIpAddress();

echo json_encode(['localIp' => $localIpAddress, 'externalIp' => $externalIpAddress]);
?>
