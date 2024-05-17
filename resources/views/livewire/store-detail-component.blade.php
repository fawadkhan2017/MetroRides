<!-- product -->
<div class="container mb-5 mt-5">
	<div class="row">
		<div class="col-md-6">
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    	<div class="carousel-inner">
    @php 
        $images = explode(",", $product->images);
    @endphp
    
    <div class="carousel-item text-center active">
        <img src="{{ asset('assets/images/products/' . $product->image) }}" class="d-block mx-auto w-75" alt="...">
    </div>

    @foreach ($images as $key => $image)
        @if($image && $key > 0)
        <div class="carousel-item text-center">
            <img src="{{ asset('assets/images/products/' . $image) }}" class="d-block mx-auto w-75" alt="...">
        </div>
        @endif
    @endforeach
</div>

<div class="carousel-indicators mt-4">
    <button type="button" data-bs-target="#carouselExampleIndicators" class="active" data-bs-slide-to="0">
        <img src="{{ asset('assets/images/products/' . $product->image) }}" class="d-block" alt="...">
    </button>
    
    @foreach ($images as $key => $image)
        @if($image && $key > 0)
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}">
            <img src="{{ asset('assets/images/products/' . $image) }}" class="d-block" alt="...">
        </button>
        @endif
    @endforeach
</div>




    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

		</div>
		<div class="col-md-6">
			<div class="products_description_box">
				
				<div class="product_head d-flex justify-content-between align-items-center">
					<div>
						<h1 class="font-600 text-black mb-0">{{ $product->name }}</h1>
					</div>
					<div class="d-flex justify-content-between align-items-center">
						<a href="#" class="d-innline-block p-1"><img src="{{ asset('assets/images/heart.svg') }}"></a>
						<a href="#" class="d-innline-block p-1 cursor-pointer" wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->regular_price }})">
							<img src="{{ asset('assets/images/cart.svg') }}" class="cursor-pointer"></a>

					</div>
				</div>
				<div class="product_description pt-4 pb-4">
				  <div class="description_pro">
				  	<div class="justify-content-start align-items-center">
				  		<h6 class="font-600 mb-0">{{ $product->description }}</h6>
				  	</div>
				  	<div class="justify-content-start align-items-center">
				  		<p class="font-500 mb-0 pt-4">Avalibality : <span class="text-danger"><b>{{ $product->stock_status }}</b></span></p>
				  	</div>
					
                    <div class="justify-content-start align-items-center">
					@if($product->sale_price > 0)
				  		<p class="font-500 mb-0 pt-4">Price : <span class="text-dark"><b>${{ $product->sale_price }}</b></span> <del class="text-danger"><span class="text-dark"><b> ${{ $product->regular_price }}</b></span></del></p>
						
					@else
					<p class="font-500 mb-0 pt-4">Price : <span class="text-dark"><b>${{ $product->regular_price }}</b></span></p>
					@endif
				  	</div>
                    <div class="d-flex col-md-2 col-3 justify-content-start pt-4 align-items-center">
                        <button class="btn qunatity-btn btn-sm btn-secondary mr-2">-</button>
                            <input type="number" class="form-control col-md-1 form-control-sm" id="quantityInput" value="1" min="1">
                        <button class="btn btn-sm qunatity-btn btn-secondary ml-2">+</button>
                    </div>

				  </div>
				</div>
				<!-- <a href="compare.html" class="outline mt-2 w-100 d-block text-center text-decoration">Compare</a> -->
				<a href="#" class="outline mt-2 w-100 d-block text-center text-decoration" wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->regular_price }})"> Add to Cart </a>
				<!-- <button class="submit mt-2">Rent / $59mo</button>  				 -->
				</div>
			</div>
		</div>
</div>



		

        <!-- buy -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="buynows" tabindex="-1" aria-labelledby="exampleModalLabel"  aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg">
        
        
        <div class="modal-content relative">
        <div class="modal-header">
    <div class="model_head d-flex justify-content-between align-items-center w-90">
        <h4 class="font-600 text-black">Your order</h4>
        <div class="rent_tabs_box d-flex justify-content-between align-items-center p-1">
            <a href="#" id="buy2" class="w-50 text-center">Buy</a>
            <a href="#" id="rent2" class="w-50 text-center active">Rent</a>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
</div>

      
            <div class="modal-body">
                
                <div class="step d-flex justify-content-between align-items-center mt-2">
                    <div class="text-start">
                        <div id="dot1" class="dot active"></div>
                        <p class="mb-0 mt-2 text-black">Contact Info</p>
                    </div>
                    <div class="text-center relative lines">
                        <div id="dot2" class="dot mx-auto"></div>
                        <p class="mb-0 mt-2 text-black">Delivery</p>
                    </div>
                    <div class="text-end">
                        <div id="dot3" class="dot"></div>
                        <p class="mb-0 mt-2 text-black">Payment</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div id="step1" class="step-content">
                            <div class="row">
                                <form class="row p-4">
                                    <h5 class="col-md-12 font-500 text-black">Contact info</h5>
                                    <div class="col-md-12 mt-3">
                                        <input type="email" class="form-control" placeholder="Your email">
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <input type="text" class="form-control" placeholder="Your phone">
                                    </div>
                                </form>
                                <div class="col-md-12">
                                    <div class="buttons d-flex justify-content-between">
                                        <button href="#" class="outline d-inline-block p-2 text-center w-25" data-bs-dismiss="modal" aria-label="Close"><img src="{{ asset('assets/images/back.svg') }}"></button>
                                        <a href="#" class="outline d-inline-block p-2 text-center text-decoration"><img src="{{asset('assets/images/apple_music.svg') }}"> Apple pay</a>
                                        <button type="button" class="submit p-2" onclick="nextStep()">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="step2" class="step-content hidden">
								<div class="row">
									<form class="row p-4">
										<h5 class="col-md-12 font-500 text-black">Delivery</h5>
										<div class="col-md-6 mt-3">
					        		<select class="form-select" aria-label="Default select example">
											  <option selected="">Country</option>
											  <option value="1">One</option>
											  <option value="2">Two</option>
											  <option value="3">Three</option>
											</select>
					        	</div>
					        	<div class="col-md-6 mt-3">
					        		<select class="form-select" aria-label="Default select example">
											  <option selected="">City</option>
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
					        	<div class="col-md-6">
					        		<button type="button" onclick="prevStep()" class="outline d-inline-block p-2 text-center mt-3"><img src="assets/images/back.svg"> Back</button>
					        	</div>
					        	<div class="col-md-6">
							    		<button type="button" onclick="nextStep()" class="submit p-2 mt-3">Next</button>
					        	</div>
									</form>
								</div>
							</div>

                            <div id="step3" class="step-content hidden">
									<div class="row">
										<form class="row p-4">
											<h5 class="col-md-12 font-500 text-black">Payment</h5>
											<div class="col-md-12 mt-3">
						        		<input type="text" class="form-control" placeholder="Card number">
						        	</div>
						        	<div class="col-md-6 mt-3">
						        		<input type="text" class="form-control" placeholder="MM / YY">
						        	</div>
						        	<div class="col-md-6 mt-3">
						        		<input type="text" class="form-control" placeholder="CCV">
						        	</div>
						        	<div class="col-md-12">
						        		<div class="form-check mt-3">
												  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
												  <label class="form-check-label mx-2 mt-1" for="flexCheckChecked">
												    Remember me
												  </label>
												</div>
						        	</div>

										</form>
										<div class="col-md-12">
											<div class="buttons d-flex justify-content-between">
												<button type="button" href="#" class="outline d-inline-block p-2 text-center w-25" onclick="prevStep()"><img src="assets/images/back.svg"></button>
												<a href="#" class="outline d-inline-block p-2 text-center text-decoration"><img src="{{ asset('assets/images/apple_music.svg') }}"> Apple pay</a>
												<button type="button" class="submit p-2" onclick="submitForm()">Buy / $59mo</button>
											</div>
										</div>
									</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="product_cart_box p-2 d-flex justify-content-between align-items-center mb-2">
				    		<div class="">
				    			<p class="font-600 text-black mb-1">{{ $product->name }} </p>
					    		<p class="font-700 text-black mb-0">$599 <span class="font-500 text-gray">x1</span></p>
				    		</div>
				    		<img src="{{ asset('assets/images/p.png') }}">
				    	</div>
				    	<a href="#" class="add_more text-decoration mt-3 text-center w-100 d-block p-3 br-12 bg-light" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{ asset('assets/images/bluplus.svg') }}" width="20px">Promocode</a>
				    	<div class="form-floating mt-2">
							  <input type="text" class="form-control" id="promo_code" placeholder="53P30d830" value="53P30d830">
							  <label for="floatingSelect" class="font-12">Add promocode</label>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- buy -->



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
    	<div class="product_cart_box p-2 d-flex justify-content-between align-items-center mb-2">
    		<div class="d-flex justify-content-start align-items-center">
    			<img src="assets/images/p.png">
	    		<div class="mx-3">
	    			<p class="font-600 text-black mb-1">The City <span class="abels p-1 text-white px-2 font-12 mx-2">Buy</span> </p>
	    			<p class="font-700 text-black mb-0">$599 <span class="font-500 text-gray">x1</span></p>
	    		</div>
    		</div>
    		<a href="#"><img src="assets/images/cross.svg" class="cross"></a>
    	</div>
    	<div class="product_cart_box p-2 d-flex justify-content-between align-items-center mb-2">
    		<div class="d-flex justify-content-start align-items-center">
    			<img src="assets/images/p.png">
	    		<div class="mx-3">
	    			<p class="font-600 text-black mb-1">The City PRO <span class="abels p-1 text-white px-2 font-12 mx-2">Rent</span> </p>
	    			<p class="font-700 text-black mb-0">$599 <span class="font-500 text-gray">x1</span></p>
	    		</div>
    		</div>
    		<a href="#"><img src="assets/images/cross.svg" class="cross"></a>
    	</div>
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
					<p class="text-black font-700">$658</p>
				</div>

				<a href="#" class="outline w-100 d-block text-center text-decoration"><img src="assets/images/apple_music.svg"> Apple pay</a>
				<a class="submit w-100 text-white d-block text-decoration mt-3 text-center">Order right now</a>
			</div>

    </div>
  </div>
</div>
<!--offcanvas cart -->



<script>

    	let currentStep = 1;

function updateDots() {
    for (let i = 1; i <= 3; i++) {
        document.getElementById('dot' + i).classList.remove('active');
    }
    document.getElementById('dot' + currentStep).classList.add('active');

}

function nextStep() {
    document.getElementById('step' + currentStep).classList.add('hidden');
    currentStep++;
    document.getElementById('step' + currentStep).classList.remove('hidden');
    updateDots();
}

function prevStep() {
    document.getElementById('step' + currentStep).classList.add('hidden');
    currentStep--;
    document.getElementById('step' + currentStep).classList.remove('hidden');
    updateDots();
}

function submitForm() {
    // Here you can implement form submission logic
    alert('Form submitted successfully!');
}
</script>
