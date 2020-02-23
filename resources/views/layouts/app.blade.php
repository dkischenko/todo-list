<html>
<head>
    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://kit.fontawesome.com/532c4526e4.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
