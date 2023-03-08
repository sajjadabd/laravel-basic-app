<header class="m-8 flex flex-col justify-center">
  <form action="/login" method="POST" class="flex flex-col mx-auto my-20  items-center space-y-4">
    @csrf
    <input type="email" name="email_login" placeholder="Email" class="input">
    @error('email')
      <p class="text-sm text-red-600 w-80">{{ $message }}</p>
    @enderror
    <input type="password" name="password_login" placeholder="Password" class="input">
    @error('password')
      <p class="text-sm text-red-600 w-80">{{ $message }}</p>
    @enderror
    <button type="submit" class="btn">Login</button>
  </form>
</header>