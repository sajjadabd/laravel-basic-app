<section >
	<form action="/register" method="POST" class="flex flex-col mx-auto my-20  items-center space-y-4">
		@csrf
		<input value="{{ old('username') }}" type="username" name="username" placeholder="Username" class="input-dark" >
		@error('username')
			<p class="error">{{ $message }}</p>
		@enderror
		<input value="{{ old('email') }}" type="text" name="email" placeholder="Email" class="input-dark">
		@error('email')
			<p class="error">{{ $message }}</p>
		@enderror
		<input value="{{ old('password') }}" type="password" name="password" placeholder="Password" class="input-dark">
		@error('password')
			<p class="error">{{ $message }}</p>
		@enderror
		<button type="submit" class="btn-dark">Sign Up</button>
	</form>
</section>