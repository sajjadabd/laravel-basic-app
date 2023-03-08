<section >
	<form action="/register" method="POST" class="flex flex-col mx-auto my-20  items-center space-y-4">
		@csrf
		<input type="username" name="username" placeholder="Username" class="input " >
		<input type="email" name="email" placeholder="Email" class="input">
		<input type="password" name="password" placeholder="Password" class="input">
		<button type="submit" class="btn">Sign Up</button>
	</form>
</section>