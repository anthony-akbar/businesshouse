@extends('layouts.admin')

@section('styles')
    <style>
        .center {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-input2 img {
            width: 10rem;
            display: none;
            align-items: center;
            justify-content: center;
        }

        .form-input2 input {
            display: none;
        }
    </style>
@endsection

@section('content')

    <div class="intro-y flex flex-col sm:flex-row items-center my-10">
        <h2 class="text-lg font-medium mr-auto">Slider Text</h2>
    </div>

    <div class="box p-5 intro-y">
        @if(!$slider->isEmpty())
            <div id="data">
                @foreach($slider as $item)
                    <div class="grid grid-cols-3 gap-2">
                        <div class="p-2">
                            <label>Title EN</label>
                            <p>{{ $item->title_en }}</p>
                        </div>
                        <div class="p-2">
                            <label>Title RU</label>
                            <p>{{ $item->title_ru }}</p>
                        </div>
                        <div class="p-2">
                            <label>Title KG</label>
                            <p>{{ $item->title_kg }}</p>
                        </div>

                        <div class="p-2">
                            <label>Sub-Title EN</label>
                            <p>{{ $item->subtitle_en }}</p>
                        </div>
                        <div class="p-2">
                            <label>Sub-Title RU</label>
                            <p>{{ $item->subtitle_ru }}</p>
                        </div>
                        <div class="p-2">
                            <label>Sub-Title KG</label>
                            <p>{{ $item->subtitle_kg }}</p>
                        </div>
                    </div>
                    <div class="text-right mt-5">
                        <!-- BEGIN: Modal Toggle -->
                        <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-modal-preview"
                           class="btn btn-outline-danger w-24 mr-1">Delete</a>
                        <button type="button" class="btn btn-outline-primary w-24">Edit</button>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->

                        <div id="delete-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body p-0">
                                        <div class="p-5 text-center"><i data-lucide="x-circle"
                                                                        class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                            <div class="text-3xl mt-5">Are you sure?</div>
                                            <div class="text-slate-500 mt-2">Do you really want to delete these
                                                records?
                                                <br>This process cannot be undone.
                                            </div>
                                        </div>
                                        <div class="px-5 pb-8 text-center">
                                            <form method="POST" action="{{ route('admin.slider.delete', $item->id) }}">
                                                @csrf
                                                <button type="button" data-tw-dismiss="modal"
                                                        class="btn btn-outline-secondary w-24 mr-1">Cancel
                                                </button>
                                                <button type="submit" class="btn btn-danger w-24">Delete</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Modal Content -->
                    </div>
                @endforeach
            </div>
        @else
            <div id="addbutton" class="text-center">
                <button onclick="addText()" type="button" class="btn btn-primary w-24">Add New</button>
            </div>

            <div id="inputs" class="hidden">
                <form method="POST" action="{{ route('admin.slider.store') }}">
                    <div class="grid grid-cols-3 gap-2">
                        @csrf
                        <div class="p-2">
                            <label>Title EN</label>
                            <input name="title_en" type="text" class="form-control grid-cols-1" placeholder="Title EN">
                        </div>
                        <div class="p-2">
                            <label>Title RU</label>
                            <input name="title_ru" type="text" class="form-control grid-cols-1" placeholder="Title RU">
                        </div>
                        <div class="p-2">
                            <label>Title KG</label>
                            <input name="title_kg" type="text" class="form-control grid-cols-1" placeholder="Title KG">
                        </div>

                        <div class="p-2">
                            <label>Sub-Title EN</label>
                            <input name="subtitle_en" type="text" class="form-control grid-cols-1"
                                   placeholder="Sub-Title EN">
                        </div>
                        <div class="p-2">
                            <label>Sub-Title RU</label>
                            <input name="subtitle_ru" type="text" class="form-control grid-cols-1"
                                   placeholder="Sub-Title RU">
                        </div>
                        <div class="p-2">
                            <label>Sub-Title KG</label>
                            <input name="subtitle_kg" type="text" class="form-control grid-cols-1"
                                   placeholder="Sub-Title KG">
                        </div>
                    </div>
                    <div class="text-right mt-5">
                        <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="submit" class="btn btn-primary w-24">Save</button>
                    </div>
                </form>
            </div>
        @endif
    </div>

    <div class="intro-y flex flex-col sm:flex-row items-center my-5">
        <h2 class="text-lg font-medium mr-auto">Slider Items</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">

            <!-- BEGIN: Modal Toggle -->
            <div class="my-4">
                <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#static-backdrop-modal-preview"
                   class="btn btn-primary">Add Products</a>
            </div>
            <!-- END: Modal Toggle -->

            <!-- BEGIN: Modal Content -->
            <div id="static-backdrop-modal-preview" class="modal" data-tw-backdrop="static" tabindex="-1"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body px-5 py-10">
                            <div class="text-left">
                                <form class="mt-3" action="{{route('admin.slider.itemstore')}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="flex items-center justify-center w-full">
                                        <label class="flex flex-col w-full h-50" style="cursor: pointer">
                                            <div id="texts" class="text-lg font-medium text-center">Click here to upload.</div>
                                            <div class="flex flex-col items-center justify-center pt-7 center">
                                                <div class="form-input2">
                                                    <img class="w-100 h-32" id="file-ip-1-preview">
                                                    <input type="file" style="cursor: pointer" class="opacity-0 fallback"
                                                           name="image" id="file-ip-1" accept="image/*"
                                                           onchange="showPreview(event);" required/>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <button type="button" class="btn btn-secondary mt-5 w-24 mr-2" data-tw-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary w-24 text-">Ok</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Modal Content -->
        </div>
    </div>

    <div class="grid grid-cols-12 gap-5">

        @foreach($sliderItem as $item)
            <a class="intro-y block col-span-12 sm:col-span-4 2xl:col-span-3">
                <div class="box rounded-md p-3 relative zoom-in">
                    <div class="flex-none relative block before:block before:w-full before:pt-[100%]">
                        <div class="absolute top-0 left-0 w-full h-full image-fit">
                            <img alt="..." class="rounded-md" src="{{ asset('storage/'. $item->image) }}">
                        </div>
                    </div>
                </div>
            </a>
        @endforeach


    </div>

@endsection

@section('script')
    <script type="text/javascript">
        function addText() {
            $('#addbutton').addClass('hidden')
            $('#inputs').removeClass('hidden')
        }

        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
            $('#texts').addClass('hidden')
        }

        $(document).ready(function () {
            $(".floatNumberField").change(function () {
                $(this).val(parseFloat($(this).val()).toFixed(2));
            });
        });
    </script>
@endsection
