<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\FeaturesController;
use App\Http\Controllers\admin\ObjectsController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\front\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

Route::group(['prefix'=>'objects', 'namespace'=>'front'], function () {
    Route::get('/{id}', [\App\Http\Controllers\front\ObjectsController::class, 'show'])->name('objects.show');
});


Route::group(['prefix'=>'admin', 'namespace'=>'admin'], function (){
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::group(['prefix'=>'slider'], function (){
        Route::get('/', [SliderController::class, 'index'])->name('admin.slider');
        Route::post('/store', [SliderController::class, 'store'])->name('admin.slider.store');
        Route::post('/itemstore', [SliderController::class, 'itemStore'])->name('admin.slider.itemstore');
        Route::post('/delete/{id}', [SliderController::class, 'destroy'])->name('admin.slider.delete');
    });

    Route::group(['prefix'=>'objects'], function (){
       Route::get('/', [ObjectsController::class, 'index'])->name('admin.objects.index');
       Route::post('/store', [ObjectsController::class, 'store'])->name('admin.objects.store');
       Route::post('/edit/{id}', [ObjectsController::class, 'edit'])->name('admin.objects.edit');
       Route::post('/delete{id}', [ObjectsController::class, 'destroy'])->name('admin.objects.delete');
    });

    Route::group(['prefix' => 'features'], function (){
        Route::get('/', [FeaturesController::class, 'index'])->name('admin.features');
    });

    Route::group(['prefix'=>'services'], function () {
        Route::get('/', [\App\Http\Controllers\ServicesController::class, 'index'])->name('admin.services');
        Route::post('/store', [\App\Http\Controllers\ServicesController::class, 'store'])->name('admin.services.store');
    });
});

Route::get('/teststore', function (\Illuminate\Http\Request $request){
   dd($request->all());
})->name('test.store');
