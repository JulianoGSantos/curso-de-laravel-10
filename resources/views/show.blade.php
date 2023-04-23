<h1>Detalhes da dúvida  </h1>

@foreach ($subs as $item)
    <ul>
        <li> {{ $item->subject }} </li>
        <li> {{ $item->description }} </li>
    </ul>
@endforeach