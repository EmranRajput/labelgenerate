<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class USPSService
{
    protected $apiUrl;
    protected $tokenUrl;
    protected $clientId;
    protected $clientSecret;
    protected $accessToken;

    public function __construct()
    {
        $this->apiUrl = config('services.usps.api_url', env('USPS_API_URL'));
        $this->tokenUrl = $this->apiUrl . env('USPS_OAUTH_TOKEN_URL');
        $this->clientId = env('USPS_CLIENT_ID');
        $this->clientSecret = env('USPS_CLIENT_SECRET');
    }

    // Generate OAuth Token
    public function getAccessToken()
    {
        if ($this->accessToken) {
            return $this->accessToken;
        }

        $response = Http::asForm()->post($this->tokenUrl, [
            'grant_type' => 'client_credentials',
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
        ]);

        if ($response->failed()) {
            throw new \Exception('Failed to obtain USPS OAuth token: ' . $response->body());
        }

        $this->accessToken = $response->json('access_token');
        return $this->accessToken;
    }

    // Generic USPS API Request
    public function sendRequest($endpoint, $method = 'GET', $data = [])
    {
        $url = $this->apiUrl . $endpoint;
        $token = $this->getAccessToken();

        $response = Http::withToken($token)->{$method}($url, $data);

        if ($response->failed()) {
            throw new \Exception('USPS API Error: ' . $response->body());
        }

        return $response->json();
    }

    // Create Label Example
    public function createLabel($payload)
    {
        return $this->sendRequest('/labels/v3', 'POST', $payload);
    }

    // Cancel Label Example
    public function cancelLabel($trackingNumber)
    {
        return $this->sendRequest("/labels/v3/{$trackingNumber}", 'DELETE');
    }
}
