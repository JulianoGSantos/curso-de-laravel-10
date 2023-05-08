<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
</head>
<body>
    <h1>Listagem das dúvidas</h1>

    <table>
        <thead>
            <th>id</th>
            <th>assuntos</th>
            <th>descrição</th>
        </thead>
        <tbody>
            @foreach ($subs as $side)
                <tr>
                    <td> {{ $side->id }} </td>
                    <td> {{ $side->subject }} </td>
                    <td> {{ $side->description }} </td>
                    <td>
                        <a href=" {{ route('supports-show', $side->id) }} "> detalhes </a>
                        <a href="{{ route('supports-edit', $side->id) }}"> editar </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <a href="{{ route('supports-create') }}">Criar Dúvida</a>
    </table>
</body>
</html>