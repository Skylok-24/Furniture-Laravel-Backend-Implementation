<div>
    Let all your things have their places; let each part of your business have its time. - Benjamin Franklin

    {{ $data }}
    {!! $data !!}

    @php
        echo $data;
        
        $data = 3;
    @endphp

    @if (is_string($data))
        <h1>Lokman</h1>
    @else
        <h1>Brahmia</h1>            
    @endif

    @for($i = 0 ; $i < 10 ; $i++)
        <h2> The Value Is {{$i}} </h2>
    @endfor

    @switch($data)
        @case(1)
            <h1>NN</h1>
            @break
        @case(2)
            <h1>NN</h1>
            @break
        @default
            <h1>Oui</h1>
    @endswitch
</div>