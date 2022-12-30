<div class="container">
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Create new category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" wire:submit.prevent="categoryCreate">
            @csrf
            <div class="card-body">
                <div class="form-group">
                <label for="category">Category</label>
                <input wire:model='name' type="text" class="form-control" id="category" placeholder="New category">
                @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div> 