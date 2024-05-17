<x-guest-layout>
<!-- middle -->
<div class="container mt-5 mb-5 pt-5 pb-5">
	<div class="row">
		<div class="col-md-4 mx-auto">
			<div class="heading text-center">
				<h1 class="mb-4">Sign Up</h1>
			</div>
			<div class="form_box">
            <x-jet-validation-errors class="mb-4" />
            <form method="POST" action="{{ route('register') }}">
            @csrf
                <div class="mb-3">
					  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name" name="name" :value="old('name')" required autofocus autocomplete="name">
					</div>
					<div class="mb-3">
					  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email"  name="email" :value="old('email')" required >
					</div>
					<div class="mb-3 relative">
					  <input type="password" class="form-control" id="passwordInput1" placeholder="Password" name="password" required autocomplete="new-password">
					  <img src="assets/images/eye-off.svg" id="eyeIcon1"  onclick="togglePasswordVisibility('passwordInput1', 'eyeIcon1')">
					</div>
                    <div class="mb-3 relative">
					  <input type="password" class="form-control" id="passwordInput1" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
					</div>
					<a href="{{ route('password.request') }}" class="d-block">Forgot password?</a>
					<button class="mt-3 submit" type="submit" name="register">Sign In</button>

					<p class="mt-4 text-center"> By clicking “Sign up”, you agree  <br> to the Terms of Service </p>
					<p class="mt-5 text-center"> Already have an account?   <br> <a href="{{ route('login') }}" class="text-decoration">Sign in</a> </p>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- middle -->
</x-guest-layout>