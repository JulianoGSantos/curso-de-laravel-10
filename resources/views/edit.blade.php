<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORMULÁRIO</title>
</head>
<body>
    <form action=" {{ route ('supports-update', $side->id) }} " method="POST">
        @csrf
        <h1>Dúvida {{ $side->id }} </h1>

        
        <input type="text" placeholder="Assunto" name="subject" id="subject" value=" {{ $side->subject }} ">
        <textarea placeholder="Descrição" name="description" id="description" cols="30" rows="10"> {{ $side->description }} </textarea>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>