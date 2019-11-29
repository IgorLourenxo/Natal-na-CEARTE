<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    {{-- Meta Charset --}}
    <meta charset="utf-8">

    {{-- Meta Viewport --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Favicon --}}
    <link rel="shortcut icon" href="" type="image/x-icon">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Title --}}
    <title>Laravel w/ TailwindCSS</title>

    {{-- Description --}}
    <meta name="description" content="Description of this website.">

    {{-- Styles --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-neutral">

    {{-- Loader, that disappears when the page is ready (through JQuery) --}}
    @include('includes.loader')

    {{-- Content --}}
    @yield('content')

    {{-- Scripts --}}
    <script src="{{ mix('js/app.js') }}"></script>

    {{-- Font Awesome Icons --}}
    <script src="https://kit.fontawesome.com/c0dfa17e80.js" crossorigin="anonymous"></script>
</body>

</html>