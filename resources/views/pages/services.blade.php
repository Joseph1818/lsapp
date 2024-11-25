@extends ('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    {{-- checking if there is at least one service in the array (count) --}}
    @if(count($services) > 0) 
        <ul>
            @foreach($services as $service)
            <li>{{$service}}</li>
            @endforeach
        </ul>

    @endif
@endsection
