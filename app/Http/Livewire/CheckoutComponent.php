<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\OrderMail;
use App\Models\order;
use App\Models\orderItem;
use App\Models\Shipping;
use App\Models\Transiction;
use Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Stripe;

class CheckoutComponent extends Component
{
   
   
    public function render()
    {
    
        return view('livewire.checkout-component')->layout('layouts.base');
    }
}
