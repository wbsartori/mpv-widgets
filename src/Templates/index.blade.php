@extends('app')
@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-{{$quantity}} lg:grid-cols-{{$quantity}} gap-6">
        @foreach($charts as $key => $chart)
            <div class="bg-white p-6 rounded-lg shadow-md mt-5">
                <h2 class="text-lg font-semibold text-center mb-3">{{$chart['title']}}</h2>
                <canvas id="{{$chart['name'].$key}}"></canvas>
            </div>
            <script>
                const {{$chart['name'].$key}} = init('{{$chart['name'] . $key}}', {!! json_encode($chart['chart']) !!});
            </script>
            @isset($chart_button)
                <div class="card-footer">
                    @foreach($chart_button['buttons'] as $button)
                        {!! $button !!}
                    @endforeach
                </div>
            @endisset
        @endforeach
    </div>
@endsection
