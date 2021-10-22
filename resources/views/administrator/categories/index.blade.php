@extends('layouts.administrator.main')

@section('breadcrumb')

@endsection

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <div>
            <div class="row">
                <div class="col-12 text-right p-2">
                    <button type="button" id="create-category" class="btn btn-dark">
                        <i class="fa fa-plus-square"></i>
                        Create New Category
                    </button>
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

                            <form class="delete-category-form" name="delete-category-form">
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-category" data-category-id="{{ $category->id }}">
                                    <i class="fa fa-trash"></i>
                                    <span class="spinner-border spinner-border-sm" style="display: none;" role="status" aria-hidden="true"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Create Modal -->
<div class="modal fade" id="createNewCategoryModal" tabindex="-1" role="dialog" aria-labelledby="createNewCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createNewCategoryModalLabel">Create New Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <div class="text-center">
                        <p id="create-error" class="text-danger" style="background-color: #fafafa; padding: 10px; display: none;"></p>
                    </div>
                    <form name="create-new-category-form" id="create-new-category-form">
                        <div class="form-row">
                            <div class="col-12 col-md-4 my-auto text-right">
                                <p>Category Name</p>
                            </div>
                            <div class="col-12 col-md-6 form-group">
                                <input type="text" name="category_name" id="category_name" class="form-control" placeholder="Category Name (capital letters for each word)..">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-12 col-md-4 my-auto text-right">
                                <p>
                                    Parent Category
                                    <br>
                                    <small>(Can only belong to one parent category)</small>
                                </p>
                            </div>
                            <div class="col-12 col-md-6 form-group">
                                <select name="parent_category_id" id="parent_category_id" class="select2 select2-create form-control" style="width: 100%;">
                                    <option value="0">None</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id}}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-12 col-md-4 my-auto text-right">
                                <p>Category Icon</p>
                            </div>
                            <div class="col-12 col-md-6 form-group">
                                <img id="category_icon_img" src="{{ asset('assets/images/errors/image-not-found.png') }}" alt="" class="w-100" style="border: 1px dotted black;">
                                <div class="form-group mt-1">
                                    <input type="file" name="category_icon" id="category_icon" class="form-control-file">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-12 col-md-6 offset-md-4 form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="featured_category" id="featured_category">
                                    <label class="custom-control-label" for="featured_category">Featured Category</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-row mt-2">
                            <div class="col-12 col-md-6 offset-md-4">
                                <button id="modalSubmitBtn" type="submit" class="btn btn-primary">
                                    <i class="fa fa-save"></i>
                                    <span class="spinner-border spinner-border-sm" style="display: none;" role="status" aria-hidden="true"></span>
                                    Save changes
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Empty Modal -->
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
                <!-- Ajax response loaded here -->
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

        // Category Store URL - POST
        let storeURL = "{{ route('administrator.categories.store') }}";

        // Setup ajax to include csrf token.
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Handles create new button click.
        $('#app').on('click', '#create-category', function() {
            $('#createNewCategoryModal').modal('show');

            $('.select2-create').select2({
                dropdownParent: $('#createNewCategoryModal')
            });
        });

        // Handles image upload preview on create modal.
        // Function to convert image to base64 string.
        function readURLCreate(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#createNewCategoryModal #category_icon_img').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#app").on('change', '#createNewCategoryModal #category_icon', function() {
            readURLCreate(this);
        });

        // Handles submit on create new category modal.
        $('#app').on('submit', '#create-new-category-form', function() {
            event.preventDefault();

            let faIcon = $(this).find('.fa.fa-save');
            let btnLoadingSpinner = $(this).find('.spinner-border.spinner-border-sm');

            let formData = new FormData(document.forms.namedItem("create-new-category-form"));

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
                url: storeURL,
                type: "POST",
                processData: false,
                contentType: false,
                dataType: "json",
                data: formData,
                success: function(response) {
                    if (response.status == 'OK') {
                        $('#createNewCategoryModal').modal('hide');

                        toastr.success('Category created successfully!', 'Success');
                    }
                },
                error: function(response) {
                    console.log(response);
                    if (response.status == 400) {
                        $('#createNewCategoryModal #create-error').html(response.responseJSON.status + `<br>` + response.responseJSON.message);

                        $('#createNewCategoryModal #create-error').show();

                        console.log(response.status);
                    } else {
                        $('#createNewCategoryModal').modal('hide');

                        toastr.error('Something went wrong!', 'Error');
                    }
                }
            });
        });

        let editURL;
        let updateURL;

        // Handles edit button clicks.
        $('#app').on('click', '.edit-categories', function() {
            // Category Edit URL - GET
            editURL = "{{ route('administrator.categories.edit', ['id' => 'id']) }}";
            // Category Update URL - PUT
            updateURL = "{{ route('administrator.categories.update', ['id' => 'id']) }}";


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
                    $('#categoriesModal .modal-body').empty();

                    // Change modal title
                    $('#categoriesModal .modal-title').text('Edit Category')
                    // Add response in Modal body
                    $('#categoriesModal .modal-body').html(response);

                    // Display Modal
                    $('#categoriesModal').modal('show');

                    $('.select2-edit').select2({
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
        function readURLEdit(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#categoriesModal #category_icon_img').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#app").on('change', '#categoriesModal #category_icon', function() {
            readURLEdit(this);
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

        // Handles delete button clicks.
        $('#app').on('submit', '.delete-category-form', function(event) {
            event.preventDefault();
            // Category Delete URL - DELETE
            let deleteURL = "{{ route('administrator.categories.delete', ['id' => 'id']) }}";

            let id = $(this).find('button.delete-category').data('category-id');
            deleteURL = deleteURL.replace('id', id);

            let formData = new FormData(document.forms.namedItem("delete-category-form"));

            let faIcon = $(this).find('.fa.fa-trash');
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
                url: deleteURL,
                type: "POST",
                processData: false,
                contentType: false,
                dataType: "json",
                data: formData,
                success: function(response) {
                    if (response.status == 'OK') {
                        toastr.success('Category deleted successfully!', 'Success');
                    } else {
                        toastr.error('Something went wrong!', 'Error');
                    }
                },
                error: function(response) {
                    console.log(response);
                }
            });
        })
    });
</script>
@endpush