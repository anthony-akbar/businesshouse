<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Objects;
use App\Service;
use App\Slider;
use App\SliderItem;

class HomeController extends Controller
{
    public function index(){
        $slider = Slider::all();
        $sliderItem = SliderItem::all();
        $objects = Objects::all();
        $services = Service::all();
        return view('front.main.index', compact('services','slider', 'sliderItem', 'objects'));
    }
}
