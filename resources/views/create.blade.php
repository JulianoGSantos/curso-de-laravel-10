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
        @csrf
        <h1>Nova Dúvida</h1>

        
        <input type="text" placeholder="Assunto" name="subject" id="subject">
        <textarea placeholder="Descrição" name="description" id="description" cols="30" rows="10"></textarea>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>