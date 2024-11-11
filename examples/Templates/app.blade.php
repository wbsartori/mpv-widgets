<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('page_title')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .card {
            color: white;
            display: flex;
            width: 45rem;
            height: auto;
            border: 1px #0f4d7f solid;
            background-color: #0f4d7f;
            justify-items: center;
            border-radius: 0.375rem;
            margin: 1rem;
            padding: 1rem;
        }
        .card-content {
            flex: 1;
            width: 45rem;
        }
        .card-header {
            flex: 1;
            text-align: center;
        }
    </style>
    <script src="../assets/provedor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    @yield('content')
</body>
</html>