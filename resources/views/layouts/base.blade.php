<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Metro Rides</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    
		 <!-- Linking Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
      .cart-container {
    position: relative;
    display: inline-block;
}

.badge {
    position: absolute;
    top: -8px;
    right: 64px;
    background-color: #1d1d1d;
    color: white;
    border-radius: 40%;
    padding: 5px 8px;
    font-size: 12px;
}


    </style>
	@livewireStyles

</head>
<body>
<!-- header -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('index') }}">
      <img src="{{ asset('assets/images/logo.svg') }}">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="text-black fa fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-black mx-3 active" aria-current="page"  href="{{ route('buy') }}">Buy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black mx-3" href="{{ route('store') }}">Store</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black mx-3" href="{{ route('compare') }}">Compare</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black mx-3" href="{{ route('metro') }}">Metro+</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black mx-3" href="{{ route('our-vision') }}">Our Vision</a>
        </li>
        <li class="nav-item cart-container">
          @livewire('cart-count-component')
        </li>
      </ul>
      @if(Route::has('login'))
        @auth
              @if(Auth::user()->utype === 'ADM')
              <div class="d-flex btn-right">
                <div class="dropdown">
                  <a href="#" class="nav-link text-black"  type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">My Account ({{Auth::user()->name}})</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                      <li><a class="dropdown-item" href="{{ route('admin.categories') }}">Categories</a></li>
                      <li><a class="dropdown-item" href="{{ route('admin.products') }}">Products</a></li>
                      <li><a class="dropdown-item" href="{{ route('admin.coupons') }}">Coupons</a></li>
            
                      <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a></li>
                      </form>
                    </ul>
                </div>
              </div>
              @else
              <div class="d-flex btn-right">
                <div class="dropdown">
                  <a href="#" class="nav-link text-black"  type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">My Account ({{Auth::user()->name}})</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="{{ route('user.dashboard') }}">Dashboard</a></li>
                      <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a></li>
                      </form>
                    </ul>
                </div>
              </div>
              @endif
        @else
        <div class="d-flex btn-right">
      	    <ul class="navbar-nav">
            <li class="nav-item">
          <a class="nav-link text-black" title="Sign In" href="{{ route('login') }}">Sign In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black" title="Sign Up" href="{{ route('register') }}">Sign Up</a>
        </li>
            </ul>
          </div>
        @endif
      @endif
    </div>
  </div>
</nav>
<!-- header -->

<!-- Main part start -->
{{$slot}}
<!-- Main part end -->

<!-- footer -->
<div class="fotter">
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<div class="f-logo">
					<a href="#"><img src=" {{ asset('assets/images/flogo.svg') }}"></a>
				</div>
			</div>
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-3">
						<div class="f-widiget">
							<h6 class="text-white mb-4">Models</h6>
							<a href="#profile1">The City</a>
							<a href="#home">The City PRO</a>
							<a href="#">The Street</a>
							<a href="#">The Street PRO</a>
						</div>
					</div>
					<div class="col-md-2">
						<div class="f-widiget">
							<h6 class="text-white mb-4">Store</h6>
							<a href="#">Buy</a>
							<a href="#">Rent</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="f-widiget">
							<h6 class="text-white mb-4">About us</h6>
							<a href="#">Our story</a>
							<a href="#">Help center</a>
							<a href="#">Contacts</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="f-widiget">
							<h6 class="text-white mb-4">Stay in touch</h6>
							<p>Sign up for Metro for regular updates on smartest way to get around the City</p>
							<form class="newsletter relative">
								<input type="email" placeholder="Your email">
								<button><img src="{{ asset('assets/images/paperplane.svg') }}"></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="row mt-4">
			<div class="col-md-6">
				<div class="f-widiget">
					<p class="copy_right">
						© 2023 Metro Rides | All right reserved 
					</p>
				</div>
			</div>
			<div class="col-md-6">
					<div class="f-widiget">
						<p class="copy_right mt-0 mb-0 text-end d-flex justify-content-end align-items-center">
							<span class="mx-2"> made by</span> <a href="#" class="mt-0 mb-0  text-white">roobinium.io</a>
						</p>
					</div>
				</div>
		</div>
	</div>
</div>
<!-- footer -->
<!-- Linking jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Linking Owl Carousel JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- Your custom script -->
  <script src="https://cdn.tiny.cloud/1/4194r14aix2p1ale316w9zo0va58osp3f5sbggm6t2t98vgr/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  
  <script>
    $(document).ready(function(){
      $('#review').owlCarousel({
        loop:true,
        margin:30,
        autoplay:true, 
	      autoplayTimeout:3000, 
	      autoplayHoverPause:true, 
	     dots:false,
        nav:true,
        responsive:{
          0:{
            items:1
          },
          600:{
            items:3
          },
          1000:{
            items:3
          }
        }
      })
    });
  $(document).ready(function(){
      $('#feedback').owlCarousel({
        loop:true,
        margin:30,
        autoplay:true, 
	      autoplayTimeout:3000, 
	      autoplayHoverPause:true, 
	     dots:false,
        nav:true,
        responsive:{
          0:{
            items:1
          },
          600:{
            items:3
          },
          1000:{
            items:3
          }
        }
      })
    });
  $(document).ready(function(){
      $('#profile').owlCarousel({
        loop:true,
        margin:30,
        autoplay:true, 
	      autoplayTimeout:3000, 
	      autoplayHoverPause:true, 
	     dots:false,
        nav:true,
        responsive:{
          0:{
            items:1
          },
          600:{
            items:4
          },
          1000:{
            items:4
          }
        }
      })
    });
  </script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  @livewireScripts
  @stack('scripts')
</body>
</html>