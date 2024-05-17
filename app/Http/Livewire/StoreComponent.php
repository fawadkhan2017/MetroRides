<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class StoreComponent extends Component
{
    public $sorting;
    public $pagesize;

    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = 12;
    }

    public function store($product_id,$product_name, $product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Product Added In Cart');
        return redirect()->route('store.cart');
        
    }
    use WithPagination;
    public function render()
    {
        if($this->sorting == 'newness')
        {
            $products = Product::orderBy('created_at','DESC')->paginate($this->pagesize);
        }
       elseif ($this->sorting == 'low')
       {
        $products = Product::orderBy('regular_price','ASC')->paginate($this->pagesize);
       }
       elseif ($this->sorting == 'high')
       {
        $products = Product::orderBy('regular_price','DESC')->paginate($this->pagesize);
       }
       else
       {
        $products = Product::paginate($this->pagesize); 
        $categories = Category::all(); 
       }
       return view('livewire.store-component', ['products' => $products,'categories'=>$categories])->layout('layouts.base');
    
    }
}
