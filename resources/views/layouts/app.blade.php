<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        @yield('custom_css')
    </head>
    <body>
       @include('partials.header')

       <main>
            @yield('content')
       </main>

       @include('partials.footer')

       <script src="{{asset('js/app.js')}}"></script>
       @yield('custom_script')
     
    </body>
</html>