<h1>Novo Usuário</h1>

<form action="{{ route('users.store') }}" method="post">
    @csrf()
    <input type="text" name="name" placeholder="Nome">
    <input type="email" name="email" id="E-mail">
    <input type="password" name="password" id="Senha">
    <button type="submit">Enviar</button>
</form>