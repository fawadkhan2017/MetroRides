<!-- banner -->
<div class="main">
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('assets/images/screen.svg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/images/screen.svg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/images/screen.svg') }}" class="d-block w-100" alt="...">
    </div>
  </div>

</div>
</div>
<!-- banner -->


<!-- tabs -->
<div class="container mb-5">
	<div class="row">
		<div class="col-md-12">
			<div class="heading">
				<h1 class="font-600 text-black text-center mb-5">What’s Your Model?</h1>
			</div>
		</div>

		<div class="col-md-12">
			<div class="tabs">
				<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
    				<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile1" type="button" role="tab" aria-controls="profile1" aria-selected="false">
				    	<img src="{{ asset('assets/images/m1.png') }}"> The city
				    </button>
				  </li>
				  <li class="nav-item" role="presentation">
				    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
				    	<img src="{{ asset('assets/images/m1.png') }}"> The city PRO
				    </button>
				  </li>
				  <li class="nav-item" role="presentation">
				    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
				    	<img src="{{ asset('assets/images/m1.png') }}"> The street
				    </button>
				  </li>
				  <li class="nav-item" role="presentation">
				    <button class="nav-link" id="con-tab" data-bs-toggle="tab" data-bs-target="#con" type="button" role="tab" aria-controls="con" aria-selected="false">
				    	<img src="{{ asset('assets/images/m1.png') }}"> The street
				    </button>
				  </li>
				</ul>
				<div class="tab-content " id="myTabContent">
				  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				  	<div class="row  mt-5">
				  		<div class="col-md-6">
				  			<div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">
								  <div class="carousel-inner">
								    <div class="carousel-item  text-center active">
								      <img src="{{ asset('assets/images/p.png') }}" class="d-block mx-auto w-75" alt="...">
								    </div>
								    <div class="carousel-item text-center ">
								      <img src="{{ asset('assets/images/p.png') }}" class="d-block mx-auto w-75" alt="...">
								    </div>
								    <div class="carousel-item text-center ">
								      <img src="{{ asset('assets/images/p.png') }}" class="d-block mx-auto w-75" alt="...">
								    </div>
								    <div class="carousel-item text-center ">
								      <img src="{{ asset('assets/images/p.png') }}" class="d-block mx-auto w-75" alt="...">
								    </div>
								    <div class="carousel-item text-center ">
								      <img src="{{ asset('assets/images/p.png') }}" class="d-block mx-auto w-75" alt="...">
								    </div>
								  </div>
								  <div class="carousel-indicators">
								    <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"><img src="{{ asset('assets/images/p.png') }}" class="d-block" alt="..."></button>
								    <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1" aria-label="Slide 2"><img src="{{ asset('assets/images/p.png') }}" class="d-block" alt="..."></button>
								    <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2" aria-label="Slide 3"><img src="{{ asset('assets/images/p.png') }}" class="d-block" alt="..."></button>
								    <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="3" aria-label="Slide 3"><img src="{{ asset('assets/images/p.png') }}" class="d-block" alt="..."></button>
								    <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="4" aria-label="Slide 3"><img src="{{ asset('assets/images/p.png') }}" class="d-block" alt="..."></button>
								  </div>
								  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
								    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
								    <span class="visually-hidden">Previous</span>
								  </button>
								  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
								    <span class="carousel-control-next-icon" aria-hidden="true"></span>
								    <span class="visually-hidden">Next</span>
								  </button>
								</div>
				  		</div>
				  		<div class="col-md-6">
				  			<div class="products_description_box">
				  				<div class="product_head d-flex justify-content-between align-items-center">
				  					<h1 class="font-600 text-black mb-0">The City PRO</h1>
				  					<div class="d-flex justify-content-between align-items-center">
				  						<span class="abels font-600 text-white mx-2">For the Urban Commuter</span>
				  						<p class="font-600 mb-0 rev">4/5</p>
				  					</div>
				  				</div>
				  				<div class="product_description pt-4 pb-4 px-3">
				  					<div class="description_pro d-flex justify-content-between mt-3">
				  						<div class="d-flex justify-content-start align-items-center">
				  							<img src="{{ asset('assets/images/f1.svg') }}">
				  							<p class="font-600 mb-0 mx-2">Top speed</p>
				  						</div>
				  						<div class="d-flex justify-content-start align-items-center">
				  							<p class="font-700 mb-0 mx-2">20 mph</p>
				  							<div>
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  							</div>
				  						</div>
				  					</div>
				  					<div class="description_pro d-flex justify-content-between mt-3">
				  						<div class="d-flex justify-content-start align-items-center">
				  							<img src="{{ asset('assets/images/f2.svg') }}">
				  							<p class="font-600 mb-0 mx-2">Acceleration</p>
				  						</div>
				  						<div class="d-flex justify-content-start align-items-center">
				  							<p class="font-700 mb-0 mx-2">24 mph</p>
				  							<div>
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  							</div>
				  						</div>
				  					</div>
				  					<div class="description_pro d-flex justify-content-between mt-3">
				  						<div class="d-flex justify-content-start align-items-center">
				  							<img src="{{ asset('assets/images/f3.svg') }}">
				  							<p class="font-600 mb-0 mx-2">Range</p>
				  						</div>
				  						<div class="d-flex justify-content-start align-items-center">
				  							<p class="font-700 mb-0 mx-2">12 mi</p>
				  							<div>
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  							</div>
				  						</div>
				  					</div>
				  					<div class="description_pro d-flex justify-content-between mt-3">
				  						<div class="d-flex justify-content-start align-items-center">
				  							<img src="{{ asset('assets/images/f4.svg') }}">
				  							<p class="font-600 mb-0 mx-2">Transportations</p>
				  						</div>
				  						<div class="d-flex justify-content-start align-items-center">
				  							<p class="font-700 mb-0 mx-2">15 mi</p>
				  							<div>
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  							</div>
				  						</div>
				  					</div>
				  					<div class="description_pro d-flex justify-content-between mt-3">
				  						<div class="d-flex justify-content-start align-items-center">
				  							<img src="{{ asset('assets/images/f5.svg') }}">
				  							<p class="font-600 mb-0 mx-2">Charge time (80%)</p>
				  						</div>
				  						<div class="d-flex justify-content-start align-items-center">
				  							<p class="font-700 mb-0 mx-2">3.5 hr</p>
				  							<div>
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  							</div>
				  						</div>
				  					</div>
				  				</div>
				  				<a href="#" class="outline mt-4 w-100 d-block text-center text-decoration"> Buy /  $749</a>
				  				<button class="submit mt-4">Rent / $59mo</button>
				  				
				  			</div>
				  		</div>
				  	</div>
				  </div>
				  <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab">
				  	<div class="row  mt-5">
				  		<div class="col-md-6">
				  			<div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
								  <div class="carousel-inner">
								    <div class="carousel-item  text-center active">
								      <img src="{{ asset('assets/images/p.png') }}" class="d-block mx-auto w-75" alt="...">
								    </div>
								    <div class="carousel-item text-center ">
								      <img src="{{ asset('assets/images/p.png') }}" class="d-block mx-auto w-75" alt="...">
								    </div>
								    <div class="carousel-item text-center ">
								      <img src="{{ asset('assets/images/p.png') }}" class="d-block mx-auto w-75" alt="...">
								    </div>
								    <div class="carousel-item text-center ">
								      <img src="{{ asset('assets/images/p.png') }}" class="d-block mx-auto w-75" alt="...">
								    </div>
								    <div class="carousel-item text-center ">
								      <img src="{{ asset('assets/images/p.png') }}" class="d-block mx-auto w-75" alt="...">
								    </div>
								  </div>
								  <div class="carousel-indicators">
								    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"><img src="{{ asset('assets/images/p.png') }}" class="d-block" alt="..."></button>
								    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"><img src="{{ asset('assets/images/p.png') }}" class="d-block" alt="..."></button>
								    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"><img src="{{ asset('assets/images/p.png') }}" class="d-block" alt="..."></button>
								    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="3" aria-label="Slide 3"><img src="{{ asset('assets/images/p.png') }}" class="d-block" alt="..."></button>
								    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="4" aria-label="Slide 3"><img src="{{ asset('assets/images/p.png') }}" class="d-block" alt="..."></button>
								  </div>
								  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
								    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
								    <span class="visually-hidden">Previous</span>
								  </button>
								  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
								    <span class="carousel-control-next-icon" aria-hidden="true"></span>
								    <span class="visually-hidden">Next</span>
								  </button>
								</div>
				  		</div>
				  		<div class="col-md-6">
				  			<div class="products_description_box">
				  				<div class="product_head d-flex justify-content-between align-items-center">
				  					<h1 class="font-600 text-black mb-0">The City PRO</h1>
				  					<div class="d-flex justify-content-between align-items-center">
				  						<span class="abels font-600 text-white mx-2">For the Urban Commuter</span>
				  						<p class="font-600 mb-0 rev">4/5</p>
				  					</div>
				  				</div>
				  				<div class="product_description pt-4 pb-4 px-3">
				  					<div class="description_pro d-flex justify-content-between mt-3">
				  						<div class="d-flex justify-content-start align-items-center">
				  							<img src="{{ asset('assets/images/f1.svg') }}">
				  							<p class="font-600 mb-0 mx-2">Top speed</p>
				  						</div>
				  						<div class="d-flex justify-content-start align-items-center">
				  							<p class="font-700 mb-0 mx-2">20 mph</p>
				  							<div>
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  							</div>
				  						</div>
				  					</div>
				  					<div class="description_pro d-flex justify-content-between mt-3">
				  						<div class="d-flex justify-content-start align-items-center">
				  							<img src="{{ asset('assets/images/f2.svg') }}">
				  							<p class="font-600 mb-0 mx-2">Acceleration</p>
				  						</div>
				  						<div class="d-flex justify-content-start align-items-center">
				  							<p class="font-700 mb-0 mx-2">24 mph</p>
				  							<div>
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  							</div>
				  						</div>
				  					</div>
				  					<div class="description_pro d-flex justify-content-between mt-3">
				  						<div class="d-flex justify-content-start align-items-center">
				  							<img src="{{ asset('assets/images/f3.svg') }}">
				  							<p class="font-600 mb-0 mx-2">Range</p>
				  						</div>
				  						<div class="d-flex justify-content-start align-items-center">
				  							<p class="font-700 mb-0 mx-2">12 mi</p>
				  							<div>
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  							</div>
				  						</div>
				  					</div>
				  					<div class="description_pro d-flex justify-content-between mt-3">
				  						<div class="d-flex justify-content-start align-items-center">
				  							<img src="{{ asset('assets/images/f4.svg') }}">
				  							<p class="font-600 mb-0 mx-2">Transportations</p>
				  						</div>
				  						<div class="d-flex justify-content-start align-items-center">
				  							<p class="font-700 mb-0 mx-2">15 mi</p>
				  							<div>
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  							</div>
				  						</div>
				  					</div>
				  					<div class="description_pro d-flex justify-content-between mt-3">
				  						<div class="d-flex justify-content-start align-items-center">
				  							<img src="{{ asset('assets/images/f5.svg') }}">
				  							<p class="font-600 mb-0 mx-2">Charge time (80%)</p>
				  						</div>
				  						<div class="d-flex justify-content-start align-items-center">
				  							<p class="font-700 mb-0 mx-2">3.5 hr</p>
				  							<div>
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  							</div>
				  						</div>
				  					</div>
				  				</div>
				  				<a href="#" class="outline mt-4 w-100 d-block text-center text-decoration"> Buy /  $749</a>
				  				<button class="submit mt-4">Rent / $59mo</button>
				  				
				  			</div>
				  		</div>
				  	</div>
				  </div>
				  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
				  	<div class="row  mt-5">
				  		<div class="col-md-6">
				  			<div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel">
								  <div class="carousel-inner">
								    <div class="carousel-item  text-center active">
								      <img src="{{ asset('assets/images/p.png') }}" class="d-block mx-auto w-75" alt="...">
								    </div>
								    <div class="carousel-item text-center ">
								      <img src="{{ asset('assets/images/p.png') }}" class="d-block mx-auto w-75" alt="...">
								    </div>
								    <div class="carousel-item text-center ">
								      <img src="{{ asset('assets/images/p.png') }}" class="d-block mx-auto w-75" alt="...">
								    </div>
								    <div class="carousel-item text-center ">
								      <img src="{{ asset('assets/images/p.png') }}" class="d-block mx-auto w-75" alt="...">
								    </div>
								    <div class="carousel-item text-center ">
								      <img src="{{ asset('assets/images/p.png') }}" class="d-block mx-auto w-75" alt="...">
								    </div>
								  </div>
								  <div class="carousel-indicators">
								    <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"><img src="{{ asset('assets/images/p.png') }}" class="d-block" alt="..."></button>
								    <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1" aria-label="Slide 2"><img src="{{ asset('assets/images/p.png') }}" class="d-block" alt="..."></button>
								    <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="2" aria-label="Slide 3"><img src="{{ asset('assets/images/p.png') }}" class="d-block" alt="..."></button>
								    <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="3" aria-label="Slide 3"><img src="{{ asset('assets/images/p.png') }}" class="d-block" alt="..."></button>
								    <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="4" aria-label="Slide 3"><img src="{{ asset('assets/images/p.png') }}" class="d-block" alt="..."></button>
								  </div>
								  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">
								    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
								    <span class="visually-hidden">Previous</span>
								  </button>
								  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">
								    <span class="carousel-control-next-icon" aria-hidden="true"></span>
								    <span class="visually-hidden">Next</span>
								  </button>
								</div>
				  		</div>
				  		<div class="col-md-6">
				  			<div class="products_description_box">
				  				<div class="product_head d-flex justify-content-between align-items-center">
				  					<h1 class="font-600 text-black mb-0">The City PRO</h1>
				  					<div class="d-flex justify-content-between align-items-center">
				  						<span class="abels font-600 text-white mx-2">For the Urban Commuter</span>
				  						<p class="font-600 mb-0 rev">4/5</p>
				  					</div>
				  				</div>
				  				<div class="product_description pt-4 pb-4 px-3">
				  					<div class="description_pro d-flex justify-content-between mt-3">
				  						<div class="d-flex justify-content-start align-items-center">
				  							<img src="{{ asset('assets/images/f1.svg') }}">
				  							<p class="font-600 mb-0 mx-2">Top speed</p>
				  						</div>
				  						<div class="d-flex justify-content-start align-items-center">
				  							<p class="font-700 mb-0 mx-2">20 mph</p>
				  							<div>
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  							</div>
				  						</div>
				  					</div>
				  					<div class="description_pro d-flex justify-content-between mt-3">
				  						<div class="d-flex justify-content-start align-items-center">
				  							<img src="{{ asset('assets/images/f2.svg') }}">
				  							<p class="font-600 mb-0 mx-2">Acceleration</p>
				  						</div>
				  						<div class="d-flex justify-content-start align-items-center">
				  							<p class="font-700 mb-0 mx-2">24 mph</p>
				  							<div>
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  							</div>
				  						</div>
				  					</div>
				  					<div class="description_pro d-flex justify-content-between mt-3">
				  						<div class="d-flex justify-content-start align-items-center">
				  							<img src="{{ asset('assets/images/f3.svg') }}">
				  							<p class="font-600 mb-0 mx-2">Range</p>
				  						</div>
				  						<div class="d-flex justify-content-start align-items-center">
				  							<p class="font-700 mb-0 mx-2">12 mi</p>
				  							<div>
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  							</div>
				  						</div>
				  					</div>
				  					<div class="description_pro d-flex justify-content-between mt-3">
				  						<div class="d-flex justify-content-start align-items-center">
				  							<img src="{{ asset('assets/images/f4.svg') }}">
				  							<p class="font-600 mb-0 mx-2">Transportations</p>
				  						</div>
				  						<div class="d-flex justify-content-start align-items-center">
				  							<p class="font-700 mb-0 mx-2">15 mi</p>
				  							<div>
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  							</div>
				  						</div>
				  					</div>
				  					<div class="description_pro d-flex justify-content-between mt-3">
				  						<div class="d-flex justify-content-start align-items-center">
				  							<img src="{{ asset('assets/images/f5.svg') }}">
				  							<p class="font-600 mb-0 mx-2">Charge time (80%)</p>
				  						</div>
				  						<div class="d-flex justify-content-start align-items-center">
				  							<p class="font-700 mb-0 mx-2">3.5 hr</p>
				  							<div>
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  							</div>
				  						</div>
				  					</div>
				  				</div>
				  				<a href="#" class="outline mt-4 w-100 d-block text-center text-decoration"> Buy /  $749</a>
				  				<button class="submit mt-4">Rent / $59mo</button>
				  				
				  			</div>
				  		</div>
				  	</div>
				  </div>
				  <div class="tab-pane fade" id="con" role="tabpanel" aria-labelledby="con-tab">
				  	<div class="row  mt-5">
				  		<div class="col-md-6">
				  			<div id="carouselExampleIndicators4" class="carousel slide" data-bs-ride="carousel">
								  <div class="carousel-inner">
								    <div class="carousel-item  text-center active">
								      <img src="{{ asset('assets/images/p.png') }}" class="d-block mx-auto w-75" alt="...">
								    </div>
								    <div class="carousel-item text-center ">
								      <img src="{{ asset('assets/images/p.png') }}" class="d-block mx-auto w-75" alt="...">
								    </div>
								    <div class="carousel-item text-center ">
								      <img src="{{ asset('assets/images/p.png') }}" class="d-block mx-auto w-75" alt="...">
								    </div>
								    <div class="carousel-item text-center ">
								      <img src="{{ asset('assets/images/p.png') }}" class="d-block mx-auto w-75" alt="...">
								    </div>
								    <div class="carousel-item text-center ">
								      <img src="{{ asset('assets/images/p.png') }}" class="d-block mx-auto w-75" alt="...">
								    </div>
								  </div>
								  <div class="carousel-indicators">
								    <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"><img src="{{ asset('assets/images/p.png') }}" class="d-block" alt="..."></button>
								    <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="1" aria-label="Slide 2"><img src="{{ asset('assets/images/p.png') }}" class="d-block" alt="..."></button>
								    <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="2" aria-label="Slide 3"><img src="{{ asset('assets/images/p.png') }}" class="d-block" alt="..."></button>
								    <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="3" aria-label="Slide 3"><img src="{{ asset('assets/images/p.png') }}" class="d-block" alt="..."></button>
								    <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="4" aria-label="Slide 3"><img src="{{ asset('assets/images/p.png') }}" class="d-block" alt="..."></button>
								  </div>
								  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide="prev">
								    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
								    <span class="visually-hidden">Previous</span>
								  </button>
								  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide="next">
								    <span class="carousel-control-next-icon" aria-hidden="true"></span>
								    <span class="visually-hidden">Next</span>
								  </button>
								</div>
				  		</div>
				  		<div class="col-md-6">
				  			<div class="products_description_box">
				  				<div class="product_head d-flex justify-content-between align-items-center">
				  					<h1 class="font-600 text-black mb-0">The City PRO</h1>
				  					<div class="d-flex justify-content-between align-items-center">
				  						<span class="abels font-600 text-white mx-2">For the Urban Commuter</span>
				  						<p class="font-600 mb-0 rev">4/5</p>
				  					</div>
				  				</div>
				  				<div class="product_description pt-4 pb-4 px-3">
				  					<div class="description_pro d-flex justify-content-between mt-3">
				  						<div class="d-flex justify-content-start align-items-center">
				  							<img src="{{ asset('assets/images/f1.svg') }}">
				  							<p class="font-600 mb-0 mx-2">Top speed</p>
				  						</div>
				  						<div class="d-flex justify-content-start align-items-center">
				  							<p class="font-700 mb-0 mx-2">20 mph</p>
				  							<div>
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  							</div>
				  						</div>
				  					</div>
				  					<div class="description_pro d-flex justify-content-between mt-3">
				  						<div class="d-flex justify-content-start align-items-center">
				  							<img src="{{ asset('assets/images/f2.svg') }}">
				  							<p class="font-600 mb-0 mx-2">Acceleration</p>
				  						</div>
				  						<div class="d-flex justify-content-start align-items-center">
				  							<p class="font-700 mb-0 mx-2">24 mph</p>
				  							<div>
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  							</div>
				  						</div>
				  					</div>
				  					<div class="description_pro d-flex justify-content-between mt-3">
				  						<div class="d-flex justify-content-start align-items-center">
				  							<img src="{{ asset('assets/images/f3.svg') }}">
				  							<p class="font-600 mb-0 mx-2">Range</p>
				  						</div>
				  						<div class="d-flex justify-content-start align-items-center">
				  							<p class="font-700 mb-0 mx-2">12 mi</p>
				  							<div>
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  							</div>
				  						</div>
				  					</div>
				  					<div class="description_pro d-flex justify-content-between mt-3">
				  						<div class="d-flex justify-content-start align-items-center">
				  							<img src="{{ asset('assets/images/f4.svg') }}">
				  							<p class="font-600 mb-0 mx-2">Transportations</p>
				  						</div>
				  						<div class="d-flex justify-content-start align-items-center">
				  							<p class="font-700 mb-0 mx-2">15 mi</p>
				  							<div>
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  							</div>
				  						</div>
				  					</div>
				  					<div class="description_pro d-flex justify-content-between mt-3">
				  						<div class="d-flex justify-content-start align-items-center">
				  							<img src="{{ asset('assets/images/f5.svg') }}">
				  							<p class="font-600 mb-0 mx-2">Charge time (80%)</p>
				  						</div>
				  						<div class="d-flex justify-content-start align-items-center">
				  							<p class="font-700 mb-0 mx-2">3.5 hr</p>
				  							<div>
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/blu.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  								<img src="{{ asset('assets/images/gry.svg') }}">
				  							</div>
				  						</div>
				  					</div>
				  				</div>
				  				<a href="#" class="outline mt-4 w-100 d-block text-center text-decoration"> Buy /  $749</a>
				  				<button class="submit mt-4">Rent / $59mo</button>
				  				
				  			</div>
				  		</div>
				  	</div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- tabs -->

<!-- cards -->
<div class="container mb-5">
	<div class="row">
		<div class="col-md-12">
			<div class="heading">
				<h1 class="font-600 text-black mb-5">What do we offer?</h1>
			</div>
		</div>
		<div class="col-md-6">
			<div class="get_box2 relative mt-4">
				<img src="{{ asset('assets/images/i6.png') }}" class="w-100">
				<div class="over_get_box p-4">
					<h3 class="text-white">Warranty</h3>
					<p class="text-white mb-0">All rented scooters, and scooters purchased within 1 year <br>are entitled to a full parts warranty. The replacement <br>parts will be shipped and sent free of charge</p>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="get_box relative mt-4">
				<img src="{{ asset('assets/images/i7.png') }}" class="w-100">
				<div class="over_get_box p-4">
					<h3 class="text-white mt-5 pt-5">Delivery</h3>
					<p class="text-white mb-0">We’ll ship your new ride right to you!</p>
				</div>
			</div>
			<div class="get_box relative mt-4">
				<img src="{{ asset('assets/images/i8.png') }}" class="w-100">
				<div class="over_get_box px-4 pb-4 pt-5">
					<h3 class="text-white mt-2 pt-5">Insurance</h3>
					<p class="text-white mb-0">All scooters with a proper police report, <br> proof of theft, within warranty are eligible <br>for a replacement, you just pay off shipping</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- cards -->

<!-- about -->
<div class="profile_bg">
	<div class="container pt-4 pb-4  mt-5 mb-5">
		<div class="row align-items-center">
			<div class="col-md-6">
				<div class="about_content ">
					<h1 class="font-600 text-black relative">Don't bare public transportation. <br> Enjoy the outdoors and explore your city</h1>
					<p class="text-black font-500 mt-4">Having fun cruising the streets at 20+Mph</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="about_content">
					<img src="{{ asset('assets/images/a3.png') }}" class="w-100">
				</div>
			</div>
		</div>
	</div>



	<div class="container pt-4 pb-4  mt-5 mb-5">
		<div class="row align-items-center">
			<div class="col-md-6">
				<div class="about_content">
					<img src="{{ asset('assets/images/a5.png') }}" class="w-100">
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="about_content ">
					<h1 class="font-600 text-black relative">A convenient modern App  for your scooter</h1>
					<a href="#" class="order_now d-inline-block mt-4">Coming soon...</a>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</div>
<!-- about -->
<!-- review -->
<div class="mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading mt-5 d-flex justify-content-between align-items-center">
					<h1 class="font-600 text-black mb-5">Reviews from companies</h1>
					<a href="#">All reviews</a>
				</div>
			</div>
			<div class="col-md-12">
				<div class="owl-carousel relative" id="review">
					<div class="item">
						<div class="review_box text-center pt-5 pb-5 px-4">
							<img src="{{ asset('assets/images/r1.png') }}" class="mx-auto" width="210px">
							<p class="text-black font-400 mb-0 mt-4">“It has transformed my commute into an enjoyable part of my day”</p>
						</div>
					</div>
					<div class="item">
						<div class="review_box text-center pt-5 pb-5 px-4">
							<img src="{{ asset('assets/images/r2.png') }}" class="mx-auto" width="210px">
							<p class="text-black font-400 mb-0 mt-4">“It has transformed my commute into an enjoyable part of my day”</p>
						</div>
					</div>
					<div class="item">
						<div class="review_box text-center pt-5 pb-5 px-4">
							<img src="{{ asset('assets/images/r3.png') }}" class="mx-auto" width="210px">
							<p class="text-black font-400 mb-0 mt-4">“It has transformed my commute into an enjoyable part of my day”</p>
						</div>
					</div>
					<div class="item">
						<div class="review_box text-center pt-5 pb-5 px-4">
							<img src="{{ asset('assets/images/r1.png') }}" class="mx-auto" width="210px">
							<p class="text-black font-400 mb-0 mt-4">“It has transformed my commute into an enjoyable part of my day”</p>
						</div>
					</div>
				</div>					    
			</div>
		</div>
	</div>
</div>
<!-- review -->
<!-- profile -->
<div class="profile_bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading mt-5 d-flex justify-content-between align-items-center">
					<h1 class="font-600 text-black mb-5">Rider profiles</h1>
					<a href="#">All profiles</a>
				</div>
			</div>
			<div class="col-md-12">
				<div class="owl-carousel relative" id="profile">
					<div class="item">
						<div class="profile_box text-center pt-5 pb-5 px-4">
							<img src="{{ asset('assets/images/profile1.png') }}" class="mx-auto">
							<h5 class="text-black font-600 mt-4">Robert Shultz</h5>
						</div>
					</div>
					<div class="item">
						<div class="profile_box text-center pt-5 pb-5 px-4">
							<img src="{{ asset('assets/images/profile2.png') }}" class="mx-auto">
							<h5 class="text-black font-600 mt-4">Amanda L.</h5>
						</div>
					</div>
					<div class="item">
						<div class="profile_box text-center pt-5 pb-5 px-4">
							<img src="{{ asset('assets/images/profile3.png') }}" class="mx-auto">
							<h5 class="text-black font-600 mt-4">Michael Shwimmer</h5>
						</div>
					</div>
					<div class="item">
						<div class="profile_box text-center pt-5 pb-5 px-4">
							<img src="{{ asset('assets/images/profile4.png') }}" class="mx-auto">
							<h5 class="text-black font-600 mt-4">Amanda L.</h5>
						</div>
					</div>
					<div class="item">
						<div class="profile_box text-center pt-5 pb-5 px-4">
							<img src="{{ asset('assets/images/profile1.png') }}" class="mx-auto">
							<h5 class="text-black font-600 mt-4">Robert Shultz</h5>
						</div>
					</div>
				</div>					    
			</div>
		</div>
	</div>
</div>
<!-- profile -->


<!-- feedback -->
<div class="container mb-5">
	<div class="row">
		<div class="col-md-12">
			<div class="heading mt-5 d-flex justify-content-between align-items-center">
				<h1 class="font-600 text-black mb-5">Feedback from subscribers</h1>
				<a href="#">All reviews</a>
			</div>
		</div>
		<div class="col-md-12">
			<div class="owl-carousel relative" id="feedback">
				<div class="item">
					<div class="feeback_box p-4">
						<div class="feed_head d-flex justify-content-start align-items-center">
							<img src="{{ asset('assets/images/profile1.png') }}">
							<div class="mx-3">
								<h6 class="mb-0 font-600">Robert Shultz</h6>
								<p class=" font-600">5/5</p>
							</div>
						</div>
						<p class="mt-3 mb-3 font-500">Love this product so much! It has transformed my commute into an enjoyable part of my day. Will be buying a backup onc...</p>
						<a href="#" class="text-decoration d-flex align-items-center">Read more <img src="{{ asset('assets/images/ablu.png') }}"></a>
					</div>
				</div>
				<div class="item">
					<div class="feeback_box p-4">
						<div class="feed_head d-flex justify-content-start align-items-center">
							<img src="{{ asset('assets/images/profile2.png') }}">
							<div class="mx-3">
								<h6 class="mb-0 font-600">Amanda L.</h6>
								<p class=" font-600">5/5</p>
							</div>
						</div>
						<p class="mt-3 mb-3 font-500">Love this product so much! It has transformed my commute into an enjoyable part of my day. Will be buying a backup onc...</p>
						<a href="#" class="text-decoration d-flex align-items-center">Read more <img src="{{ asset('assets/images/ablu.png') }}"></a>
					</div>
				</div>
				<div class="item">
					<div class="feeback_box p-4">
						<div class="feed_head d-flex justify-content-start align-items-center">
							<img src="{{ asset('assets/images/profile3.png') }}">
							<div class="mx-3">
								<h6 class="mb-0 font-600">Michael Shwimmer</h6>
								<p class=" font-600">5/5</p>
							</div>
						</div>
						<p class="mt-3 mb-3 font-500">Love this product so much! It has transformed my commute into an enjoyable part of my day. Will be buying a backup onc...</p>
						<a href="#" class="text-decoration d-flex align-items-center">Read more <img src="{{ asset('assets/images/ablu.png') }}"></a>
					</div>
				</div>
				<div class="item">
					<div class="feeback_box p-4">
						<div class="feed_head d-flex justify-content-start align-items-center">
							<img src="{{ asset('assets/images/profile1.png') }}">
							<div class="mx-3">
								<h6 class="mb-0 font-600">Robert Shultz</h6>
								<p class=" font-600">5/5</p>
							</div>
						</div>
						<p class="mt-3 mb-3 font-500">Love this product so much! It has transformed my commute into an enjoyable part of my day. Will be buying a backup onc...</p>
						<a href="#" class="text-decoration d-flex align-items-center">Read more <img src="{{ asset('assets/images/ablu.png') }}"></a>
					</div>
				</div>
			</div>					    
		</div>
	</div>
</div>
<!-- feedback -->
<!-- faq -->
<div class="container mt-5 mb-5 pb-5">
	<div class="row">
		<div class="col-md-4">
			<div class="heading">
				<h1 class="font-600 text-black mb-5">Frequently <br> Asked <br> Questions</h1>
			</div>
		</div>
		<div class="col-md-8">
			<div id="faqs">
				<div class="accordion" id="accordionExample">
				  <div class="accordion-item">
				    <h2 class="accordion-header" id="headingOne">
				      <button class="accordion-button font-600" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				        Can I try the product within the 14 days?
				      </button>
				    </h2>
				    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
				      <div class="accordion-body">
				        <p>If anything goes wrong that isn’t your fault, we’ll fix it, and pay any associated shipping costs. The warranty does not cover any of what we call 'consumables', e.g. tyres, inner tubes, grip tape, handlebar grips, brake cables, paint, etc.</p>
				      </div>
				    </div>
				  </div>
				  <div class="accordion-item">
				    <h2 class="accordion-header" id="headingTwo">
				      <button class="accordion-button font-600 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				        What is included in the 2-year warranty?
				      </button>
				    </h2>
				    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
				      <div class="accordion-body">
				        <p>If anything goes wrong that isn’t your fault, we’ll fix it, and pay any associated shipping costs. The warranty does not cover any of what we call 'consumables', e.g. tyres, inner tubes, grip tape, handlebar grips, brake cables, paint, etc.</p>
				      </div>
				    </div>
				  </div>
				  <div class="accordion-item">
				    <h2 class="accordion-header" id="headingThree">
				      <button class="accordion-button font-600 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				        Where do you ship to?
				      </button>
				    </h2>
				    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
				      <div class="accordion-body">
				        <p>If anything goes wrong that isn’t your fault, we’ll fix it, and pay any associated shipping costs. The warranty does not cover any of what we call 'consumables', e.g. tyres, inner tubes, grip tape, handlebar grips, brake cables, paint, etc.</p>
				      </div>
				    </div>
				  </div>
				  <div class="accordion-item">
				    <h2 class="accordion-header" id="headingFour">
				      <button class="accordion-button font-600 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				       Is the battery removable?
				      </button>
				    </h2>
				    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
				      <div class="accordion-body">
				        <p>If anything goes wrong that isn’t your fault, we’ll fix it, and pay any associated shipping costs. The warranty does not cover any of what we call 'consumables', e.g. tyres, inner tubes, grip tape, handlebar grips, brake cables, paint, etc.</p>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- faq -->
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