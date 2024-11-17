@extends('app')
@section('content')
    <div class="bg-gray-100 flex items-center justify-center min-h-screen">
        <div class="text-center bg-white shadow-lg rounded-lg p-8 max-w-md mx-auto">
            <h1 class="text-6xl font-bold text-red-500 mb-4">404</h1>
            <h2 class="text-2xl font-semibold text-gray-700 mb-6">Dashboard Não Encontrada</h2>
            <p class="text-gray-500 mb-6">Desculpe, mas a dashboard que você está procurando não existe ou foi removida.</p>
            <a href="/">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out transform hover:scale-105">
                    Voltar para a Dashboard Inicial
                </button>
            </a>
        </div>
    </div>
@endsection
