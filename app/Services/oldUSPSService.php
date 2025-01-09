<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;  ////


class USPSService
{
    private $apiUrl;
    private $userId;
    private $client;   ///////


    public function __construct()
    {
        $this->apiUrl = config('services.usps.url', env('USPS_API_URL'));
        $this->userId = config('services.usps.user_id', env('USPS_USER_ID'));

         // Create a new Guzzle client
        $this->client = new Client([            ////
            'base_uri' => $this->apiUrl,
            'timeout' => 10.0, // Set timeout for requests
            'verify' => base_path('certificates/cacert.pem'), // Set path to cacert.pem if needed
            //'verify' => false, // Set path to cacert.pem if needed

        ]);
    }

    public function validateAddress($address)
    {
        $xmlRequest = $this->buildAddressValidationRequest($address);


        try {                                        ////////////////////////
            // Make the GET request to the USPS API
            $response = $this->client->get('', [
                'query' => [
                    'API' => 'Verify',
                    'XML' => $xmlRequest,
                ],
            ]);

            // Return the response body as a string
            $body = $response->getBody()->getContents();

            return $this->parseResponse($body);
        } catch (\Exception $e) {
            throw new \Exception('USPS API request failed: ' . $e->getMessage());
        }

        // $response = Http::get($this->apiUrl, [
        //     'API' => 'Verify',
        //     'XML' => $xmlRequest
        // ]);

        // if ($response->ok()) {
        //     //return $this->parseResponse($response->body());
        //     return [
        //     'raw_response' => $response->body(),
        //     'parsed_response' => $this->parseResponse($response->body()),
        //     ];
        // }

        // throw new \Exception('USPS API request failed: ' . $response->status());
    }


    private function buildAddressValidationRequest($address)
    {
        return <<<XML
            <AddressValidateRequest USERID="{$this->userId}">
                <Address ID="0">
                    <Address1>{$address['address1']}</Address1>
                    <Address2>{$address['address2']}</Address2>
                    <City>{$address['city']}</City>
                    <State>{$address['state']}</State>
                    <Zip5>{$address['zip5']}</Zip5>
                    <Zip4>{$address['zip4']}</Zip4>
                </Address>
            </AddressValidateRequest>
        XML;
    }


    private function parseResponse($responseXml)
    {
        // \Log::info('USPS Response: ' . $responseXml);
        $xml = simplexml_load_string($responseXml);
        $json = json_encode($xml);
        return json_decode($json, true);
    }
    
}


