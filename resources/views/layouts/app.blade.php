<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- <link rel="stylesheet" src="{{-- asset('css/header.css') --}}" type="text/css"> -->
        <link href="/css/layouts/app.css" rel="stylesheet" type="text/css">
        <link href="/css/layouts/header.css" rel="stylesheet" type="text/css">
        @yield('header')
        <title>@yield('title')</title>

        <script type="text/javascript">
            window.Laravel = window.Laravel || {};
            window.Laravel.csrfToken = "{{csrf_token()}}";
        </script>

    </head>
    <body>
        @include('layouts.header')
        <div id="container">
            @include('layouts.breadcrumb')
            @yield('content')
        </div> 
<!-- 
        <div id="app">
            <example></example>
        </div> -->

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>