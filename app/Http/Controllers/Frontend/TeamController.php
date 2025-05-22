<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function Team(){
        $teams = Team::where('status' , 1)->get();
        $data = compact('teams');
        return view('frontend.team')->with($data);
    }
}
