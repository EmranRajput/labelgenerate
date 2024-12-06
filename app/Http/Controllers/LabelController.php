<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabelController extends Controller
{
    public function CreateLabel(){
        return view('user.labels.create_label');
    }
    public function MyLabel(){
        return view('user.labels.my_label');
    }
     public function RechargePlan(){
        return view('user.labels.recharge_plan');
    }
}

