@extends('app')
@section('content')
<div class="w-full max-w-5xl bg-white shadow rounded p-6">
    <h1 class="text-2xl font-bold mb-4">Gerenciar Dashboards</h1>

    <!-- Listagem de Dashboards -->
    <table class="table-auto w-full border-collapse border border-gray-300 text-left">
        <thead>
        <tr class="bg-gray-200">
            <th class="p-2 border border-gray-300">ID</th>
            <th class="p-2 border border-gray-300">Nome</th>
            <th class="p-2 border border-gray-300">Exibição</th>
            <th class="p-2 border border-gray-300">URL</th>
            <th class="p-2 border border-gray-300">Ordem</th>
            <th class="p-2 border border-gray-300">Ações</th>
        </tr>
        </thead>
        <tbody id="dashboard-list">
        <!-- Exemplo de Registro -->
        <tr class="hover:bg-gray-100">
            <td class="p-2 border border-gray-300">1</td>
            <td class="p-2 border border-gray-300">Dashboard 1</td>
            <td class="p-2 border border-gray-300">Exibição 1</td>
            <td class="p-2 border border-gray-300">/dashboard-1</td>
            <td class="p-2 border border-gray-300">1</td>
            <td class="p-2 border border-gray-300">
                <button onclick="openModal(1)" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Editar</button>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div id="modal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white rounded shadow-lg w-3/4 max-w-2xl p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Cards da Dashboard</h2>
            <button onclick="closeModal()" class="text-red-500 text-xl">&times;</button>
        </div>
        <table class="table-auto w-full border-collapse border border-gray-300 text-left">
            <thead>
            <tr class="bg-gray-200">
                <th class="p-2 border border-gray-300">ID</th>
                <th class="p-2 border border-gray-300">Nome</th>
                <th class="p-2 border border-gray-300">Exibição</th>
                <th class="p-2 border border-gray-300">Linha</th>
                <th class="p-2 border border-gray-300">Coluna</th>
                <th class="p-2 border border-gray-300">Ações</th>
            </tr>
            </thead>
            <tbody id="cards-list">
            <!-- Exemplo de Registro -->
            <tr class="hover:bg-gray-100">
                <td class="p-2 border border-gray-300">1</td>
                <td class="p-2 border border-gray-300">Card 1</td>
                <td class="p-2 border border-gray-300">Exibição 1</td>
                <td class="p-2 border border-gray-300">1</td>
                <td class="p-2 border border-gray-300">1</td>
                <td class="p-2 border border-gray-300">
                    <a href="/edit-card/1" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Editar</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
    // Função para abrir o modal
    function openModal(dashboardId) {
        // Aqui você pode carregar dinamicamente os dados da tabela `dashboard_cards` via AJAX.
        document.getElementById('modal').classList.remove('hidden');
    }

    // Função para fechar o modal
    function closeModal() {
        document.getElementById('modal').classList.add('hidden');
    }
</script>
@endsection
