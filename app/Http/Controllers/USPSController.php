<?php

namespace App\Http\Controllers;

use App\Services\USPSService;
use Illuminate\Http\Request;

class USPSController extends Controller
{
    private $uspsService;

    public function __construct(USPSService $uspsService)
    {
        $this->uspsService = $uspsService;
    }

    public function validateAddress(Request $request)
    {
      // return response()->json(['message' => 'Route is working'], 200);
        $request->validate([
            'address1' => 'nullable|string',
            'address2' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip5' => 'required|string',
            'zip4' => 'nullable|string',
        ]);
        //return response()->json($request->all());

        try {
            $validatedAddress = $this->uspsService->validateAddress($request->all());
            // \Log::info('USPS Response: ', $validatedAddress);
           // return response()->json($validatedAddress);
             return response()->json([
                'status' => 'success',
                'data' => $validatedAddress,
            ]);

        } catch (\Exception $e) {
            //return response()->json(['error' => $e->getMessage()], 500);
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
