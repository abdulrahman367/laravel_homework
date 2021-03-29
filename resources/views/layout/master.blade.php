<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- js file --}}
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- bootstrap css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')
</body>
</html>
