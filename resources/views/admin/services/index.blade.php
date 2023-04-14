@extends('layouts.admin')

@section('content')
    <div class="intro-y flex flex-col sm:flex-row items-center p-10">
        <h2 class="text-lg font-medium mr-auto">Services</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            @include('admin.services.create')
        </div>
    </div>

    <div class="col-span-12 grid grid-cols-12 gap-6 mt-8">

        @foreach($services as $key=>$service)

    <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y" data-aos-delay="{{$key+1}}00">
        <div class="box p-5 zoom-in">
            <div class="flex-none ml-auto relative">
                <div class="w-[90px] h-[90px]">
                    <i style="font-size: 90px" class="{{ $service->icon }}"></i>
                </div>
                <div class="font-normal absolute w-full h-full flex items-center justify-center top-0 left-0">{{ $service->title }}</div>
            </div>
            <div class="flex items-center mt-8">
                <div class="w-2/4 flex-none">
                    <div class="text-lg font-medium truncate">{{ $service->description }}</div>
                </div>
            </div>
        </div>
    </div>
        @endforeach
    </div>

@endsection
