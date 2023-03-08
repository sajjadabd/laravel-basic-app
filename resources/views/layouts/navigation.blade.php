<header>
	<nav>
		<ul class="flex flex-row space-x-16 justify-center mt-10">
			<li class="">
				<a href="/">home</a>
			</li>
			<li>
				<a href="/about">create</a>
			</li>
			<li>
				<a href="/register">register</a>
			</li>
			@auth
			<form action="/logout" method="post">
				@csrf
				<button type="submit">
					logout
				</button>
			</form>
			@else
			<li>
				<a href="/login">login</a>
			</li>
			@endauth
			
			
		</ul>
	</nav>
</header>