<?php
namespace Api;

use Exception;

class ApiException extends Exception
{
}

class ApiClient
{
    private $apiKey;
    private $baseUrl = 'https://demo.flexmms.com/v3/api/incidents/';

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getIncidents($startDate, $endDate)
    {
        $url = $this->baseUrl . '?view=detailed&start=' . $startDate . '&end=' . $endDate;

        $headers = [
            'api-key: ' . $this->apiKey,
            'Content-Type: application/json'
        ];

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($curl);

        if (curl_errno($curl)) {
            throw new ApiException('API request failed because of: ' . curl_error($curl));
        }

        curl_close($curl);

        return json_decode($response, true);
    }
}
?>