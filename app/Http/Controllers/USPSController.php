<?php

namespace App\Http\Controllers;

use App\Services\USPSService;
use Illuminate\Http\Request;

class USPSController extends Controller
{
    protected $uspsService;

    public function __construct(USPSService $uspsService)
    {
        $this->uspsService = $uspsService;
    }

    // Generate Label
    public function createLabel(Request $request)
    {
        $validated = $request->validate([
            'toAddress.firstName' => 'required|string',
            'toAddress.lastName' => 'required|string',
            'toAddress.streetAddress' => 'required|string',
            'toAddress.city' => 'required|string',
            'toAddress.state' => 'required|string',
            'toAddress.ZIPCode' => 'required|string',
            'fromAddress.firstName' => 'required|string',
            'fromAddress.lastName' => 'required|string',
            'fromAddress.streetAddress' => 'required|string',
            'fromAddress.city' => 'required|string',
            'fromAddress.state' => 'required|string',
            'fromAddress.ZIPCode' => 'required|string',
            'packageDescription.mailClass' => 'required|string',
            'packageDescription.weight' => 'required|numeric',
            'packageDescription.length' => 'required|numeric',
            'packageDescription.width' => 'required|numeric',
            'packageDescription.height' => 'required|numeric',
        ]);

        try {
            $response = $this->uspsService->createLabel($validated);
            return response()->json($response);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    // Cancel Label
    public function cancelLabel($trackingNumber)
    {
        try {
            $response = $this->uspsService->cancelLabel($trackingNumber);
            return response()->json($response);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
