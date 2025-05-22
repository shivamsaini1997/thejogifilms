<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Testimonials;
use App\Models\WeddingFilms;
use App\Models\WeddingWork;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Homepage(){
        $testimonial = Testimonials::orderBy('created_at', 'desc')->get();
        $weddingwork = WeddingWork::orderBy('created_at', 'desc')->get();
        $weddingfilms = WeddingFilms::orderBy('created_at', 'desc')->get();
        $allcategory = Category::get();
        $data = compact('testimonial','weddingwork','allcategory','weddingfilms');
        // dd($data);
        return view('frontend.index')->with($data);
    }
  
}
