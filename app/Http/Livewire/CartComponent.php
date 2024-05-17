<?php


namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Cart;
use App\Models\Coupon;
use Illuminate\Support\Facades\Auth;

class CartComponent extends Component
{
    public $haveCoupnCode;
    public $couponCode;
    public $discount;
    public $subtotalAfterDiscount;
    public $taxAfterDiscount;
    public $totalAfterDiscount;

    public function increaseQty($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty);
        $this->emitTo('cart-count-component', 'refreshComponent');

    }
    public function decreaseQty($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty);
        $this->emitTo('cart-count-component', 'refreshComponent');
    }

    public function destroy($rowId)
    {
        Cart::remove($rowId);
        session()->flash('success_message', 'Item has been removed');
        $this->emitTo('cart-count-component', 'refreshComponent');
    }

    public function clearCart()
    {
        Cart::destroy(); // Clear the cart
        session()->flash('success_message', 'Cart cleared successfully.'); // Flash a success message
       // Redirect to a specific route after clearing the cart
    }
    public function applyCouponCode()
    {
        // Attempt to retrieve the coupon from the database that matches the code, is not expired, and meets the minimum cart value requirement
        $coupon = Coupon::where('code', $this->couponCode)
                        ->where('expiry_date', '>=', Carbon::today()) // Checking if the coupon is not expired
                        ->where('cart_value', '<=', Cart::instance('cart')->subtotal()) // Checking if cart subtotal meets or exceeds the coupon's minimum required value
                        ->first();
    
        // If no valid coupon is found, flash a failure message and exit the function
        if (!$coupon) {
            session()->flash('coupon_message', 'The coupon code is invalid or has expired.'); // Correcting the message for clarity
            return;
        }
    
        // If a valid coupon is found, store the coupon details in the session
        session()->put('coupon', [
            'code' => $coupon->code,
            'type' => $coupon->type,
            'value' => $coupon->value,
            'cart_value' => $coupon->cart_value
        ]);
    
        // Flash a success message
        session()->flash('success_message', 'Coupon has been applied successfully!');
    }
    
    public function calculateDiscount()
    {
        if(session()->has('coupon'))
        {
            if(session()->get('coupon')['type'] == 'fixed')
            {
                $this->discount = session()->get('coupon')['value'];
            }
            else
            {
                $this->discount = (Cart::instance('cart')->subtotal() * session()->get('coupon')['value']/100);
            }
            $this->subtotalAfterDiscount = Cart::instance('cart')->subtotal() -  $this->discount;
            $this->taxAfterDiscount = ($this->subtotalAfterDiscount * config('cart.tax'))/100;
            $this->totalAfterDiscount = $this->subtotalAfterDiscount + $this->taxAfterDiscount;
        }
    }
    public function removeCoupon()
    {
        session()->forget('coupon');
    }
    public function checkout(){
        if(Auth::check())
        {
            return redirect()->route('checkout');
        }
        else
        {
            return redirect()->route('login');
        }
    }
    public function setAmountForCheckout()
    {
        if(!Cart::instance('cart')->count() > 0)
        {
            session()->forget('checkout');
            return;
        }
        if(session()->has('coupon'))
        {
            session()->put('checkout',
            [
                'discount' => $this->discount,
                'subtotal' => $this->subtotalAfterDiscount,
                'tax' => $this->taxAfterDiscount,
                'total' => $this->totalAfterDiscount
            ]);
        }
        else
        {
            session()->put('checkout',
            [
                'discount' => 0,
                'subtotal' => Cart::instance('cart')->subtotal(),
                'tax' => Cart::instance('cart')->tax(),
                'total' => Cart::instance('cart')->total(),
            ]);
        }
    }
    public function render()
    {
        if(session()->has('coupon'))
        {
            if(Cart::instance('cart')->subtotal() < session()->get('coupon')['cart_value'])
            {
                session()->forgot('coupon');
            }
            else
            {
                $this->calculateDiscount();
            }
        }
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
