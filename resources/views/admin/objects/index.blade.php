@extends('layouts.admin')

@section('content')

    <div class="intro-y flex flex-col sm:flex-row items-center p-10">
        <h2 class="text-lg font-medium mr-auto">Objects</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            @include('admin.objects.create')
        </div>
    </div>
    <input type="text" class="form-control iconpicker" placeholder="Icon Picker" aria-label="Icone Picker"
           aria-describedby="basic-addon1">
    <div id="Content" class="grid grid-cols-12 gap-6 mt-5">
        @foreach($objects as $key => $object)
            <div
                class="intro-y col-span-12  md:col-span-6lg:col-span-4 xl:col-span-3 shadow-lg border-black btn-rounded-dark">
                <div class="box border-b-2 border-l-2 border-opacity-10 border-black">
                    <div class="p-5">
                        <div
                            class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10">
                            <img alt="Midone - HTML Admin Template" class="rounded-md"
                                 src="{{asset('storage/'.$object->image)}}">
                            <div class="absolute bottom-0 text-white px-5 pb-6 z-10">
                                <a href=""
                                   class="block font-medium text-base">{{ $object->title ?? '' }}</a>
                                <span
                                    class="text-white/90 text-xs mt-3">{{ $object->description ?? '' }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                        @include('admin.objects.edit')

                        <!-- BEGIN: Modal Toggle -->
                        <a href="javascript:;" data-tw-toggle="modal"
                           data-tw-target="#delete-modal-preview-{{$object->id}}"
                           class="flex text-danger">
                            <i data-lucide="trash-2" class="px-1 text-danger"></i>
                            Delete</a>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <div id="delete-modal-preview-{{$object->id}}" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body p-0">
                                        <div class="p-5 text-center">
                                            <i data-lucide="x-circle"
                                               class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                            <div class="text-3xl mt-5">Are you sure?</div>
                                            <div class="text-slate-500 mt-2">Do you really want to delete these
                                                records? <br>This process cannot be undone.
                                            </div>
                                        </div>
                                        <div class="px-5 pb-8 text-center">
                                            <form action="{{ route('admin.objects.delete', $object->id) }}"
                                                  method="post">
                                                <button type="button" data-tw-dismiss="modal"
                                                        class="btn btn-outline-secondary w-24 mr-1">Cancel
                                                </button>
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outline-danger w-24">Yes
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Modal Content -->
                    </div>
                </div>
            </div>
        @endforeach
        <div class="grid grid-cols-2">
            <div class="mt-10 grid-cols-1 text-center">
                {{$objects->withQueryString()->links()}}
            </div>
        </div>
    </div>

@endsection
