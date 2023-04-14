@extends('layouts.admin')

@section('content')
    <div class="intro-y flex flex-col sm:flex-row items-center p-10">
        <h2 class="text-lg font-medium mr-auto">Features</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        </div>
    </div>
    <form action="{{ route('test.store') }}" enctype="multipart/form-data">
        @csrf
        <textarea name="des" id="description" class="ck-editor"></textarea>
            <button type="submit" class="btn btn-primary">Submit</button>
        <div class="form-group">
            <label>Default</label>
            <input class="form-control icp icp-auto" value="fas fa-anchor" type="text"/>
        </div>
    </form>

@endsection
@section('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
        $('.icp-auto').Iconpicker();
    </script>
@endsection
