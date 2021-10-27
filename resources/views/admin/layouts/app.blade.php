<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{ config('app.name') }}</title>

    {{-- <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <!-- App js -->
    <script src="/js/app.js"></script>
 --}}
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <body>
        <h1>This is example from ItSolutionStuff.com</h1>
        @yield('content')
    </body>

</html>