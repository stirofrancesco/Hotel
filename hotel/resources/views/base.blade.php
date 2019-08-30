<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>@hasSection('title')@yield('title') | @endif{{config('app.name')}}</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta charset="utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />

        <meta name ="description" content="@yield('description')">

        @yield('meta')

        <link rel="canonical" href="{{Request::url()}}" />
        <link rel="alternate" hreflang="x-default" href="{{Request::url()}}" />

        <link href="https://fonts.googleapis.com/icon?family=Roboto|Material+Icons" rel="stylesheet">

        <style>
            html, body {
                padding: 0;
                margin: 0;
            }
        </style>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        @yield('style')

    </head>
    <body class="@yield('body_class')">
        <div id="app">
            <header class="header">
                @include('components.header')
            </header>

            <main>
                @yield('content')
            </main>
        </div>

        <script type="text/javascript">
            var locale = '{{ app()->getLocale() }}';
            var base_url = '{{config('app.url')}}';

            var API_URL = '{{config('app.api')}}';
            var API_VER = '{{config('app.api_version')}}';

            var API;
            var COOKIE;
        </script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        @yield('script')
    </body>
</html>
