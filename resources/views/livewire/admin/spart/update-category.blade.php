
    <form method="POST" wire:submit.prevent="updateCategory">
        @csrf
        <div class="card-body">
            <div class="form-group">
            <label for="category">Category</label>
            <input wire:model='name' type="text" class="form-control" id="category">
            @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
