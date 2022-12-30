<div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Create new Subcategory</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form wire:submit.prevent="subcategoryCreate">
        @csrf
    <div class="card-body">
        <div class="form-group">
        <label for="exampleInputEmail1">Category</label>
            <select class="form-control" wire:model="category_id">
                <option selected>Select Category </option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }} </option>
                @endforeach
            </select>
            @error('category_id') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
        <label for="Subcategory">Sub Category</label>
        <input wire:model="name" type="text" class="form-control" placeholder="New SubCategory">
        @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="card-footer">
        <button name="sub_category" type="submit" class="btn btn-primary">Submit SubCategory</button>
    </div>
    </form>
</div>