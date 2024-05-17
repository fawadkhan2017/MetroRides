<x-guest-layout>

    <!-- middle -->
    <div class="container mt-5 mb-5 pt-5 pb-5">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="heading text-center">
                    <h1 class="mb-4">Sign In</h1>
                </div>
                <div class="form_box">
                    <x-jet-validation-errors class="mb-4" />
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Email" value="{{ old('email') }}" required autofocus>
                        </div>
                        <div class="mb-3 relative">
                            <input type="password" name="password" class="form-control" id="passwordInput1" placeholder="Password">
                            <img src="{{ asset('assets/images/eye-off.svg') }}" id="eyeIcon1" onclick="togglePasswordVisibility('passwordInput1', 'eyeIcon1')" required autocomplete="current-password">
                        </div>
                        <a href="{{ route('password.request') }}" class="d-block">Forgot password?</a>
                        <button class="mt-3 submit" type="submit" name="submit">Sign In</button>

                        <p class="mt-5 text-center"> Still don’t have an account?  <br> <a href="{{ route('register') }}" class="text-decoration">Sign up</a> </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- middle -->

</x-guest-layout>
