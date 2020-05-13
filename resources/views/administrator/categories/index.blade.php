@extends('layouts.administrator.main')

@section('breadcrumb')

@endsection

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <div>
            <div class="row">
                <div class="col-12 text-right p-2">
                    <a href="{{ route('administrator.categories.create') }}" style="color: white; font-style: normal; border-radius: 5px;" class="btn btn-dark">Create New Category</a>
                </div>
            </div>
        </div>
        <div class="table-responsive m-2">
            <table id="categories-table" class="table table-striped" style="min-width: 1366px; width:">
                <thead>
                    <tr>
                        <td style="width: 1%;">No.</td>
                        <td></td>
                        <td>Category Name</td>
                        <td>Options</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td class="text-center">
                            {{ $loop->iteration }}
                        </td>
                        <td style="width: 5%;">
                            @if (!$category->image)
                            <img src="{{ asset('assets/images/errors/image-not-found.png') }}" class="mw-100" style="border-radius: 10px" alt="">
                            @else
                            <img class="mw-100" style="border-radius: 10px;" src="{{ asset('storage/' . $category->image->path . $category->image->filename) }}" alt="">
                            @endif
                        </td>
                        <td>
                            {{ $category->name }}
                        </td>
                        <td style="width: 20%;">
                            <button type="button" class="btn btn-primary edit-categories" data-category-id="{{ $category->id }}">
                                <i class="fa fa-edit"></i>
                                <span class="spinner-border spinner-border-sm" style="display: none;" role="status" aria-hidden="true"></span>
                                Edit
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="categoriesModal" tabindex="-1" role="dialog" aria-labelledby="categoriesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categoriesModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    $(document).ready(function() {
        $('#app #categories-table').DataTable({
            "pageLength": 25,
        });

        // Category Edit URL - GET
        let editURL = "{{ route('administrator.categories.edit', ['id' => 'id']) }}";
        // Category Update URL - POST
        let updateURL = "{{ route('administrator.categories.update', ['id' => 'id']) }}";

        // Setup ajax to include csrf token.
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Handles edit button clicks.
        $('#app').on('click', '.edit-categories', function() {
            let id = $(this).data('category-id');
            editURL = editURL.replace('id', id);
            updateURL = updateURL.replace('id', id);

            let faIcon = $(this).find('.fa.fa-edit');
            let btnLoadingSpinner = $(this).find('.spinner-border.spinner-border-sm')

            $.ajax({
                async: true,
                beforeSend: function() {
                    faIcon.hide();
                    btnLoadingSpinner.fadeIn(500);
                },
                complete: function() {
                    btnLoadingSpinner.hide();
                    faIcon.fadeIn(500);
                },
                url: editURL,
                type: 'GET',
                success: function(response) {
                    // Change modal title
                    $('#categoriesModal .modal-title').text('Edit Category')
                    // Add response in Modal body
                    $('#categoriesModal .modal-body').html(response);



                    // Display Modal
                    $('#categoriesModal').modal('show');

                    $('.select2').select2({
                        dropdownParent: $('#categoriesModal')
                    });
                },
                error: function(response) {
                    toastr.error('Sorry! Something went wrong.', response.responseJSON.message);
                }
            });
        });

        // Handles image upload preview on edit modal.
        // Function to convert image to base64 string.
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#category_icon_img').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }
        $("#app").on('change', '#categoriesModal #category_icon', function() {
            readURL(this);
        });

        $('.select2').select2({
            dropdownParent: $('#categoriesModal')
        });

        // Handles save changes button click on modal.
        $("#app").on('submit', '#modal-form', function(event) {
            event.preventDefault();

            let formData = new FormData(document.forms.namedItem("modal-form"));

            let faIcon = $(this).find('.fa.fa-save');
            let btnLoadingSpinner = $(this).find('.spinner-border.spinner-border-sm');

            $.ajax({
                async: true,
                beforeSend: function() {
                    faIcon.hide();
                    btnLoadingSpinner.fadeIn(500);
                },
                complete: function() {
                    btnLoadingSpinner.hide();
                    faIcon.fadeIn(500);
                },
                url: updateURL,
                type: "POST",
                processData: false,
                contentType: false,
                dataType: "json",
                data: formData,
                success: function(response) {
                    if (response.status == 'OK') {
                        $('#categoriesModal').modal('hide');

                        toastr.success('Category updated successfully!', 'Success');
                    } else {
                        $('#categoriesModal').modal('hide');

                        toastr.error('Something went wrong!', 'Error');
                    }
                },
                error: function(response) {
                    console.log(response)
                }
            });
        });
    });
</script>
@endpush