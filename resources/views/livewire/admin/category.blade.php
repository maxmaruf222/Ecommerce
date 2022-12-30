<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
        <div class="row">
          <div class="container">
            <div>
                <button wire:click="category_show" class="btn btn-sm btn-primary" type="button">
                  Add category
                </button>
                <button wire:click="subcategory_show" class="btn btn-sm btn-primary" type="button">
                  Add subcategory
                </button>
                <button wire:click="category_list_show" class="btn btn-sm btn-primary" type="button">
                  Category list
                </button>
              </div><hr>
              {{-- //___category --}}
              @if ($category_show == 1)
                @livewire('admin.spart.category-create') 
              @elseif ($subcategory_show == 1)
                @livewire('admin.spart.subcategory-create')
              @elseif ($category_list_show == 1)
                @livewire('admin.spart.show-category')
              @endif
          </div>
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>