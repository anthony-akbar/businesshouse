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
     body { background: #fafafa; }
    .container { margin: 150px auto; max-width: 640px; }
</style>

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
            <form action="{{ route('admin.objects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- BEGIN: Modal Header -->
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Adding new Object</h2>
                </div> <!-- END: Modal Header -->
                <!-- BEGIN: Modal Body -->
                <div class="modal-body gap-4 gap-y-3">
                    <div class="flex items-center justify-center w-full">
                        <label id="dropzone" class="flex flex-col w-full h-32 border-4 border-dashed dropzones"
                               style="cursor: pointer">
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
                    <div class="mt-3">
                        <label for="title" class="form-label">Title</label>
                        <input id="title" type="text" name="title" class="form-control"
                               placeholder="Product Title" required>
                    </div>
                    <div class="col-span-12 sm:col-span-6 mt-3">
                        <label for="description" class="form-label w-full flex flex-col sm:flex-row">Description
                            <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, at least 50 characters</span>
                        </label>
                        <textarea id="description" class="form-control" name="description" placeholder="Type your comments" minlength="50" required></textarea>
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

<script type="text/javascript">
    function showPreview(event) {
        if (event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("file-ip-1-preview");
            preview.src = src;
            preview.style.display = "block";
            $('#dropzone').removeClass('border-4 border-dashed dropzones')
        }
    }
    $(document).ready(function () {
        $(".floatNumberField").change(function () {
            $(this).val(parseFloat($(this).val()).toFixed(2));
        });
    });
</script>
