<section >
	<form action="/register" method="POST" class="flex flex-col mx-auto my-20  items-center space-y-4">
		@csrf
		<input value="{{ old('username') }}" type="username" name="username" placeholder="Username" class="input" >
		@error('username')
			<p class="text-sm text-red-600 w-80">{{ $message }}</p>
		@enderror
		<input value="{{ old('email') }}" type="email" name="email" placeholder="Email" class="input">
		@error('email')
			<p class="text-sm text-red-600 w-80">{{ $message }}</p>
		@enderror
		<input value="{{ old('password') }}" type="password" name="password" placeholder="Password" class="input">
		@error('password')
			<p class="text-sm text-red-600 w-80">{{ $message }}</p>
		@enderror
		<button type="submit" class="btn">Sign Up</button>
	</form>
</section>