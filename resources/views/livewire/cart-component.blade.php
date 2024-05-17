
  <div class="">
    <div class="purshed_box p-3">
	@if(Session::has('success_message'))
	<div class="alert alert-success">
			<strong>Success</strong> {{Session::get('success_message')}}
	</div>
	@endif
@if(Cart::count() > 0 )
<p class="text-black font-600">Your purchases</p>
        
@foreach (Cart::content() as $item)
<div class="product_cart_box p-2 d-flex justify-content-between align-items-center mb-2">
    <div class="d-flex justify-content-start align-items-center">
        <img src="{{ asset('assets/images/products/' . $item->model->image) }}">
        <div class="mx-3">
            <p class="font-600 text-black mb-1">{{$item->model->name}} <span class="abels p-1 text-white px-2 font-12 mx-2">Buy</span>{{ $item->model->regular_price }} </p>
        </div>
    </div>
    <div class="d-flex col-md-1 col-3 justify-content-start align-items-center">
		
        
        <input type="text" class="form-control col-md-1 form-control-sm quantity" style="width: 60px" id="quantityInput{{ $item->rowId }}" value="{{ $item->qty }}" min="1">
		<button class="btn qunatity-btn btn-sm btn-secondary mr-2 decrement" wire:click.prevent="decreaseQty('{{$item->rowId}}')">-</button>
        <button class="btn btn-sm qunatity-btn btn-secondary ml-2 increment" wire:click.prevent="increaseQty('{{ $item->rowId }}')">+</button>
    </div>
    <div class="mx-3">
        <p class="font-600 text-black mb-1" id="subtotal{{ $item->rowId }}">{{ $item->subtotal }} </p>
    </div>
	<a href="#" wire:click.prevent="destroy('{{ $item->rowId }}')" class="btn btn-delete">
    <img src="assets/images/cross.svg" class="cross">
</a>

</div>
<!-- <div class="form-check mt-3">
    <input style="height: 20px; width: 20px;"class="form-check-input" type="checkbox" value="1" id="couponCheckbox" wire:model="haveCoupnCode"> <span class="form-check-label" for="couponCheckbox"> I have a coupon code</span>
</div> -->

	@if(!Session::has('coupon'))
	@if($haveCoupnCode == 1 )
	
		<form wire:submit.prevent="applyCouponCode">
    <div class="row mt-3">
	@if(Session::has('coupon_message'))
			<div class="alert alert-danger" role="danger">{{Session::get('coupon_message')}}</div>
		@endif
        <div class="col-md-2 col-12">
            <input type="text" class="form-control" id="promo_code" placeholder="Enter Your Coupon" wire:model="couponCode">
        </div>
        <div class="col-md-1 col-12">
            <button type="submit" class="submit btn btn-primary w-100 text-center">Apply</button>
        </div>
    </div>
</form>

	@endif
	@endif
<div class="row mt-3 justify-content-center justify-content-md-between">
<div class="col-md-3 col-12">
    <a class="submit w-md-25 text-decoration d-block text-center" href="#" wire:click.prevent="clearCart">Clear Cart</a>
</div>
</div>



		<div class="d-flex justify-content-between align-items-center mt-5">
					<p class="text-black font-600">Sub Total</p>
					<p class="text-black font-700">${{Cart::subtotal()}}</p>
	 </div>
	 @if(Session::has('coupon'))
    <div class="d-flex justify-content-between align-items-center">
        <p class="text-black font-600">Discount ({{ Session::get('coupon')['code'] }})</p>
        <p class="text-black font-700">${{ $discount }}</p>
    </div>
    <div class="d-flex justify-content-between align-items-center">
        <p class="text-black font-600">Tax</p>
        <p class="text-black font-700">${{ $taxAfterDiscount }}</p>
    </div>
    <div class="d-flex justify-content-between align-items-center">
        <p class="text-black font-600">Sub Total with Discount</p>
        <p class="text-black font-700">${{ $subtotalAfterDiscount }}</p>
    </div>
    <div class="d-flex justify-content-between align-items-center">
        <p class="text-black font-600">Total</p>
        <p class="text-black font-700">${{ $totalAfterDiscount }}</p>
    </div>
@else
    <div class="d-flex justify-content-between align-items-center">
        <p class="text-black font-600">Tax</p>
        <p class="text-black font-700">${{ Cart::tax() }}</p>
    </div>
    <div class="d-flex justify-content-between align-items-center">
        <p class="text-black font-600">Shipping</p>
        <p class="text-black font-700">Free Shipping</p>
    </div>
    <div class="d-flex justify-content-between align-items-center">
        <p class="text-black font-600">Total</p>
        <p class="text-black font-700">${{ Cart::total() }}</p>
    </div>
@endif

@endforeach
<a href="{{ route('store') }}" class="add_more text-decoration mt-3 text-center w-100 d-block p-3 br-12 bg-light"><img src="assets/images/bluplus.svg" width="20px">Add more</a>

		@else
		<div class="empty_cart p-3">
    	<div class="empty_content text-center mt-5 pt-5">
    		<img src="assets/images/moon_stars.svg">
    		<h6 class="text-black font-600 mt-4 pb-3">Your shopping cart is empty</h6>
    		<a class="submit mt-2 w-100 d-block text-decoration" href="{{ route('store') }}" >Go to models</a>
    	</div>
    </div>
		@endif
	
		
<div class="col-md-3 col-12">
    <a class="submit w-md-25 text-decoration d-block text-center" href="#" wire:click.prevent="checkout">Checkout</a>
</div>
    </div>
  </div>

