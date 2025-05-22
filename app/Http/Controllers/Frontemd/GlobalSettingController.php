<?php

namespace App\Http\Controllers\Frontemd;

use App\Http\Controllers\Controller;
use App\Models\GlobalSetting;
use Illuminate\Http\Request;

class GlobalSettingController extends Controller
{
    public function Contact(){
        $globalSetting = GlobalSetting::first();
        $data = compact('globalSetting');
        // dd($data);
        return view('frontend.contact')->with($data);
    }
}

