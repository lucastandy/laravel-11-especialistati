<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
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
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>-</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Nenhum registro encontrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $users->links() }}
    </body>
</html>
