<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}" />

        <title>@yield('title', 'Sample App')</title>

        <link rel="stylesheet" href="/css/app.css">
        <link href="/css/font-awesome.css" rel='stylesheet' type='text/css'>
        @yield('css')
    </head>
    <body>
        @include('layouts._header')

        <div class="container">
            <div class="col-md-offset-1 col-md-10">
                @include('shared.messages')
                @yield('content')
                @include('layouts._footer')
            </div>
        </div>

        <script src="/js/app.js"></script>
        <script src="/js/comment.js"></script>
        @yield('js')
    </body>
</html>