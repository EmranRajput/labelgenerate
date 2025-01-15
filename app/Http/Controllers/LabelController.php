<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LabelController extends Controller
{
    public function CreateLabel(){
        return view('user.labels.create_label');
    }
    public function MyLabel(Request $request){
            //    dump($request->input('priceTxt'));
    //    dump($request->input('lenghtTxt'));
    //    dump($request->input('widthTxt'));
    //    dump($request->input('heightTxt'));
    //    dump($request->input('nameFrm'));
    //    dump($request->input('nameTo'));
    //    dump($request->input('companyFrm'));
    //    dump($request->input('companyTo'));
    //    dump($request->input('phoneFrm'));
    //    dump($request->input('phoneTo'));
    //    dump($request->input('streetFrm'));
    //    dump($request->input('streetTo'));
    //    dump($request->input('street2Frm'));
    //    dump($request->input('street2To'));
    //    dump($request->input('zipFrm'));
    //    dump($request->input('zipTo'));
    //    dump($request->input('cityFrm'));
    //    dump($request->input('cityTo'));
    //    dump($request->input('stateFrm'));
    //    dump($request->input('stateTo'));
    //    dump($request->input('reference1'));
    //    dump($request->input('reference2'));
    //    dump($request->input('reference3'));
       $token= $this->getToken();
       $paymentToken=$this->authorizePayment($token);
       $req=$this->LabelCreation($token,$paymentToken,$request);
       
              return view('user.labels.my_label');
    }
     public function RechargePlan(){
        return view('user.labels.recharge_plan');
    }

    public function getToken()
   { 
    
    $url = 'https://api-cat.usps.com/oauth2/v3/token';

    // Define the payload
    $payload = [
        'grant_type' => 'client_credentials',
        'client_id' => 'zRdQBR8lNvGzDdqvRwGICxgAwY7mgHz9',
        'client_secret' => 'hZ4B4E6nOJvHvEzL',
    ];

    // Make the HTTP POST request
     $response = Http::withOptions(['verify' => false])
        ->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->post($url, $payload);
        // Check if the response is successful
       
        if ($response->successful()) {
            // Process the response
            $data = $response->json(); // Parse JSON data
            return $data["access_token"]; // Dump the response data
        } else {
            // Handle errors
            return "Error";
        }

        // Handle errors
        return response()->json([
            'message' => 'Failed to retrieve token',
            'error' => $response->json(),
        ], $response->status());
    }


public function authorizePayment($token)
{
    // Define the API endpoint
    $url = 'https://api-cat.usps.com/payments/v3/payment-authorization';

    // Define the payload
    $payload = [
        "roles" => [
            [
                "roleName" => "LABEL_OWNER",
                "CRID" => "94879959",
                "MID" => "901097701",
                "manifestMID" => "901097699",
                "accountType" => "EPS",
                "accountNumber" => "1000005549",
            ],
            [
                "roleName" => "PAYER",
                "CRID" => "94879959",
                "MID" => "901097701",
                "manifestMID" => "901097699",
                "accountType" => "EPS",
                "accountNumber" => "1000005549",
            ],
        ],
    ];

    // Define the Authorization Bearer Token
    $bearerToken =$token; // Use the actual token or fetch dynamically.

    // Make the HTTP POST request
    $response = Http::withOptions(['verify' => false])
    ->withHeaders([
        'Content-Type' => 'application/json',
        'Authorization' => 'Bearer ' . $bearerToken, // Ensure there is a space after 'Bearer'
    ])
    ->post($url, $payload);

    // Check if the response is successful
    if ($response->successful()) {
        // Return the parsed JSON response
        $data = $response->json();
       return $data["paymentAuthorizationToken"];
    } else {
        // Handle errors
        return response()->json([
            'message' => 'Failed to authorize payment',
            'status_code' => $response->status(),
            'error' => $response->body(),
        ], $response->status());
    }
}


public function LabelCreation($token,$paymentToken,$request)
{
    // API URL
    $url = 'https://api-cat.usps.com/labels/v3/label';

    // Payment Authorization Token and Bearer Token
    $paymentAuthToken = $paymentToken; // Replace with the actual token
    $bearerToken =$token; // Replace with the actual Bearer token

    // Request Payload
    $payload = [
        "toAddress" => [
            "firstName" =>"Mr",
            "lastName" => $request->input('nameTo'),
            "streetAddress" => $request->input('streetTo'),
            "city" => $request->input('cityTo'),
            "state" => $request->input('stateTo'),
            "ZIPCode" => $request->input('zipTo'),
        ],
        "fromAddress" => [
            "firstName" => "Mr",
            "lastName" => $request->input('nameFrm'),
            "streetAddress" => $request->input('streetFrm'),
            "city" => $request->input('cityFrm'),
            "state" =>  $request->input('stateFrm'),
            "ZIPCode" =>$request->input('zipFrm'),
        ],
        "packageDescription" => [
            "mailClass" => "USPS_GROUND_ADVANTAGE",
            "rateIndicator" => "SP",
            "weightUOM" => $request->input('weightTxt'),
            "weight" => 0.5,
            "dimensionsUOM" => "in",
            "length" => $request->input('lenghtTxt'),
            "height" =>$request->input('heightTxt'),
            "width" => $request->input('widthTxt'),
            "processingCategory" => "NON_MACHINABLE",
            "mailingDate" => now()->toDateString(),
            "extraServices" => [],
            "destinationEntryFacilityType" => "NONE",
        ],
    ];

    // Send the HTTP POST Request
    $response = Http::withOptions(['verify' => false])
    ->withHeaders([
        'X-Payment-Authorization-Token' => $paymentAuthToken,
        'Authorization' => 'Bearer ' . $bearerToken,
        'Content-Type' => 'application/json',
    ])->post($url, $payload);

    // Handle the Response
    if ($response->successful()) {
        $content = $response->body();
        $boundary = $this->extractBoundary($response->headers());

        if (!$boundary) {
            \Log::error('Boundary not found in Content-Type header', ['headers' => $response->headers()]);
            return response()->json(['error' => 'Boundary not found'], 500);
        }

        // Split the response body by the boundary
        $parts = explode("--$boundary", $content);

        foreach ($parts as $part) {
            if (str_contains($part, 'Content-Type: application/pdf')) {
                // Extract PDF Content
                $pdfContent = base64_decode($this->extractBodyContent($part));

                if (!$pdfContent) {
                    \Log::error('Failed to decode PDF content');
                    return response()->json(['error' => 'Failed to decode PDF content'], 500);
                }

                // Save the PDF file
                $filePath = storage_path('app/public/label.pdf');
                file_put_contents($filePath, $pdfContent);
                \Log::info('PDF Saved Successfully', ['path' => $filePath]);
            }
        }
    } else {
        return response()->json([
            'message' => 'Failed to create label',
            'status_code' => $response->status(),
            'error' => $response->body(),
        ], $response->status());
    }
}
private function extractBoundary($headers)
{
    $contentType = $headers['Content-Type'][0] ?? $headers['Content-Type'] ?? ''; // Handle cases where it's an array
    preg_match('/boundary=(.+)$/', $contentType, $matches);
    return $matches[1] ?? '';
}

/**
 * Extract the body content from a multipart part.
 */
private function extractBodyContent($part)
{
    $segments = explode("\r\n\r\n", $part, 2);
    return trim(end($segments));
}
}

