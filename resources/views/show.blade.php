<h1>Detalhes da dúvida  {{ $side->id }}</h1>

<ul>
    <li>Assunto: {{ $side->subject}} </li>
    <li>Descrição: {{$side->description}} </li>
</ul>
<form action=" {{ route('supports-destroy', $side->id) }}" method="POST">
    @csrf
    @method('DELETE') 
    <button type="submit">Deletar</button>
</form>
