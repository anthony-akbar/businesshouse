<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Objects;
use Illuminate\Http\Request;

class ObjectsController extends Controller
{


    public function show($id) {
        $object = Objects::find($id);
        return view('front.objects.show', compact('object'));
    }

}
