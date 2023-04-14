<!-- BEGIN: Modal Toggle -->
<div class="text-center">
    <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#header-footer-modal-preview"
       class="btn btn-primary">ADD</a>
</div>
<!-- END: Modal Toggle -->

<!-- BEGIN: Modal Content -->
<div id="header-footer-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- BEGIN: Modal Header -->
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Adding new Service</h2>
                </div> <!-- END: Modal Header -->
                <!-- BEGIN: Modal Body -->
                <div class="modal-body gap-4 gap-y-3">
                    <div class="mt-3">
                        <label for="title" class="form-label">Icon</label>
                            <div class="d-inline-block p-3 text-center">
                                <i style="font-size: 50px;" id="icon" class=""></i>
                            </div>
                            <div>
                                <input id="iconpicker" name="icon" type="text" class="form-control iconpicker"
                                       placeholder="Icon Picker" aria-label="Icone Picker" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    <div class="mt-3">
                        <label for="title" class="form-label">Title</label>
                        <input id="title" type="text" name="title" class="form-control"
                               placeholder="Product Title" required>
                    </div>
                    <div class="col-span-12 sm:col-span-6 mt-3">
                        <label for="description" class="form-label w-full flex flex-col sm:flex-row">Description
                            <span
                                class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, at least 5 characters</span>
                        </label>
                        <textarea id="description" class="form-control" name="description" placeholder="Type your comments" minlength="5" required></textarea>
                    </div>
                </div>
                <!-- END: Modal Body -->
                <!-- BEGIN: Modal Footer -->
                <div class="modal-footer">
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-primary w-20">Send</button>
                </div>
                <!-- END: Modal Footer -->
            </form>
        </div>
    </div>
</div> <!-- END: Modal Content -->

@section('script')
    <script type="text/javascript">

        $('.iconpicker-item').click(function () {

            let value = $('#iconpicker').val();
            $('#icon').removeAttr('class');
            $('#icon').addClass(value);
        })

    </script>

@endsection
