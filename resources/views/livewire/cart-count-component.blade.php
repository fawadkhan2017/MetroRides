<a class="nav-link text-black mx-3" href="{{ route('store.cart') }}">
          <img src="{{ asset('assets/images/cart.svg') }}" class="cursor-pointer p-2">
          @if(Cart::count() > 0)
          <span class="badge">{{ Cart::count() }}</span>
          @endif
          Cart
        </a>