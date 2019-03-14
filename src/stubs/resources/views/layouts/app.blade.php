<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Dizzytree App') }}</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    </head>
    <body class="bg-grey-lighter font-sans antialiased text-black leading-tight">
        <div id="app">
            @include('partials.nav')
            <div class="container mx-auto mt-6 px-4">
                @yield('body')
            </div>
            @include('partials.footer')
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
