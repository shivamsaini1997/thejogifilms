<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\WeddingWork;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class weddingWorkCom extends Component
{
    public $categorys;
    public $wedding;
    public $weddings;

    public function __construct($categorys, $wedding,$weddings)
    {
        $this->categorys = $categorys;
        $this->wedding = $wedding;
        $this->weddings = $weddings;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $weddingwork = WeddingWork::orderBy('created_at', 'desc')->get();
        $allcategory = Category::get();

        $data = compact('weddingwork','allcategory');
        return view('components.wedding-work-com')->with($data);
    }
}
