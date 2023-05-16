<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORMULÁRIO</title>
</head>
<body>
    <form action=" {{ route ('supports-store') }} " method="POST">
       @include('admin.partials.form')
    </form>
</body>
</html>