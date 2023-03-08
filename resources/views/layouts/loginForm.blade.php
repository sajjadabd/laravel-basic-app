<header >
  <h1 class="text-3xl font-bold m-10 text-center">
    Login
  </h1>
  <form action="/login" method="POST" class="flex flex-col mx-auto my-20  items-center space-y-4">
    @csrf
    <input type="text" value="{{ old('email') }}"  name="email" placeholder="Email" class="input-dark">
    @error('email')
      <p class="error">{{ $message }}</p>
    @enderror
    <input type="password" value="{{ old('password') }}" name="password" placeholder="Password" class="input-dark">
    @error('password')
      <p class="error">{{ $message }}</p>
    @enderror
    <button type="submit" class="btn-dark">Login</button>
    @error('mismatch')
      <p class="error">{{ $message }}</p>
    @enderror
  </form>

</header>