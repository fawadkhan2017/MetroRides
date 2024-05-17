
<div>
   
<!-- content -->
<div class="container pt-5 mb-5 mt-5">
	<div class="row">
		<div class="col-md-4">
			<h3 class="text-black font-600">Category {{$category_name}}</h3>
		</div>
		<div class="col-md-8">
			<div class="form_box">
				<div class="filter d-flex justify-content-end align-items-center">
					<div class="form-floating">
                    <select class="form-select product-filter" id="floatingSelect" aria-label="Floating label select example">
						<option selected>All Categories</option>
						@foreach ($categories as $category)
							<option value="{{ route('store.category',['category_slug'=>$category->slug]) }}">{{ $category->name }}</option>
						@endforeach
					</select>
					  <label for="floatingSelect" class="font-12">Categories</label>
					</div>
					<div class="mx-3">
					<div class="form-floating">
					<select class="form-select product-filter" id="floatingSelect" aria-label="Floating label select example" wire:model="sorting">
					    <option selected value="default">Defult Sorting</option>
					    <option value="newness">Sort By newness</option>
					    <option value="low">Sort By Price: low to high</option>
					    <option value="high">Sort By Price: high to low</option>
					  </select>
					  <label for="floatingSelect" class="font-12">Sort By Price</label>
					</div>
					</div>
					<div class="mx-3">
					<div class="form-floating">
					<select class="form-select" id="floatingSelect" aria-label="Floating label select example" wire:model="pagesize">
						  <option selected value="defult">12</option>
						  <option value="16">16 Per Page</option>
						  <option value="18">18 Per Page</option>
						  <option value="21">21 Per Page</option>
						</select>
						<label for="floatingSelect" class="font-12">Per Page</label>
					</div>
					</div>
			</div>
			</div>
		</div>
	</div>

	<div class="row">
		@foreach ($products as $product)
		
		<div class="col-md-3 product-box">
		<a href="{{ route('store.store-details',['slug'=>$product->slug]) }}">
			<div class="pro-box mt-1 p-3">
			
				<img src="{{ asset('assets/images/products') }}/{{ $product->image }}" alt="{{ $product->name }}" width="250px" height="250px">
			
				<div class="p-2">
					<h6 class="font-600 text-black" title="{{ $product->name }}"><a href="#" class="text-decoration font-600 text-black">{{ $product->name }}</a></h6>
					<p class="font-400 text-black">{{ $product->short_description }}</p>
					<p class="font-700 text-black mt-4">${{ $product->regular_price }}</p>

					<button wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->regular_price }})" class="outline text-center text-decoration">Add to Cart</button>

				</div>
			</div>
			</a>
		</div>
		
		@endforeach
		<div class="row mt-5">
			<div class="col-md-5">
			{{$products->links()}}
			</div>
		</div>
	</div>
</div>
<!-- content -->

<!-- cta -->
<div class="container pt-5 pb-5 mb-5">
	<div class="row p-4 bg-light-blue">
		<div class="col-md-7">
			<div class="cta-content">
				<h1 class="text-black font-600">Your own perfect <br>scooter</h1>
				<div class="form_box">
					<form class="row">
						<div class="mb-3 col-md-6">
							<div class="form-floating">
							  <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
							    <option selected>Open this select menu</option>
							    <option value="1">One</option>
							    <option value="2">Two</option>
							    <option value="3">Three</option>
							  </select>
							  <label for="floatingSelect" class="font-12">Scooter</label>
							</div>
						</div>
						<div class="mb-3 col-md-6">
						  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your name">
						</div>
						<div class="mb-3 col-md-6">
						  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your email">
						</div>
						<div class="mb-3 col-md-6">
						  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your phone">
						</div>
						<div class="mb-3 col-md-6">
						  <button class="submit">Order right now</button>
						</div>
						<div class="mb-3 col-md-6">
						  <a href="#" class="outline w-100 d-block text-center text-decoration"><img src="{{ asset('assets/images/apple_music.svg') }}"> Apple pay</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-5">
			<div class="cta_image">
				<img src="{{ asset('assets/images/cta.png') }}" class="w-90">
			</div>
		</div>
	</div>
</div>
<!-- cta -->
</div>


   <!--offcanvas cart -->
   <div class="offcanvas offcanvas-end" style="z-index: 100000" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" wire:ignore.self>
  <div class="offcanvas-header">
    <h3 id="offcanvasRightLabel" class="font-600">Cart</h3>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <!-- <div class="empty_cart p-3">
    	<div class="empty_content text-center mt-5 pt-5">
    		<img src="assets/images/moon_stars.svg">
    		<h6 class="text-black font-600 mt-4 pb-3">Your shopping cart is empty</h6>
    		<a class="submit mt-2 w-100 d-block text-decoration" href="#" id="purshed">Go to models</a>
    	</div>
    </div> -->
    <div class="purshed_box p-3" style="">
    	<p class="text-black font-600">Your purchases</p>
		@if(Cart::count() > 0 )
		@foreach (Cart::content() as $item)
    	<div class="product_cart_box p-2 d-flex justify-content-between align-items-center mb-2">
    		<div class="d-flex justify-content-start align-items-center">
    			<img src="{{ asset('assets/images/product') }}/{{$item->model->image}}">
	    		<div class="mx-3">
	    			<p class="font-600 text-black mb-1">{{$item->model->name}} <span class="abels p-1 text-white px-2 font-12 mx-2">Buy</span> </p>
	    			<p class="font-700 text-black mb-0">${{$item->model->regular_price}} <span class="font-500 text-gray"> x </span>{{$item->qty }}</p>
	    		</div>
    		</div>
    		<a href="#"><img src="assets/images/cross.svg" class="cross"></a>
    	</div>
		
		@endforeach

		@else
		<p class="text-black font-600">Cart Is Empty</p>
		@endif
    	<!-- <div class="product_cart_box p-2 d-flex justify-content-between align-items-center mb-2">
    		<div class="d-flex justify-content-start align-items-center">
    			<img src="assets/images/p.png">
	    		<div class="mx-3">
	    			<p class="font-600 text-black mb-1">The City PRO <span class="abels p-1 text-white px-2 font-12 mx-2">Rent</span> </p>
	    			<p class="font-700 text-black mb-0">$599 <span class="font-500 text-gray">x1</span></p>
	    		</div>
    		</div>
    		<a href="#"><img src="assets/images/cross.svg" class="cross"></a>
    	</div> -->
    	<a href="#" class="add_more text-decoration mt-3 text-center w-100 d-block p-3 br-12 bg-light" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="assets/images/bluplus.svg" width="20px">Add more</a>
			<p class="text-black font-600 mt-3">Your data</p>

			<div id="payment">
				<div class="accordion" id="accordionExample">
				  <div class="accordion-item">
				    <h2 class="accordion-header" id="headingOne">
				      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
				        <p class="mb-0"> <span class="font-12 w-100">Payment</span> <br><span class="w-100">VISA **** 8649</span></p>
				      </button>
				    </h2>
				    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
				      <div class="accordion-body">
				        <form class="row">
				        	<div class="col-md-12 mt-3">
				        		<input type="text" class="form-control" placeholder="Card number">
				        	</div>
				        	<div class="col-md-6 mt-3">
				        		<input type="text" class="form-control" placeholder="MM / YY">
				        	</div>
				        	<div class="col-md-6 mt-3">
				        		<input type="text" class="form-control" placeholder="CCV">
				        	</div>
				        	<div class="col-md-12 mt-3">
				        		<button class="submit">Order right now</button>
				        	</div>
				        	<div class="col-md-12 mt-3">
				        		<a href="#" class="outline w-100 d-block text-center text-decoration"><img src="assets/images/apple_music.svg"> Apple pay</a>
				        	</div>
				        </form>
				      </div>
				    </div>
				  </div>
				  <div class="accordion-item">
				    <h2 class="accordion-header" id="headingTwo">
				      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				        <p class="mb-0"> <span class="font-12 w-100">Delivery</span> <br><span class="w-100">4781 Montclair, California 92</span></p>
				      </button>
				    </h2>
				    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
				      <div class="accordion-body">
				        <form class="row">
				        	<div class="col-md-6 mt-3">
				        		<select class="form-select" aria-label="Default select example">
										  <option selected>Country</option>
										  <option value="1">One</option>
										  <option value="2">Two</option>
										  <option value="3">Three</option>
										</select>
				        	</div>
				        	<div class="col-md-6 mt-3">
				        		<select class="form-select" aria-label="Default select example">
										  <option selected>City</option>
										  <option value="1">One</option>
										  <option value="2">Two</option>
										  <option value="3">Three</option>
										</select>
				        	</div>
				        	<div class="col-md-6 mt-3">
				        		<input type="text" class="form-control" placeholder="First name">
				        	</div>
				        	<div class="col-md-6 mt-3">
				        		<input type="text" class="form-control" placeholder="Last name">
				        	</div>
				        	<div class="col-md-12 mt-3">
				        		<input type="text" class="form-control" placeholder="Address">
				        	</div>
				        	<div class="col-md-12">
				        		<p class="text-black font-12 mt-3">In the US, our standard delivery is FedEx 3-5 working days, shipping out of Los Angeles, California. West coast customers typically wait 1 or 2 days, while delivery to the East coast typically takes the full 4 or 5 days.</p>
				        		<p class="text-black font-12">In the UK, we offer overnight delivery with FedEx. Once we dispatch your order, we will send you tracking details</p>
				        	</div>
				        	<div class="col-md-12 mt-3">
				        		<button class="submit">Order right now</button>
				        	</div>
				        	<div class="col-md-12 mt-3">
				        		<a href="#" class="outline w-100 d-block text-center text-decoration"><img src="assets/images/apple_music.svg"> Apple pay</a>
				        	</div>
				        </form>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
			<div class="payment-footer mt-3">
				<div class="d-flex justify-content-between align-items-center">
					<p class="text-black font-600">Total</p>
					<p class="text-black font-700">$</p>
				</div>

				<a href="#" class="outline w-100 d-block text-center text-decoration"><img src="assets/images/apple_music.svg"> Apple pay</a>
				<a class="submit w-100 text-white d-block text-decoration mt-3 text-center">Order right now</a>
			</div>

    </div>
  </div>
</div>
<!--offcanvas cart -->

<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('openOffcanvas', () => {
            var offcanvas = new bootstrap.Offcanvas(document.getElementById('offcanvasRight'));
            offcanvas.show();
        });
    });
    document.getElementById("floatingSelect").addEventListener("change", function() {
    var url = this.value;
    if (url !== "") {
        window.location.href = url;
    }
});
</script>