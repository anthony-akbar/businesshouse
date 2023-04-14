<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Objects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ObjectsController extends Controller
{
    public function index() {
        $objects = Objects::orderBy('title', 'desc')->paginate(12);
        return view('admin.objects.index', compact('objects'));
    }

    public function store(Request $request) {
        $data = $request->all();
        $data['image'] = Storage::put('/images', $request['image']);
        Objects::create($data);
        return redirect()->route('admin.objects.index');
    }
}
