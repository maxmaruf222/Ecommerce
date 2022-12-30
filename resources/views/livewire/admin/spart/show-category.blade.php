<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Category list</h3>
    </div>
    <div class="row card-body">
        <div class="col-12" id="accordion">
            <div class="card card-primary card-outline">
                @foreach ($category as $row)
                    <div class="d-block w-100" >
                        <div class="card-header">
                            <p>
                                <div class="row col-12 card-title w-100 my-n4">
                                    <a 
                                    class="col-10"
                                    data-toggle="collapse" 
                                    href="#categoryId{{ $row->id }}" 
                                    >
                                        {{ $row->name }}
                                    </a>
                                    <div class="col-1"><button wire:click="$emit('showEdit',{{ $row->id }})" class="btn-sm btn-primary mx-sm-n4 mx-lg-4">Edit</button></div>
                                    <div class="col-1"><button wire:click="$emit('deleteCategory',{{ $row->id }})" class="btn-sm btn-danger mx-sm-n2 mx-lg-0">Delete</button></div>
                                </div>
                                @if ($enableInput == $row->id)
                                    @livewire('admin.spart.update-category', ['categoryID' => $row->id])
                                @endif
                            </p>
                        </div>
                    </div>
                    @foreach ($row->subcategory as $subcategory)
                        <div 
                        @if ($enableSubInput != $subcategory->id)
                        class="collapse" 
                        @endif
                        id="categoryId{{ $row->id }}" 
                        data-parent="#categoryId{{ $row->id }}">
                            <div class="card-body">
                                <div class="row col-12 my-n2">
                                    <a class="col-10 col-sm-8">
                                        {{ $subcategory->name }}
                                    </a>
                                    <div class="col-1 col-sm-2"><button wire:click="$emit('showSubEdit',{{ $subcategory->id }})" class="btn btn-sm">Edit</button></div>
                                    <div class="col-1 col-sm-2"><button wire:click="$emit('deleteSubcategory',{{ $subcategory->id }})" class="btn btn-sm">Delete</button></div>
                                </div>
                                @if ($enableSubInput == $subcategory->id)
                                    @livewire('admin.spart.update-subcategory', ['subCategoryID' => $subcategory->id])
                                @endif

                            </div>
                        </div>
                    @endforeach
                    
                @endforeach
            </div>
        </div>
    </div>
</div>