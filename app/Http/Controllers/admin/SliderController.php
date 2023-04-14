<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Slider;
use App\SliderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index() {
        $slider = Slider::all();
        $sliderItem = SliderItem::all();
        return view('admin.slider.index', compact('slider', 'sliderItem'));
    }

    public function store(Request $request){
        Slider::create($request->all());
        return redirect()->route('admin.slider');
    }

    public function destroy($id) {
        Slider::destroy($id);
        return redirect()->route('admin.slider');
    }

    public function itemStore(Request $request){
        $data = $request->all();
        $data['image'] = Storage::put('/images', $request['image']);
        SliderItem::create($data);
        return redirect()->route('admin.slider');
    }
}
