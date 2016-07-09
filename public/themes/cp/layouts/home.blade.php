<!DOCTYPE html>
<html class="lockscreen">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ Theme::getTitle() }}</title>
        <meta name="description" content="Cipherpols">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">

        {!! Theme::asset()->styles() !!}
        {!! Theme::asset()->scripts() !!}

        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-hover-dropdown.min.js') }}"></script>
        <script src="{{ asset('js/modernizr.custom.js') }}"></script>

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
        <script src="{{ asset('js/html5shiv.js') }}"></script>
        <script src="{{ asset('js/respond.min.js') }}"></script>
        <![endif]-->
    </head>

    <body class="home">
        {!! Theme::content() !!}
        {!! Theme::partial('footer') !!}
        {!! Theme::asset()->container('footer')->scripts() !!}
    </body>
</html>
