<!doctype html>
<html lang="{{App::getLocale() == "en" ? 'en':'kh'}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tech for Kid Cambodia</title>


<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles & Libraries-->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/websites/theme.css') }}" rel="stylesheet">
    <link href="{{ mix('css/websites/customize.css') }}" rel="stylesheet">


    <!-- Customize Styles -->
    @stack('websites-css')
</head>
<body>
@php
    $footer = footer();
@endphp
@include('websites.partials.header')

<div class="page-area">
    @yield('content')
    {{-- <a id="button">
        <div>
            <span>Up</span>
            <span><i class="fal fa-chevron-up"></i></span>
        </div>
    </a> --}}
    <div id="buttons">
        <span>
            <i class="fal fa-chevron-up"></i>
            <i class="fal fa-chevron-up rocket"></i>
        </span>
    </div>
</div>

@include('websites.partials.footer')
@include('websites.partials.modal-box')
<script type="text/javascript" async>
    window.onload = function (){
        @if(request()->session()->has('info'))
        toastr.info("{{ request()->session()->get('info') }}");
        @endif

        @if(request()->session()->has('success'))
        toastr.success("{{ request()->session()->get('success') }}");
        @endif

        @if(request()->session()->has('warning'))
        toastr.warning("{{ request()->session()->get('warning') }}");
        @endif

        @if(request()->session()->has('error'))
        toastr.error("{{ request()->session()->get('error') }}");
        @endif
    }
</script>
<!-- Customize Script -->
<script src="{{ mix('js/websites/vendor.js') }}" ></script>
<script type="text/javascript" src="{{ mix('/js/websites/api.js') }}"></script>
<script type="text/javascript" src="{{ mix('/js/websites/auth.js') }}"></script>
@stack('websites-js')

</body>
</html>
