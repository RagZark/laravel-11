<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<body>
    <h1>Usuários</h1>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        <tbody>
            <tr>
                @forelse ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>-</td>
            </tr>
            @empty
            <tr>
                <td colspan="100">Nenhum usuário no banco.</td>
            </tr>
            @endforelse
            </tr>
        </tbody>
        </thead>
    </table>

    {{$users->links()}}
</body>

</html>