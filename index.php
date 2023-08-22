<?php
require 'vendor/autoload.php';
use api\ApiClient;
use views\ListView;

$apiKey = "SzVlZGUwYzdjMTg1Y2M4LjM2NTM5MzYw";
$startDate = strtotime("2015-01-01");
$endDate = time();

try {
    $apiClient = new ApiClient($apiKey);
    $incidents = $apiClient->getIncidents($startDate, $endDate);

    ListView::displayIncidents($incidents);

} catch (ApiException $e) {
    echo 'API Error: ' . $e->getMessage();
}
?>