<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\RechargePlans;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Exception;


class RechargePlansController extends Controller
{
    public function RechargePlans(){
        $plans = RechargePlans::latest()->get();
        return view('admin.recharge.recharge_plans', compact('plans'));
    }



    public function SubmitRechargePlans(Request $request){
         //dd($request->all());
          $validateRequest = $request->validate([
            'plan_name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:1',
        ]);

       
        try {
             RechargePlans::create($validateRequest);
                return redirect()->back()->with('success', 'Recharge Plan Created Succesffuly.');
                
        } catch (Exception $e) {

            return redirect()->back()->with('error', 'An error occurred while creating the recharge plan. Please try again later.');
        }
    } 


    public function EditRechargePlans($id){
        $plan = RechargePlans::find($id);
        return view('admin.recharge.edit_recharge_plans', compact('plan'));
    } 

    public function UpdateRechargePlans(Request $request){
        $plan_id = $request->plan_id;
         $validateRequest = $request->validate([
            'plan_name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:1',
        ]);

        try {
            $rechargePlan = RechargePlans::find($plan_id);
             $rechargePlan->update($validateRequest);
            return redirect()->route('recharge.plans')->with('success', 'Recharge Plan Updated Successfully.');
        } catch (Exception $e) {

            return redirect()->back()->with('error', 'An error occurred while Updated the recharge plan. Please try again later.');
        }
    }

    public function DeleteRechargePlans($id){
        try {
        $rechargePlan = RechargePlans::findOrFail($id);
        $rechargePlan->delete();

        return redirect()->route('recharge.plans')->with('success', 'Recharge Plan Deleted Successfully.');

        } catch (Exception $e) {

            return redirect()->back()->with('error', 'An error occurred while Deleted the recharge plan. Please try again later.');
        }    
    }

}
