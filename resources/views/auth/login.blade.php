<div>
  <h1>
    Login
  </h1>

  <form action="/login" method="post">
    @csrf
    <input type="text" name="email" placeholder="email">
    <input type="password" name="password" placeholder="senha">
    <button type="submit">Logar</button>
  </form>
</div>
</div>