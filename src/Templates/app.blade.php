@php
    header('Content-Type: text/html; charset=utf-8');
    $configFile = require dirname(__DIR__, 3) . '/config/dashboards.php';
    $providers = \Dashboards\Helpers\ProvidersHelper::make($configFile)->handleNavigation();
    $searchBar = \Dashboards\Helpers\ProvidersHelper::make($configFile)->handleSearchBar();
@endphp
        <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('page_title')</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="../../src/Js/CreateChartJS.js"></script>
    <script>
        window.tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
</head>
<body>

@if($searchBar['enabled'] === true)
    <header class="bg-white shadow">
        <div class="container mx-auto flex items-center justify-between p-2" x-data="{ open: false }">
            @if($searchBar['logo'][0]['enabled'] === true)
                <div class="flex-1">
                    <img src="{{$searchBar['logo'][0]['src']}}" alt="Logo" class="h-12 w-48 ml-0">
                </div>
            @endif
            <div class="flex justify-center flex-1 w-full">
                <input type="text" placeholder="{{$searchBar['placeholder']}}"
                       class="w-full px-6 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500">
            </div>
            <div class="relative flex justify-end flex-1">
                <button @click="open = !open"
                        class="inline-flex items-center px-4 py-2 text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300 focus:outline-none">
                    {{$searchBar['dropdown']['label']}}
                    <svg class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 10l5 5 5-5H7z"/>
                    </svg>
                </button>
                <div x-show="open" @click.away="open = false"
                     class="absolute right-0 z-10 w-48 bg-white border border-gray-200 rounded-lg shadow-lg transform translate-y-12">
                    @foreach($providers as $key => $provider)
                        <a href="{{$key}}"
                           class="block px-4 py-2 text-gray-800 hover:bg-gray-100">{{$provider}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </header>
@endif

@yield('content')

</body>
</html>