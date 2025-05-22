<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\WeddingFilms;
use App\Models\WeddingWork;
use Illuminate\Http\Request;

class WorkPortfolioController extends Controller
{
    public function WorkProtfolio($slug){
        $categorys = Category::where('slug', $slug)->first();
        $weddingfilms = WeddingFilms::orderBy('created_at', 'desc')->get();        
        $WorkProtfolio = WeddingWork::orderBy('created_at', 'desc')->get();
        $data = compact('categorys','WorkProtfolio','weddingfilms');
        // dd($data);
        return view('frontend.work')->with($data);
    }
}
