<div>
    <form name="modal-form" id="modal-form" enctype="multipart/form-data">
        @method('PUT')
        <div class="form-row">
            <div class="col-12 col-md-4 my-auto text-right">
                <p>Category Name</p>
            </div>
            <div class="col-12 col-md-6 form-group">
                <input type="text" name="category_name" id="category_name" class="form-control" value="{{ $category->name }}">
            </div>
        </div>

        <div class="form-row">
            <div class="col-12 col-md-4 my-auto text-right">
                <p>
                    Category Slug
                    <br>
                    <small>(Replaced white spaces with hyphen)</small>
                </p>
            </div>
            <div class="col-12 col-md-6 form-group">
                <input type="text" name="category_slug" id="category_slug" class="form-control" value="{{ $category->slug }}" readonly>
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
                <select name="parent_category_id" id="parent_category_id" class="select2 select2-edit form-control" style="width: 100%;">
                    <option value="0" {{ ($category->parent_category_id == 0) ? 'selected' : '' }}>None</option>
                    @foreach($categories as $item)
                    <option value="{{ $item->id}}" {{ ($item->id == $category->parent_category_id) ? 'selected' : ''}}>{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="col-12 col-md-4 my-auto text-right">
                <p>Category Icon</p>
            </div>
            <div class="col-12 col-md-6 form-group">
                @if($category->image)
                <img id="category_icon_img" src="{{ asset('storage/'. $category->image->path . $category->image->filename) }}" alt="" class="w-100" style="border: 1px dotted black;">
                @else
                <img id="category_icon_img" src="{{ asset('assets/images/errors/image-not-found.png') }}" alt="" class="w-100" style="border: 1px dotted black;">
                @endif
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