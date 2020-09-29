<html>
<head>
    <title>Achat Informatique</title>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('styles/style.css') }}">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
</head>
<body>
    <header>
        @yield('title')
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="page-footer font-small blue pt-4">
        <p>
            51999 - André Pereira
        </p>
        <p>
            53212 - Léopold Mols
        </p>
        <p>
            PRJG5 - SRV
        </p>
    </footer>
</body>
</html>
