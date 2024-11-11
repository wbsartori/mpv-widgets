@extends('app')
@section('content')
    <div class="card">
        <div class="card-content">
            <div class="card-header">
                {{$chart['title']}}
            </div>
            <canvas id="{{$chart['name']}}"></canvas>
        </div>
        <script>
            const {{$chart['name']}} = document.getElementById('{{$chart['name']}}');
            let data = {!! json_encode($chart['chart']) !!};
            new Chart({{$chart['name']}}, data);
        </script>

        @isset($chart_button)
            <div class="card-footer">
                @foreach($chart_button['buttons'] as $button)
                    {!! $button !!}
                @endforeach
            </div>
        @endisset
    </div>

    <div class="card">
        <div class="card-content">
            <div class="card-header">
                {{$chart2['title']}}
            </div>
            <canvas id="{{$chart2['name']}}"></canvas>
        </div>
        <script>
            const {{$chart2['name']}} = document.getElementById('{{$chart2['name']}}');
            let data = {!! json_encode($chart2['chart']) !!};
            new Chart({{$chart2['name']}}, data);
        </script>

        @isset($chart_button)
            <div class="card-footer">
                @foreach($chart_button['buttons'] as $button)
                    {!! $button !!}
                @endforeach
            </div>
        @endisset
    </div>
@endsection