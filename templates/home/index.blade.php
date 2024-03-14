@extends('app')
@section('content')
    <div class="card">
        <div class="card-header">
            {{$title}}
        </div>
        <canvas id="{{$name}}"></canvas>
        <script>
            const {{$name}} = document.getElementById('{{$name}}');
            {{$name}}.onclick = imprimirConsole;
            let data = {!! json_encode($chart) !!};
            new Chart({{$name}}, data);
        </script>

        <div class="card-footer">
            @foreach($chart_button['buttons'] as $button)
                {!! $button !!}
            @endforeach
        </div>
    </div>
@endsection