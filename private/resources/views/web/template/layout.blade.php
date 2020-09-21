<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">

    {{-- SEO Meta --}}
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}

    {{-- Meta --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/png" href="/favicon.png">

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    {{-- <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap&subset=latin-ext" rel="stylesheet"> --}}

    {{-- Google Fonts --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet"> --}}

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    {{-- Style --}}
    <link rel="stylesheet" href="{{ asset(mix('assets/dist/css/style.min.css')) }}">

    {{-- <link rel="stylesheet" href="https://use.typekit.net/imd0kcu.css"> --}}

    {{-- Variables --}}
    <script>
        var App = {
            url: "{{ env('APP_URL') }}",
            currentUrl: "{{ url()->current() }}",
            locale: "{{ app()->getLocale() }}",
        };
    </script>

    {{-- Breadcrumbs --}}
    @if(!(isset($unsetBreadcrumbs) && $unsetBreadcrumbs == true))
        {{ Breadcrumbs::view('breadcrumbs::json-ld') }}
    @endif

    {{-- Global site tag (gtag.js) - Google Analytics --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161200658-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-161200658-1');
    </script>
</head>
<body class="locale-{{ app()->getLocale() }}">
    {{-- Header --}}
    @yield('headerBefore')
    @include('web.template.partials.header', [
        'headerClass' => $headerClass ?? ''
    ])
    @include('web.template.partials.hamburger-menu')
    @yield('headerAfter')

    {{-- Content --}}
    @yield('contentBefore')
    @yield('content') 
    @yield('contentAfter')

    {{-- Footer --}}
    @yield('footerBefore')
    @include('web.template.partials.footer')
    @yield('footerAfter')

    {{-- Script --}}
    @yield('scriptBefore')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script src="{{ asset(mix('assets/dist/js/scripts.min.js')) }}"></script>
    @yield('scriptAfter')
</body>
</html>
