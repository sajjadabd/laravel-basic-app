<header class="m-8 flex flex-row justify-center">
  <form action="/login" method="POST" class="flex flex-row space-x-4">
    @csrf
    <input type="email" name="email_login" placeholder="Email" class="input">
    <input type="password" name="password_login" placeholder="Password" class="input">
    <button type="submit" class="btn">Login</button>
  </form>
</header>