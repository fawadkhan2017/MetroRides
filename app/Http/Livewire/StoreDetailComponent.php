<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Cart;

class StoreDetailComponent extends Component
{
    
    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function store($product_id,$product_name, $product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Product Added In Cart');
        return redirect()->route('store.cart');
        
    }
    public function render()
    {
        $product = Product::where('slug',$this->slug)->first();
        // $popular_product = Product::inRandomOrder()->limit(4)->get();
        $related_products = Product::where('category_id',$product->category_id)->inRandomOrder()->limit(4)->get();
        return view('livewire.store-detail-component',['product'=>$product,'related_products'=>$related_products])->layout('layouts.base');
    }
}
