
<div class="container" style="padding: 30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            Edit Category
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.categories') }}" class="btn btn-success float-end">All Categories</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif
                    <form class="row g-3" wire:submit.prevent="updateCategory">
                        <div class="col-md-6">
                            <label for="categoryName" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="categoryName" placeholder="Category Name" wire:model="name" wire:keyup="generateslug">
                            @error('name')<p class="text-danger">{{ $message }}</p>@enderror
                        </div>
                        <div class="col-md-6">
                            <label for="categorySlug" class="form-label">Category Slug</label>
                            <input type="text" class="form-control" id="categorySlug" placeholder="Category Slug" wire:model="slug">
                            @error('slug')<p class="text-danger">{{ $message }}</p>@enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
