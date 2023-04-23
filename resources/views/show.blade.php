($subs as $item);
<h1>Detalhes da dúvida  {{ $item->subject}}</h1>

@foreach ($subs as $item)
    <ul>
        <li> {{ $item->subject }} </li>
        <li> {{ $item->description }} </li>
    </ul>
@endforeach