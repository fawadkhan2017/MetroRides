<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{
    use WithPagination;
    public function deleteProduct($id)
    {
        $product = Product::find($id);
        if($product->image)
        {
            $imagesDir = public_path('assets/images/products');
            $imgPath = $imagesDir . '/' . $product->image;
            if (file_exists($imgPath) && is_file($imgPath) && getimagesize($imgPath)) {
             unlink($imgPath);
        }
    }
        if($product->images)
        {
            $imagesDir = public_path('assets/images/products');
            $images = explode(',', $product->images);
            foreach ($images as $img) {
            $imgPath = $imagesDir . '/' . $img;
            if (file_exists($imgPath) && is_file($imgPath) && getimagesize($imgPath)) {
             unlink($imgPath);
    }
}
        }
        $product->delete();
        session()->flash('message','Product has been deleted!');
    }
    public function render()
    {
        $products = Product::paginate(10);
        return view('livewire.admin.admin-product-component',['products'=>$products])->layout('layouts.base');
    }
}
