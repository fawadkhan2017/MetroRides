<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                Edit Product
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.products') }}" class="btn btn-success float-end">All Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <form class="row g-3" enctype="multipart/form-data" wire:submit.prevent="updateProduct">
                            <div class="col-md-6">
                                <label class="form-label">Product Name</label>
                                <input type="text" placeholder="Product name" wire:model="name" wire:keyup="generateSlug" class="form-control" />
                                @error('name')<p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Product Slug</label>
                                <input type="text" placeholder="Product Slug" wire:model="slug" class="form-control" />
                                @error('slug')<p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Short Description</label>
                                <textarea type="text" id="short_description" placeholder="Short Description" wire:model="short_description" class="form-control"></textarea>
                                @error('short_description')<p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea type="text" id="description" placeholder="Description" class="form-control" wire:model="description"></textarea>
                                @error('description')<p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Regular Price</label>
                                <input type="text" placeholder="Regular Price" class="form-control" wire:model="regular_price"/>
                                @error('regular_price')<p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Sale Price</label>
                                <input type="text" placeholder="Sale Price" class="form-control" wire:model="sale_price" />
                                @error('sale_price')<p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">SKU</label>
                                <input type="text" placeholder="SKU" class="form-control" wire:model="SKU"/>
                                @error('SKU')<p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Stock</label>
                                <select class="form-select" wire:model="stock_status">
                                    <option value="instock">Instock</option>
                                    <option value="Out Of Stock">Out Of Stock</option>
                                </select>
                                @error('stock_status')<p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Featured</label>
                                <select class="form-select" wire:model="featured">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Quantity</label>
                                <input type="text" placeholder="Quantity" class="form-control" wire:model="quantity"/>
                                @error('quantity')<p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Product Image</label>
                                <input type="file" class="form-control" wire:model="newimage"/>
                                @if($newimage)
                                <img src="{{$newimage->temporaryUrl()}}" width="120">
                                @else
                                <img src="{{asset('assets/images/products')}}/{{$image}}" width="120">
                                @endif
                                @error('newimage')<p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Product Gallery</label>
                                <input type="file" class="form-control" wire:model="newimages" multiple/>
                                @if($newimages)
                                    @foreach($newimages as $newimage)
                                        @if($newimage)
                                        <img src="{{$newimage->temporaryUrl()}}" width="120">
                                        @endif 
                                    @endforeach
                                @else
                                    @foreach($images as $image)
                                        @if($image)
                                        <img src="{{asset('assets/images/products')}}/{{$image}}" width="120">
                                        @endif
                                    @endforeach
                                @endif
                                @error('image')<p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Category</label>
                                <select class="form-select" wire:model="category_id">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('category_id')<p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')

<script>
    $(function(){
        tinymce.init({
            selector:'#short_description',
            setup:function(editor){
                editor.on('Change',function(e){
                    tinyMCE.triggerSave();
                    var sd_data = $('#short_description').val();
                    console.log(sd_data);
                    @this.set('short_description',sd_data);
                });
            }
        });
        tinymce.init({
            selector:'#description',
            setup:function(editor){
                editor.on('Change',function(e){
                    tinyMCE.triggerSave();
                    var d_data = $('#description').val();
                    @this.set('description',d_data);
                });
            }
        });
    });
</script>
@endpush
